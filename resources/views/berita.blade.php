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

<div class="container m-top-2">
    <div class="col-12">
    <nav class="text-right" aria-label="breadcrumb" role="navigation">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Beranda</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Berita</li>
      </ol>
    </nav>
  </div>
</div>
    <!-- Sub Header -->

<div class="container">
    <div class="col-12">
      <div class="section-md">
          <div class="sec-title">
              <h2>Berita Reksadana</h2>
              <p class="f-15">Berita seputar reksadana</p>
            </div>
              <div class="container">
                <div class="row">
                  <div class="col-md-6 post-item m-bot-3">
                    <div class="post-item-wrap">
                      <div class="post-image sty-one"><a href="#"><img alt="" src="images/reksadana1.jpg" class="img-responsive"></a></div>
                      <div class="post-item-description nopad-side">
                        <h2><a href="#">The Multi-purpose HTML5 Theme</a></h2>
                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i> Jan 21, 2017</span> <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i> 33 Comments</a></span>
                        <p>Dolor sit amet isse potenti nulla esquam ante aliquet lacusemper elit Sed ante aliquet id dolor consectetur fermentum.</p>
                        <div class="readmore styone plain"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Readmore</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 post-item m-bot-3">
                    <div class="post-item-wrap">
                      <div class="post-image sty-one"><a href="#"><img alt="" src="images/reksadana2.jpg" class="img-responsive"></a></div>
                      <div class="post-item-description nopad-side">
                        <h2><a href="#">The Multi-purpose HTML5 Theme</a></h2>
                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i> Jan 21, 2017</span> <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i> 33 Comments</a></span>
                        <p>Dolor sit amet isse potenti nulla esquam ante aliquet lacusemper elit Sed ante aliquet id dolor consectetur fermentum.</p>
                        <div class="readmore styone plain"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Readmore</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 post-item m-bot-3">
                    <div class="post-item-wrap">
                      <div class="post-image sty-one"><a href="#"><img alt="" src="images/reksadana3.jpg" class="img-responsive"></a></div>
                      <div class="post-item-description nopad-side">
                        <h2><a href="#">The Multi-purpose HTML5 Theme</a></h2>
                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i> Jan 21, 2017</span> <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i> 33 Comments</a></span>
                        <p>Dolor sit amet isse potenti nulla esquam ante aliquet lacusemper elit Sed ante aliquet id dolor consectetur fermentum.</p>
                        <div class="readmore styone plain"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Readmore</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 post-item m-bot-3">
                    <div class="post-item-wrap">
                      <div class="post-image sty-one"><a href="#"><img alt="" src="images/reksadana4.jpg" class="img-responsive"></a></div>
                      <div class="post-item-description nopad-side">
                        <h2><a href="#">The Multi-purpose HTML5 Theme</a></h2>
                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i> Jan 21, 2017</span> <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i> 33 Comments</a></span>
                        <p>Dolor sit amet isse potenti nulla esquam ante aliquet lacusemper elit Sed ante aliquet id dolor consectetur fermentum.</p>
                        <div class="readmore styone plain"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Readmore</a></div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-md-12 m-bot-2">
                  <div class="pagenation-blog">
                  <ul class="pagenation-list">
                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a class="last" href="#"><i class="fa fa-angle-right"></i></a></li>
                  </ul>
                </div>
                </div>
                </div>
              </div>
            </div>
    </div>
</div>
@endsection