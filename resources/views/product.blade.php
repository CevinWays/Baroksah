@extends('layout.layout') 
@section('content')
<div class="clearfix"></div>
<!-- Sub Header -->
<div class="container">
    <div class="col-12">
        <h2>Product {{$product->name}}</h2>
        <nav class="text-right" aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                <li class="breadcrumb-item"><a href="/shop">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Product</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Sub Header -->
<div class="clearfix"></div>
<div class="section-md">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 m-bot-5">
                <div class="col-md-5">
                    <img src="{{asset('images/products/'.$product->slug.'.png')}}" alt="Card images" class="img-responsive"> 
                </div>
                <div class="col-md-6 col-md-offset-1">
                    <h4>{{$product->name}}</h4>
                    <p>{{$product->ytd}}.</p>
                    <p>{{$product->kategori}}</p>
                    <div class="readmore">
                        <a href="#">
                            <i class="fa fa-angle-right" aria-hidden="true"></i> {{$product->presentPrice()}}</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
            <div class="section-md">
                <div class="container">
                <h3>Anda Mungkin Suka</h3>
                <div class="row">
                    @foreach ($MungkinSuka as $MungkinAnda)
                        <div class="col-md-3 m-bot-4">
                            <div class="card"> 
                                <a href="{{route('shop.show',$MungkinAnda->slug)}}">
                                    <img class="card-img-top img-responsive" src="{{asset('images/products/'.$MungkinAnda->slug.'.png')}}" alt="Card images">
                                    <div class="card-body">
                                    <p class="card-text">{{$MungkinAnda->name}}</p>
                                    <p class="card-text">{{$MungkinAnda->ytd}}</p>
                                </a>
                                <a href="{{route('shop.show',$MungkinAnda->slug)}}" class="btn btn-primary">{{$MungkinAnda->presentPrice()}}</a> </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                </div>
            </div>
    </div>
        <!-- row -->
    </div>
</section>
</div>
</div>
</div>
</div>
</div>
@endsection