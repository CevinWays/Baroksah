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

<div class="clearfix"></div>

<div class="section-md">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
          <div id="carousel-example-generic1" class="carousel slide" data-ride="carousel"> 
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic1" data-slide-to="0" class=""></li>
              <li class="" data-target="#carousel-example-generic1" data-slide-to="1"></li>
              <li class="active" data-target="#carousel-example-generic1" data-slide-to="2"></li>
            </ol>
            
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox" style="width: 100%; height: 300px">
              <div class="item"><img src="images/jenis_reksadana3.jpg" alt="" class="img-responsive"></div>
              <div class="item"><img src="images/jenis_reksadana1.jpg" alt="" class="img-responsive"></div>
              <div class="item active"><img src="images/jenis_reksadana2.png" alt="" class="img-responsive"></div>
            </div>
          </div>
      </div>
      <div class="col-md-3 m-bot-3 animate-in" data-anim-type="fade-in-down" data-anim-delay="300">
        <div class="card-box">
          <h4>Lebih hemat!</h4>
          <p>Kupon kode hemat009, terbatas!!.</p>
        </div>
      </div>
      <div class="col-md-3 m-bot-3 animate-in" data-anim-type="fade-in-down" data-anim-delay="300">
        <div class="card-box">
          <h4>Beruntung 200k!</h4>
          <p>Gunakan kode kupon BERUNTUNG123 s/d 27 April.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section-md m-top-2">
  <div class="container">

    <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12 animate-in" data-anim-type="fade-in-right" data-anim-delay="100">
            <div class="row">
                <div class="feature-col-02 sty-01 active" style="height: 150px;padding: 20px;margin: 10px; border-color: white;">
                    <span class="fa fa-3x fa-money"></span>
                    <h4 class="uppercase white">Promo</h4>
                    <p>gunakan kode kupon <strong>abc123</strong> disk. 100k! </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 animate-in" data-anim-type="fade-in-down" data-anim-delay="100">
            <div class="row">
                <div class="feature-col-02 sty-01 active" style="height: 150px;padding: 20px;margin: 10px; background-color: crimson;border-color: white;">
                  <span class="fa fa-3x fa-cc-stripe"></span>
                  <h4 class="uppercase white">pembayaran aman</h4>
                  <p>tenang pembayaran kami aman!</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 animate-in" data-anim-type="fade-in-left" data-anim-delay="100">
            <div class="row">
                <div class="feature-col-02 sty-01 active" style="height: 150px;padding: 20px;margin: 10px; background-color: #FFA000;border-color: white;">
                    <span class="fa fa-3x fa-check-circle"></span>
                    <h4 class="uppercase white">Dijamin untung</h4>
                    <p>investasi di baroksah tak pernah buntung!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row m-top-2">
      <div class="col-md-12 m-bot-3">
        <div class="col-md-6">
            <h2 style="margin-top: 0px">{{$categoryName}}</h2>
        </div>
        <div class="col-md-3 text-right">
          <div class="dropdown">
            <label for="dropdown" style="margin-right: 10px">Kategori :</label>
            <button class="btn btn-primary btn-outline dropdown-toggle" type="button" data-toggle="dropdown">Reksadana
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
        <div class="col-md-3 text-right">
          <div class="dropdown">
            <label for="dropdown" style="margin-right: 10px">Harga :</label>
            <button class="btn btn-danger btn-outline dropdown-toggle" type="button" data-toggle="dropdown">urutan harga
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
              <li>
                <a href="{{route('shop.index',['category'=>request()->category,'sort'=>'low_high'])}}">Rendah Ke Tinggi</a>
              </li>
              <li>
                <a href="{{route('shop.index',['category'=>request()->category,'sort'=>'high_low'])}}">Tinggi Ke Rendah</a>
              </li>
            </ul>
          </div>
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
                <a class="btn btn-md btn-outline-primary" style="color: white" href="{{route('shop.show',$product->slug)}}">{{$product->presentPrice()}}</a>
                <br>
                <h3 class="uppercase">{{$product->slug}}</h3>
                <p>{{$product->name}}</p>
                <p>YTD : {{$product->ytd}}</p>
                <p>Rating : {{$product->rating}}</p>
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
    {{-- satrt pagination --}}
    {{$products->appends(request()->input())->links()}}
    {{-- end pagination --}}
  </div>
</div>
@endsection