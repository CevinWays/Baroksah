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
        @endif @if(count($errors) > 0)
        <div class="alert alert-danger animate-in" data-anim-delay="400" data-anim-type="fade-in-down">
            <ul>
                @foreach ($errors->all() as $error)
                <li>
                    <span class="fa fa-info-circle"></span> {!! $error !!}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
<div class="container">
    <div class="col-12">
        <h2>Produk Reksadana Anda</h2>
        <nav class="text-right" aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Beranda</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Jual</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Sub Header -->
<div class="clearfix"></div>
<div class="section-md">
    <div class="container">
        @if (Cart::count() > 0)
        <h4>({{ Cart::count() }}) item yang anda miliki</h4>
        @foreach (Cart::content() as $item)
        <div class="card m-bot-2" style="box-shadow: 0 4px 8px 0 #BDBDBD; border-color: white">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="col-md-2">
                            <a href="{{ route('shop.show', $item->model->slug) }}">
                                <img src="{{asset('storage/'.$item->model->image)}}" alt="Card images" class="img-responsive">
                        </div>
                        <div class="col-md-6">
                            <h4>{{ $item->model->name }}</h4>
                            <p>YTD : {{ $item->model->ytd }}</p>
                            <h4>{{ $item->model->presentPrice() }}</h4>
                        </div>
                        </a>
                        <div class="col-md-4 text-right">
                            <form action="{{ route('jual.destroy', $item->rowId) }}" method="POST">
                                {{ csrf_field() }} {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger">JUAL</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <div class="row pad-20">
            <div class="col-12 m-bot-5 text-right">
                <a href="{{route('shop.index')}}" class="btn btn-rounded btn-primary">Lanjut Belanja</a>
            </div>
        </div>
        @else
        <div class="row pad-20 text-center">
            <span class="fa fa-3x fa-comment"></span>
            <h1>Anda Tidak Memiliki Reksadana!</h1>
            <a href="{{route('shop.index')}}" class="btn btn-rounded btn-primary">Lanjut Belanja</a>
        </div>
        @endif 
    </div>
</div>
@endsection