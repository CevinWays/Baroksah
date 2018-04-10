<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\CheckoutRequest;
use Gloudemans\Shoppingcart\Facades\Cart;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;
class CheckoutPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $tax = config('cart.tax')/100;
        // $discount = session()->get('coupon')['discount']??0;
        // $newSubtotal=(Cart::subtotal() - $discount);
        // $newTax = $newSubtotal * $tax;
        // $newTotal = $newSubtotal * (1+$tax);

        return view('checkout')->with([
            'discount' => $this->getNumbers()->get('discount'),
            'newSubtotal' => $this->getNumbers()->get('newSubtotal'),
            'newTax' => $this->getNumbers()->get('newTax'),
            'newTotal' => $this->getNumbers()->get('newTotal'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CheckoutRequest $request)
    {
        $contents = Cart::content()->map(function ($item) {
            return $item->model->slug.', '.$item->qty;
        })->values()->toJson();

        try {
            $charge = Stripe::charges()->create([
                'amount' => $this->getNumbers()->get('newTotal') / 13000,
                'currency' => 'usd',
                'source' => $request->stripeToken,
                'description' => 'Pembelian Reksadana',
                'receipt_email' => $request->email,
                'metadata' => [
                    'contents' => $contents,
                    'quantity' => Cart::instance('default')->count(),
                    'discount' => collect(session()->get('coupon'))->toJson(),
                ],
            ]);

            // $order = $this->addToOrdersTables($request, null);
            // Mail::send(new OrderPlaced($order));

            Cart::instance('default')->destroy();
            session()->forget('coupon');
            // session()->forget('coupon');

            return redirect()->route('thankyou.index')->with('success_message', 'Terimakasih pembayaran anda telah berhasil!');
        } catch (CardErrorException $e) {
            // $this->addToOrdersTables($request, $e->getMessage());
            return back()->withErrors('Error! ' . $e->getMessage());
        }
    }

    private function getNumbers(){
        $tax = config('cart.tax')/100;
        $discount = session()->get('coupon')['discount']??0;
        $newSubtotal=(Cart::subtotal() - $discount);
        $newTax = $newSubtotal * $tax;
        $newTotal = $newSubtotal * (1+$tax);

        return collect([
            'tax' => $tax,
            'discount' => $discount,
            'newSubtotal' => $newSubtotal,
            'newTax' => $newTax,
            'newTotal' => $newTotal,
        ]);
    }
}
