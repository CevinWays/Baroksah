@extends('layout.layout') 
@section('content')
<div class="clearfix"></div>
<!-- Sub Header -->
<div class="container">
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
    <div class="row m-bot-2">
      <div class="col-md-6">
        <h2>{{$categoryName}}</h2>
      </div>
      <div class="col-md-6 m-top-2">
        @include ('menus.search')
      </div>
    </div>
    <nav class="text-right" aria-label="breadcrumb" role="navigation">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Beranda</a>
        </li>
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
      
        <div class="col-md-4 col-sm-12 col-xs-12" data-anim-type="fade-in-down" data-anim-delay="100">
            <div class="row">
                <div class="feature-col-02 sty-01 active" style="height: 150px;padding: 20px;margin: 10px; border-color: white;">
                    <span class="fa fa-3x fa-money"></span>
                    <h4 class="uppercase white">Promo</h4>
                    <p>gunakan kode kupon <strong>abc123</strong> disk. 100k! </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12" data-anim-type="fade-in-down" data-anim-delay="100">
            <div class="row">
                <div class="feature-col-02 sty-01 active" style="height: 150px;padding: 20px;margin: 10px; background-color: crimson;border-color: white;">
                  <span class="fa fa-3x fa-cc-stripe"></span>
                  <h4 class="uppercase white">pembayaran aman</h4>
                  <p>tenang pembayaran kami aman!</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12" data-anim-type="fade-in-down" data-anim-delay="100">
            <div class="row">
                <div class="feature-col-02 sty-01 active" style="height: 150px;padding: 20px;margin: 10px; background-color: #FFA000;border-color: white;">
                    <span class="fa fa-3x fa-check-circle"></span>
                    <h4 class="uppercase white">Dijamin untung</h4>
                    <p>investasi di bareksa tak pernah buntung!</p>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
      <div class="col-md-12 m-bot-3">
        <div class="col-md-6">
          <div class="dropdown">
            <label for="dropdown" style="margin-right: 10px">Kategori :</label>
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Reksadana
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
              @foreach ($categories as $category)
              <li>
                <a href="{{route('shop.index',['category'=>$category->slug])}}">Reksadana {{$category->kategori}}</a>
              </li>
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
          <div class="col-img-hover" style="box-shadow: 0 5px 9px 0 #BDBDBD; border-color: white" >
            <div class="img-hover-st-4">
              <div class="text">
                <a class="btn btn-sm btn-outline-primary" style="color: white" href="{{route('shop.show',$product->slug)}}">{{$product->presentPrice()}}</a>
                <br>
                <h3 class="uppercase">{{$product->slug}}</h3>
                <p>{{$product->name}}</p>
                <p>YTD : {{$product->ytd}}</p>
              </div>
              <div class="imgbox img-responsive">
                <img src="{{asset('storage/'.$product->image)}}" alt="Card images" class="img-responsive">
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    {{-- {{$products->links()}} --}} {{$products->appends(request()->input())->links()}}
  </div>
</div>
@endsection