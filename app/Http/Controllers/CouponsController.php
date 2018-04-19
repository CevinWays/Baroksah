<?php

namespace App\Http\Controllers;
use App\Coupon;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CouponsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coupon = Coupon::where('code', $request->coupon_code)->first();

        if (!$coupon) {
            return redirect()->route('checkout.index')->withErrors('Kupon Tidak Berlaku! Coba lagi!');
        }
        session()->put('coupon',[
            'name' => $coupon->code,
            'discount'=> $coupon->discount(Cart::subtotal()),
        ]);
        
        return redirect()->route('checkout.index')->with('success_message','Kupon Berhasil digunakan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        session()->forget('coupon');

        return redirect()->route('checkout.index')->with('success_message','Kupon Berhasil di hapus! ');
    }
}
