@extends('layout.layout') 
@section('content')
<div class="clearfix"></div>
<!-- Sub Header -->
<div class="container">
    <div class="col-12">
        <h2>Cart</h2>
        <nav class="text-right" aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cart</li>
        </ol>
        </nav>
    </div>
</div>
<!-- Sub Header -->
<div class="clearfix"></div>
<div class="section-md">
    <div class="container">
        <h4>2 item(s) di keranjang anda</h4>
        <div class="card">
            <div class="card-body">
                <div class="row pad-20">
                    <div class="col-12 m-bot-5">
                        <div class="col-md-2">
                            <img src="images/reksadana1.jpg" class="img-responsive" alt=""> </div>
                            <div class="col-md-6">
                                <p>Lorem Ipsum passages more recently with desktop publishing software including versions
                                    of Lorem Ipsum generators on the Internet.</p>
                            </div>
                        <div class="col-md-4 text-right">
                            <a href="#"><span class="fa fa-lg fa-close"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pad-20">
            <div class="col-12 m-bot-5">
                <button type="button" class="btn btn-rounded btn-secondary">Checkout</button>
            </div>
        </div>
    </div>
</div>
@endsection