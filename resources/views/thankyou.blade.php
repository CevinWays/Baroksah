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
            <span>
                <i class="fa fa-info"></i>
            </span>
            <ul>2 @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
<div class="clearfix"></div>
<!-- end features Section 01 -->

<div class="section-lg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="m-bot-6">
                    <h1 class="f-35 font-bold uppercase">Terimakasih!</h1>
                    <div class="hr-line blue-color m-bot-2"></div>
                    <p>Terimakasih telah membeli reksadana di Baroksah
                        <br> Anda akan menerima email pemberitahuan</p>
                    <a href="{{route('shop.index')}}" class="btn btn-rounded btn-primary">Lanjut Belanja</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
@endsection