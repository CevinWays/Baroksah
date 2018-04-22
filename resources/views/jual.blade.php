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
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Beranda</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Jual</li>
            </ol>
        </nav>
        <h2>Produk Reksadana Anda</h2>
    </div>
</div>
<!-- Sub Header -->
<div class="clearfix"></div>
<div class="section-md">
    <div class="container">
    </div>
</div>
@endsection