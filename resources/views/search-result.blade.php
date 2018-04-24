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
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Beranda</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Search
                </li>
            </ol>
        </nav>
        <h2>Hasil Pencarian</h2>
    </div>
</div>
<!-- Sub Header -->
<div class="clearfix"></div>
<div class="section-md">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 m-bot-5">
                <p>{{$products->count()}} hasil untuk {{ request()->input('query') }}</p>
                @foreach ($products as $product)
                <div class="card m-bot-2" style="box-shadow: 0 5px 9px 0 #BDBDBD; border-color: white" >
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
                            <a href="{{ route('shop.show',$product->slug) }}" class="btn btn-primary">Lihat</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
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