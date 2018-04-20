@extends('layout.layout') 
@section('content')
<div class="clearfix"></div>
<!-- Sub Header -->
<div class="container m-top-1">
    <div class="row">
        @if (session()->has('success_message'))
        <div class="alert alert-primary animate-in" data-anim-delay="300" data-anim-type="fade-in-down">
        <span>
            <i class="fa fa-thumbs-o-up"></i>
        </span>
        {{ session()->get('success_message') }}
        </div>
        @endif 
    
        @if(count($errors) > 0)
        <div class="alert alert-danger animate-in" data-anim-delay="400" data-anim-type="fade-in-down">
        <ul>
            @foreach ($errors->all() as $error)
            <li><span class="fa fa-info-circle"></span> {!! $error !!}</li>
            @endforeach
        </ul>
        </div>
        @endif
    </div>
</div>
<div class="container">
    <div class="col-12">
        <h2>Cart</h2>
        <nav class="text-right" aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Beranda</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Sub Header -->
<div class="clearfix"></div>
<div class="section-md">
    <div class="container">
        @if (Cart::count() > 0)
        <h4>{{ Cart::count() }} item di keranjang anda</h4>
        @foreach (Cart::content() as $item)
        <div class="card m-bot-2" style="box-shadow: 0 4px 8px 0 #BDBDBD; border-color: white">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="col-md-2">
                            <a href="{{ route('shop.show', $item->model->slug) }}">
                            <img src="{{asset('storage/'.$item->model->image)}}" alt="Card images" class="img-responsive">
                        </div>
                        <div class="col-md-6">
                            <h4>{{ $item->model->name }}</h4>
                            <p>YTD : {{ $item->model->ytd }}</p>
                            <h4>{{ $item->model->presentPrice() }}</h4>
                        </div>
                        </a>
                        <div class="col-md-2">
                            <form action="{{ route('cart.switchToSaveForLater', $item->rowId) }}" method="POST">
                                {{ csrf_field() }}

                                <button type="submit" class="btn btn-rounded btn-success">Simpan nanti</button>
                            </form>
                        </div>
                        <div class="col-md-2 text-right">
                            <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                {{ csrf_field() }} {{ method_field('DELETE') }}
                                <button type="submit" class="btn">
                                    <span class="fa fa-lg fa-close"></span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="row pad-20">
            <div class="card" style="box-shadow: 0 4px 8px 0 #BDBDBD; border-color: white">
                <div class="col-md-6">
                    <table class="f-20">
                        <tbody>
                            <tr>
                                <td>Subtotal</td>
                                <td>:</td>
                                <td>{{presentPrice(Cart::subtotal())}}</td>
                            </tr>
                            <tr>
                                <td>Pajak 13%</td>
                                <td>:</td>
                                <td>{{presentPrice(Cart::tax())}}</td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Total</strong>
                                </td>
                                <td>:</td>
                                <td>
                                    <strong> {{presentPrice(Cart::total())}} </strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

        <div class="row pad-20">
            <div class="col-12 m-bot-5 text-right">
                <a href="{{route('shop.index')}}" class="btn btn-rounded btn-primary">Lanjut Belanja</a>
                <a href="{{route('checkout.index')}}" class="btn btn-rounded btn-secondary">Checkout</a>
            </div>
        </div>
        @else
        <div class="row pad-20 text-center">
            <span class="fa fa-3x fa-shopping-cart"></span>
            <h1>Tidak ada item di Cart!</h1>
            <a href="{{route('shop.index')}}" class="btn btn-rounded btn-primary">Lanjut Belanja</a>
            <hr>
        </div>
        @endif @if (Cart::instance('saveForLater')->count() > 0)
        <h4>{{ Cart::instance('saveForLater')->count() }} item di Simpan Nanti</h4>
        @foreach (Cart::instance('saveForLater')->content() as $item)
        <div class="card m-bot-2" style="box-shadow: 0 5px 9px 0 #BDBDBD; border-color: white">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="col-md-2">
                            <a href="{{ route('shop.show', $item->model->slug) }}">
                            <img src="{{asset('storage/'.$item->model->image)}}" alt="Card images" class="img-responsive">
                        </div>
                        <div class="col-md-6">
                            <h4>{{ $item->model->name }}</h4>
                            <p>YTD : {{ $item->model->ytd }}</p>
                            <h4>{{ $item->model->presentPrice() }}</h4>
                        </div>
                        </a>
                        <div class="col-md-2">
                            <form action="{{ route('saveForLater.switchToCart', $item->rowId) }}" method="POST">
                                {{ csrf_field() }}

                                <button type="submit" class="btn btn-rounded btn-success">Ke keranjang</button>
                            </form>
                        </div>
                        <div class="col-md-2 text-right">
                            <form action="{{ route('saveForLater.destroy', $item->rowId) }}" method="POST">
                                {{ csrf_field() }} {{ method_field('DELETE') }}
                                <button type="submit" class="btn">
                                    <span class="fa fa-lg fa-close"></span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach @else
        <div class="row pad-20 text-center">
            <span class="fa fa-3x fa-bookmark"></span>
            <h4>Anda tidak punya item di Simpan Nanti</h4>
        </div>
        @endif
    </div>
</div>
@endsection