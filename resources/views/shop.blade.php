@extends('layout.layout') 
@section('content')
<div class="clearfix"></div>
<!-- Sub Header -->
<div class="container">
  <div class="col-12">
    <h2>{{$categoryName}}</h2>
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

<div class="row">
  <div class="col-md-12 m-bot-2">
    <div class="col-md-6">
      <div class="dropdown">
        <label for="dropdown" style="margin-right: 10px">Kategori :</label><button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Reksadana
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
          @foreach ($categories as $category)
            <li><a href="{{route('shop.index',['category'=>$category->slug])}}">Reksadana {{$category->kategori}}</a></li>    
          @endforeach
        </ul>
      </div>
    </div>
    <div class="col-md-6 text-right">
      <label for="name">Harga :</label>
      <a href="{{route('shop.index',['category'=>request()->category,'sort'=>'low_high'])}}">Rendah Ke Tinggi</a>
      <span>|</span>
      <a href="{{route('shop.index',['category'=>request()->category,'sort'=>'high_low'])}}">Tinggi Ke Rendah</a>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12">

    @foreach ($products as $product)
    <div class="col-md-2 col-sm-2 m-bot-2">
      <div class="col-img-hover">
        <div class="img-hover-st-4">
          <div class="text">
            <a class="btn btn-primary" href="{{route('shop.show',$product->slug)}}">{{$product->presentPrice()}}</a>
            <br>
            <h3 class="uppercase">{{$product->slug}}</h3>
            <p>{{$product->name}}</p>
            <p>YTD : {{$product->ytd}}</p>
          </div>
          <div class="imgbox img-responsive"> <img src="{{asset('images/products/'.$product->slug.'.png')}}" alt="Card images"></div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
{{-- {{$products->links()}} --}}
{{$products->appends(request()->input())->links()}}
</div>
</div>
@endsection