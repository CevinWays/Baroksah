@extends('layout.layout') 
@section('content')
<div class="clearfix"></div>
<!-- Sub Header -->
<div class="container">
    <div class="col-12">
        <h2>Product : {{$product->name}}</h2>
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
            <div class="col-sm-12 m-bot-5">
                <div class="col-md-2">
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
                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="section-md">
            <div class="container">
                <h3>Anda Mungkin Suka</h3>
                <div class="row">

                    @foreach ($MungkinSuka as $MungkinAnda)
                    <div class="col-md-2 col-sm-2 m-bot-2">
                        <div class="col-img-hover">
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