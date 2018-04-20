@component('mail::message')

# Pengalihan Nama Reksadana

Terimakasih atas kepercayaan anda terhadap Baroksah

**Order ID:** {{$order->id}} <br>
**Order Email:** {{$order->billing_email}} <br>
**Order Nama Pembayar:** {{$order->billing_name}} <br>
**Order Total:** Rp.{{$order->billing_total}} <br>

**Detail Produk** <br>
@foreach ($order->products as $product)
Nama: {{$product->name}} <br>
Harga: Rp.{{$product->price}} <br>
Jumlah: {{$product->pivot->quantity}} <br>
@endforeach

Terimakasih telah memilih Baroksah

Salam, Cevin Ways<br>
{{config('app.name')}}
@endcomponent