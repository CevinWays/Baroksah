@component('mail::message')

# Pengalihan Nama Reksadana

Terimakasih atas pembelian reksadana di Baroksah

**Order ID:** {{$order->id}} <br>
**Order Email:** {{$order->billing_email}} <br>
**Order Nama Pembayar:** {{$order->billing_name}} <br>
**Order Total:** Rp.{{$order->billing_total}} <br>

**Detail Produk Yang dibeli** <br>
@foreach ($order->products as $product)
Nama: {{$product->name}} <br>
Harga: Rp.{{$product->price}} <br>
Jumlah: {{$product->pivot->quantity}} <br>
@endforeach

@component('mail::button',['url'=>config('app.url'),'color'=>'green'])
Ke Baroksah
@endcomponent

Terimakasih telah memilih Baroksah

Regrads,<br>
{{config('app.name')}}
@endcomponent