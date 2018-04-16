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
                <h2>{{$product->name}}</h2>
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
                <li class="breadcrumb-item">
                    <a href="/shop">Shop</a>
                </li>
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
            <div class="col-sm-12 m-bot-4">
                <div class="card" style="box-shadow: 0 5px 9px 0 #BDBDBD; border-color: white" >
                    <div class="row">
                        <div class="col-md-2 m-top-1">
                            <img src="{{asset('storage/'.$product->image)}}" alt="Card images" class="img-responsive">
                        </div>
                        <div class="col-md-4">
                            <h4>{{$product->name}}</h4>
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
        
        <h3>Anda Mungkin Suka</h3>
        <div class="row">

            @foreach ($MungkinSuka as $MungkinAnda)
            <div class="col-md-2 col-sm-2 m-bot-2">
                <div class="col-img-hover" style="box-shadow: 0 5px 9px 0 #BDBDBD; border-color: white" >
                    <div class="img-hover-st-4">
                        <div class="text center">
                            <a class="btn btn-sm btn-outline-primary" style="color: white" href="{{route('shop.show',$MungkinAnda->slug)}}">{{$MungkinAnda->presentPrice()}}</a>
                            <br>
                            <h3 class="uppercase">{{$MungkinAnda->slug}}</h3>
                            <p>{{$MungkinAnda->name}}</p>
                            <p>YTD : {{$product->ytd}}</p>
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