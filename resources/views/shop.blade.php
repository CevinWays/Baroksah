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
      <div class="row">
        <div class="col-2">
            <div class="col-sm-2">
              <div class="list-group"> 
                <a href="#" class="list-group-item list-group-item-action active"> Cras justo odio </a> 
                <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a> 
                <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a> 
                <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a> 
                <a href="#" class="list-group-item list-group-item-action">Vestibulum at eros</a> 
              </div>
              <div class="list-group"> 
                <a href="#" class="list-group-item list-group-item-action active"> Cras justo odio </a> 
                <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a> 
                <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a> 
                <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a> 
                <a href="#" class="list-group-item list-group-item-action">Vestibulum at eros</a> 
              </div>
            </div>
        </div>
        <div class="col-6">
          @foreach ($products as $product)
            <div class="col-md-2 pad-20">
              <div class="card">
                <a href="{{route('shop.show',$product->slug)}}">
                  <img class="card-img-top img-responsive" src="{{asset('images/products/'.$product->slug.'.png')}}" alt="Card images">
                  <div class="card-body">
                    {{-- <p class="card-title">{{$product->name}}</p> --}}
                    <p class="card-text">{{$product->ytd}}</p>
                </a>
                    <a href="{{route('shop.show',$product->slug)}}" class="btn btn-primary">{{$product->presentPrice()}}</a> 
                  </div>
              </div>
            </div>
          @endforeach
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection