@extends('layout.layout') @section('content')
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
    @endif @if(count($errors) > 0)
    <div class="alert alert-danger animate-in" data-anim-delay="400" data-anim-type="fade-in-down">
      {{--
      <span>
        <i class="fa fa-info"></i>
      </span> --}}
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

<div class="container m-top-2">
  <div class="col-12">
    <nav class="text-right" aria-label="breadcrumb" role="navigation">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Beranda</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Tentang</li>
      </ol>
    </nav>
  </div>
</div>
<!-- Sub Header -->

<div class="container">
  <div class="col-12">
    <div class="section-md">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="address_info two">
                <h2 class="uppercase m-bot-2">Informasi</h2>
                <p>Anda bisa menghubungi kami jika terjadi kendala, kami akan siap melayani 24 Jam..</p>
                <br>
                <p>Di mohon untuk bersabar dalam menunggu respon balik kami.<strong>Phone Number: +(0341) 585772</strong></p>
                <br>
              </div>
              <!-- end section -->

              <div class="address_info two">
                <h2 class="uppercase m-bot-2">Alamat</h2>
                <ul class="address-info map">
                  <li>
                    <i class="fa fa-map-marker"></i> Jl Raya Candi 5 Blok D 226,Karangbesuki, Sukun 65146</li>
                  <li>
                    <i class="fa fa-phone"></i> 082233928872</li>
                  <li>
                    <i class="fa fa-envelope"></i> admin@baroksah.com</li>
                </ul>
              </div>
              <!-- end section -->
            </div>
            <div class="col-md-8">
              <h2 class="uppercase m-bottom2">Lokasi</h2>
              <div class="googlemaps embed-container maps">
                <div id="map" style="width:750px;height:450px;"></div>
              </div>        
            </div>
            <!-- end section -->

            <div class="col-md-12 m-top-4">
              <h2 class="uppercase m-bot-2">Feedback</h2>

              <form action="demo-contacts-process.php" method="post" id="sky-form" class="sky-form sty-one">
                <fieldset class="sty-one">
                  <div class="row">
                    <section class="col col-6">
                      <label class="label">Name</label>
                      <label class="input">
                        <i class="icon-append fa fa-user"></i>
                        <input type="text" name="name" id="name">
                      </label>
                    </section>
                    <section class="col col-6">
                      <label class="label">E-mail</label>
                      <label class="input">
                        <i class="icon-append fa fa-envelope-o"></i>
                        <input type="email" name="email" id="email">
                      </label>
                    </section>
                  </div>
                  <section>
                    <label class="label">Subject</label>
                    <label class="input">
                      <i class="icon-append fa fa-tag"></i>
                      <input type="text" name="subject" id="subject">
                    </label>
                  </section>
                  <section>
                    <label class="label">Message</label>
                    <label class="textarea">
                      <i class="icon-append fa fa-comment"></i>
                      <textarea rows="4" name="message" id="message"></textarea>
                    </label>
                  </section>
                  <section>
                    <label class="label">Enter characters below:</label>
                    <label class="input input-captcha">
                      <img src="captcha/image.php?1523870830" width="100" height="35" alt="Captcha image" />
                      <input type="text" maxlength="6" name="captcha" id="captcha">
                    </label>
                  </section>
                  <section>
                    <label class="checkbox">
                      <input type="checkbox" name="copy">
                      <i></i>Send a copy to my e-mail address</label>
                  </section>
                </fieldset>
                <footer>
                  <button type="submit" class="button">Send message</button>
                </footer>
                <div class="message">
                  <i class="fa fa-check"></i>
                  <p>Your message was successfully sent!</p>
                </div>
              </form>

            </div>
            <!-- end section -->
          </div>
      </div>
    </div>
  </div>
</div>
<script>
    function myMap() {
    var mapOptions = {
        center: new google.maps.LatLng(-7.957372102712442, 112.59929419035188),
        zoom: 16
    }
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDp1r3eHsUVYQ2qNbTYdTm2SJWetdc8jQ4&callback=myMap"></script>

@endsection