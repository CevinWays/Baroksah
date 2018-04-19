@extends('layout.layout') 
@section('content')
<div class="clearfix"></div>
<!-- Master Slider -->
<div>
  <div class="master-slider ms-skin-default" id="masterslider">

    <!-- slide 1 -->
    <div class="ms-slide slide-1" data-delay="14">
      <!-- slide background -->
      <img src="masterslider/blank.gif" data-src="{{URL::asset('images/reksadana-bg1.jpg')}}" alt="Slide1 background" style="opacity: 0.5;"
      />
      <h3 class="ms-layer title2 white" style="left:100px;top:240px;" data-type="text" data-effect="bottom(45)" data-duration="1000"
        data-delay="800" data-ease="easeOutExpo">Baroksah</h3>
      <h5 class="ms-layer title2 white" style="left:100px; top: 315px;" data-type="text" data-effect="bottom(45)" data-duration="1000"
        data-delay="1100" data-ease="easeOutExpo">Investasi Reksadana</h5>
      <h3 class="ms-layer text1 white" style="left:100px; top:400px;" data-type="text" data-effect="bottom(45)" data-duration="1000"
        data-delay="1400" data-ease="easeOutExpo">Mulailah berinvestasi mulai dini, demi masa depan yang lebih baik.</h3>
      <div class="ms-layer btn5" style="left: 102px; top:500px;" data-type="text" data-effect="bottom(45)" data-duration="1000"
        data-delay="1700" data-ease="easeOutExpo">
        <a href="{{route('shop.index')}}">
          <i class="fa fa-angle-right" aria-hidden="true"></i> Investasi Sekarang!</a>
      </div>
      <div class="ms-layer btn6 nodisplay" style="left: 360px; top:500px;" data-type="text" data-effect="bottom(45)" data-duration="1000"
        data-delay="1700" data-ease="easeOutExpo">
        <a href="{{route('shop.index')}}">
          <i class="fa fa-angle-right" aria-hidden="true"></i> Lihat produk!</a>
      </div>
    </div>
    <!-- end of slide -->

    <!-- slide 2 -->
    <div class="ms-slide slide-2" data-delay="10">

      <!-- slide background -->
      <img src="masterslider/blank.gif" data-src="images/masterslider/img2_2.jpg" alt="Slide background" style="opacity: 0.5;"
      />
      <h3 class="ms-layer title2 white text-center" style="left:0px;top:280px;" data-type="text" data-effect="bottom(45)" data-duration="1000"
        data-delay="800" data-ease="easeOutExpo">Baroksah</h3>
      <h3 class="ms-layer text1 wide-100 white ful text-center" style="left:0px; top:360px;" data-type="text" data-effect="bottom(45)"
        data-duration="1000" data-delay="1100" data-ease="easeOutExpo">Solusi terbaik untuk anda yang ingin memulai ber-investasi.
        <br> Mulailah berinvestasi mulai dini, demi masa depan yang lebih baik</h3>
      <div class="ms-layer btn5 squre" style="left:500px; top: 480px;" data-delay="1400" data-duration="1000" data-effect="right(50)"
        data-ease="easeOutExpo">
        <a href="{{route('shop.index')}}">
          <i class="fa fa-angle-right" aria-hidden="true"></i> Investasi Sekarang!</a>
      </div>
      <div class="ms-layer btn6 squre nodisplay" style="left:750px; top: 480px;" data-delay="1400" data-duration="1000" data-effect="right(50)"
        data-ease="easeOutExpo">
        <a href="{{route('shop.index')}}">
          <i class="fa fa-angle-right" aria-hidden="true"></i> Lihat produk!</a>
      </div>
    </div>
    <!-- end of slide -->
  </div>
  <!-- end Master Slider -->
</div>
<div class="section-lg nopadd m-top-10">
  <div class="col-md-12 text-center">
    <div class="m-bot-6">
      <h1 class="f-35 font-bold uppercase">produk baroksah terbaik</h1>
      <div class="hr-line blue-color m-bot-2"></div>
      <p>6 produk reksadana terbaik dari baroksah</p>
    </div>
  </div>
  <div class="col-md-12">
    <div class="row">
      @foreach ($products as $product)
      <div class="col-md-2 col-sm-2 m-bot-5">
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
  <div class="readmore text-center">
    <a href="{{route('shop.index')}}">
      <i class="fa fa-angle-right" aria-hidden="true"></i> Lebih Banyak</a>
  </div>
</div>
<!-- end features Section -->
<div class="clearfix"></div>
<div class="section-lg m-top-8 bg-parallax sty-two">
  <div class="container">
    <div class="row">
      <div class="col-md-7 m-bot-3 animate-in" data-anim-type="fade-in-right" data-anim-delay="100">
        <h1 class="white f-60 m-bot-2">Apa itu Reksadana?</h1>
        <p class="white m-bot-2">Reksadana adalah Wadah untuk menghimpun dana dari masyarakat pemodal. Menghimpun dana dari masyarakat bukan perkara
          main-main. Otoritas Jasa Keuangan (OJK) secara ketat sudah mengatur jenis perusahaan seperti apa saja yang dapat
          melakukan kegiatan penghimpunan dana, antara lain seperti bank, asuransi, dana pensiun, pegadaian, multifinance,
          dan pasar modal. Reksa dana merupakan produk dari perusahaan yang masuk dalam kategori pasar modal yang diawasi
          oleh OJK sehingga bisa melakukan kegiatan penghimpunan dana dari masyarakat.
        </p>
        <div class="readmore">
          <a href="{{route('shop.index')}}">
            <i class="fa fa-angle-right" aria-hidden="true"></i> Investasi sekarang!</a>
        </div>
      </div>
      <div class="col-md-5 animate-in" data-anim-type="fade-in-left" data-anim-delay="100">
        <div class="video-box">
          <div class="video-inner">
            <div class="image">
              <img src="images/reksadana.jpg" alt="" class="img-responsive">
            </div>
            <div class="video-body">
              <a class="bla-1 video-link" href="https://www.youtube.com/watch?v=H-M6o6gFzVg" target="blank">
                <span class="icon-play">
                  <i class="fa fa-play space-40"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="clearfix"></div>
<div class="section-lg">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2 text-center m-bot-4">
        <h1 class="f-35 font-bold uppercase">berita reksadana</h1>
        <div class="hr-line blue-color m-bot-2"></div>
        <p class="f-18">Highlight seputar berita reksadana teraktual dan terkini.</p>
      </div>
      <div class="col-md-5 post-item m-bot-3">
        <div class="post-item-wrap">
          <div class="post-image sty-one">
            <a href="{{route('berita.index')}}">
              <img alt="" src="images/reksadana3.jpg" class="img-responsive"> </a>
            <span class="post-meta-category">
              <a href="">HOT</a>
            </span>
          </div>
          <div class="post-item-description">
            <span class="post-meta-date">
              <i class="fa fa-calendar-o"></i> Feb 13, 2018</span>
            <span class="post-meta-comments">
              <a href="">
                <i class="fa fa-comments-o"></i> 33 Comments</a>
            </span>
            <h2>
              <a href="{{route('berita.index')}}">Akibat DMO, Potensi Pendapatan Anak Usaha BUMI Lebih Kecil Rp3,4 Triliun</a>
            </h2>
            <p>Sejumlah perusahaan batu bara mengaku tergerus marginnya akibat kebijakan pembatasan harga penjualan batu bara
              dalam negeri.</p>
            <div class="readmore styone plain">
              <a href="{{route('berita.index')}}">
                <i class="fa fa-angle-right" aria-hidden="true"></i> Baca</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-7 m-bot-3">
        <div class="row">
          <div class="col-md-4">
            <div class="post-item">
              <div class="post-item-wrap">
                <div class="post-image sty-one">
                  <a href="{{route('berita.index')}}">
                    <img alt="" src="images/reksadana2.jpg" class="img-responsive"> </a>
                  <span class="post-meta-category">
                    <a href="">HOT</a>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8 post-item">
            <div class="post-item-description nopad-both">
              <span class="post-meta-date">
                <i class="fa fa-calendar-o"></i> Feb 13, 2018</span>
              <span class="post-meta-comments">
                <a href="">
                  <i class="fa fa-comments-o"></i> 33 Comments</a>
              </span>
              <h2>
                <a href="{{route('berita.index')}}">PLN Resmi Setop Penawaran Obligasi Berkelanjutan II dan Sukuk Ijarah</a>
              </h2>
              <p>PT Perusahaan Listrik Negara (Persero) alias PLN resmi menghentikan penawaran umum berkelanjutan II dan Sukuk
                Ijarah berkelanjutan II..</p>
              <div class="readmore styone plain">
                <a href="{{route('berita.index')}}">
                  <i class="fa fa-angle-right" aria-hidden="true"></i> Baca</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-7 m-bot-3">
        <div class="row">
          <div class="col-md-4">
            <div class="post-item">
              <div class="post-item-wrap">
                <div class="post-image sty-one">
                  <a href="{{route('berita.index')}}">
                    <img alt="" src="images/reksadana1.jpg" class="img-responsive"> </a>
                  <span class="post-meta-category">
                    <a href="">HOT</a>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8 post-item">
            <div class="post-item-description nopad-both">
              <span class="post-meta-date">
                <i class="fa fa-calendar-o"></i> Jan 21, 2018</span>
              <span class="post-meta-comments">
                <a href="">
                  <i class="fa fa-comments-o"></i> 33 Comments</a>
              </span>
              <h2>
                <a href="{{route('berita.index')}}">Reksadana Pekan Ke-4 Maret 2018: Kinerja Pendapatan Tetap dan Pasar Uang Positif</a>
              </h2>
              <p>ndeks Harga Saham Gabungan (IHSG) pada pekan keempat Maret 2018 terus melanjutkan pelemahannya.</p>
              <div class="readmore styone plain">
                <a href="{{route('berita.index')}}">
                  <i class="fa fa-angle-right" aria-hidden="true"></i> Baca</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end features Section 08 -->
@endsection