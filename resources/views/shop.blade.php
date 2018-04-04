@extends('layout.layout') 
@section('content')
<div class="clearfix"></div>
<!-- Sub Header -->
<div class="container">
  <div class="col-12">
    <h2>Shop</h2>
    <nav class="text-right" aria-label="breadcrumb" role="navigation">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
        <li class="breadcrumb-item active" aria-current="page">Shop</li>
      </ol>
    </nav>
  </div>
</div>
<!-- Sub Header -->

<div class="clearfix"></div>
<!-- end features Section 01 -->
<div class="section-md">
<div class="container">
  <div class="col-12">

    @foreach ($products as $product)
    <div class="col-md-2 col-sm-2 m-bot-2">
      <div class="col-img-hover">
        <div class="img-hover-st-4">
          <div class="text">
            <h3 class="uppercase">{{$product->slug}}</h3>
            <p>{{$product->name}}</p>
            <p>YTD : {{$product->ytd}}</p>
            <br>
            <a class="btn btn-sm btn-primary" href="{{route('shop.show',$product->slug)}}">{{$product->presentPrice()}}</a></div>
          <div class="imgbox img-responsive"> <img src="{{asset('images/products/'.$product->slug.'.png')}}" alt="Card images"></div>
        </div>
      </div>
    </div>
    @endforeach

  </div>
</div>
</div>
@endsection