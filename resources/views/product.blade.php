@extends('layout.layout') 

@section('extra-css-star')

<!-- Star Rating -->
<link rel="stylesheet" href="{{URL::asset('js/star-rating/css/star-rating.css')}}" media="all" type="text/css"/>
<link rel="stylesheet" href="{{URL::asset('js/star-rating/themes/krajee-fa/theme.css')}}" media="all" type="text/css"/>
<link rel="stylesheet" href="{{URL::asset('js/star-rating/themes/krajee-svg/theme.css')}}" media="all" type="text/css"/>
<link rel="stylesheet" href="{{URL::asset('js/star-rating/themes/krajee-uni/theme.css')}}" media="all" type="text/css"/>

@endsection

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
        {{-- <span><i class="fa fa-info"></i></span> --}}
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
        {{-- <div class="row m-bot-2">
            <div class="col-md-6">
                
            </div>
        </div> --}}
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Beranda</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/shop">Shop</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Product</li>
            </ol>
        </nav>
        <h2 class="uppercase">{{$product->name}}</h2>
    </div>
</div>

<!-- Sub Header -->
<div class="clearfix"></div>

<div class="section-md">
    <div class="container m-top-1">
        <div class="row">
            <div class="col-sm-12 m-bot-4">
                <div class="card" style="box-shadow: 0 5px 9px 0 #BDBDBD; border-color: white" >
                    <div class="row">
                        <div class="col-md-2 m-top-1" style="margin-left: 10px">
                            <img src="{{asset('storage/'.$product->image)}}" alt="Card images" class="img-responsive">
                        </div>
                        <div class="col-md-4">
                            <h4>{{$product->slug}}</h4>
                            <input type="text" class="kv-gly-heart rating-loading" value="{{$product->rating}}" data-size="xs" title="" readonly>
                            <p>YTD : {{$product->ytd}}</p>
                            <p>Reksadana {{$product->kategori}}</p>
                        </div>
                        <div class="col-md-2">
                            <h4>{{$product->presentPrice()}}</h4>
                            <form action="{{ route('cart.store') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <input type="hidden" name="name" value="{{ $product->name }}">
                                <input type="hidden" name="price" value="{{ $product->price }}">
                                <button type="submit" class="btn btn-primary">Tambah ke Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            
                @include('menus.chartjs')
            
        </div>
        
        <h3>Anda Mungkin Suka</h3>
        <div class="row">

            @foreach ($MungkinSuka as $MungkinAnda)
            <div class="col-md-2 col-sm-2 m-bot-2">
                <div class="col-img-hover" style="box-shadow: 0 5px 9px 0 #BDBDBD; border-color: white" >
                    <div class="img-hover-st-4">
                        <div class="text center">
                            <a class="btn btn-md btn-outline-primary" style="color: white" href="{{route('shop.show',$MungkinAnda->slug)}}">{{$MungkinAnda->presentPrice()}}</a>
                            <br>
                            <h3 class="uppercase">{{$MungkinAnda->slug}}</h3>
                            <p>{{$MungkinAnda->name}}</p>
                            <p>YTD : {{$MungkinAnda->ytd}}</p>
                            <p>Rating : {{$MungkinAnda->rating}}</p>
                        </div>
                        <div class="imgbox img-responsive">
                            <img src="{{asset('storage/'.$MungkinAnda->image)}}" alt="Card images" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
           
    </div>
    <!-- row -->
</div>
@endsection
@section('extra-js-star')
    <!-- Star Rating --> 
<script src="{{URL::asset('js/star-rating/star-rating.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('js/functions.js')}}" type="text/javascript"></script>
@endsection