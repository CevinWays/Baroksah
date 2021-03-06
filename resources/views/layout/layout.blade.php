<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{config('app.name')}}</title>

<!-- Google Font popins -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css')}}" type="text/css">

<!-- Template Styles -->
<link rel="stylesheet" href="{{ URL::asset('css/style.css')}}" type="text/css" />
<link rel="stylesheet" href="{{ URL::asset('css/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{ URL::asset('css/Simple-Line-Icons-Webfont/simple-line-icons.css')}}"/>
<link rel="stylesheet" href="{{ URL::asset('css/et-line-font/et-line-font.css')}}">

<!-- Base MasterSlider style sheet -->
<link rel="stylesheet" href="{{URL::asset('js/masterslider/style/masterslider.css')}}" />
<link rel="stylesheet" href="{{URL::asset('js/masterslider/skins/default/style.css')}}" />
<link rel="stylesheet" href="{{URL::asset('js/masterslider/style/style.css')}}" />
<link href="{{URL::asset('js/masterslider/style/ms-tablet-style.css')}}" rel="stylesheet" type="text/css">

<!-- Responsive Devices Styles -->
<link rel="stylesheet" media="screen" href="{{URL::asset('css/responsive-leyouts.css')}}" type="text/css" />

<!-- Mega Menu -->
<link rel="stylesheet" href="{{URL::asset('js/megamenu/stylesheets/screen.css')}}">

<!-- Animations -->
<link href="{{URL::asset('js/animations/css/animations.min.css')}}" rel="stylesheet" type="text/css" media="all" />

<!-- forms -->
<link rel="stylesheet" href="{{URL::asset('js/form/css/sky-forms.css')}}" type="text/css" media="all">

@yield('extra-css-star')

{{-- extra css Stripe --}}
@yield('extra-css')

</head>

<body>
<div class="site-wrapper">
  <div class="temp-header sty1">
    <div class="top-bar solid-dark">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <i class="fa fa-envelope-o"></i> baroksah@baroksah.com <span>|</span> <i class="fa fa-phone"></i> 082233928872
          </div>
          <div class="col-md-6 right-padd0 text-right social-media">
            @guest
            <a href="{{ route('login') }}"><span class="fa fa-user"></span>Masuk</a> 
            <a href="{{ route('register') }}">Buat Akun</a>
            @else
                <a href="{{route('profile')}}" role="button">
                    <img src="/storage/{{Auth::user()->avatar}}" alt="" style="width: 20px; height: 20px; top: 10px; left: 10px; border-radius: 50%;"> 
                    {{ Auth::user()->name }}
                </a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endguest
          </div>
        </div>
        <!--end of row--> 
      </div>
    </div>
    <div class="header-section black pin-style">
      <div class="container">
        <div class="mod-menu">
          <div class="row">
            <div class="col-sm-2"> 
              <a href="{{route('landing-page')}}" title="" class="logo"> 
                <img src="{{URL::asset('images/logo_baroksah.png')}}" alt=""> 
              </a> 
            </div>
            <div class="col-sm-10">
              <div class="main-nav">
                <div id="menu" class="collapse">
                  <ul class="nav navbar-nav">
                    @if (! (request()->is('checkout') || request()->is('guestCheckout')) )
                      @include ('menus.search')
                      @guest 
                      @endguest
                    @endif
                    <li><a href="{{route('landing-page')}}">Beranda</a> <span class="arrow"></span></li>
                    @if (! (request()->is('checkout') || request()->is('guestCheckout')) )
                      <li><a href="{{route('shop.index')}}">Beli Produk</a><span class="arrow"></span></li>
                      @guest
                      @else
                      <li><a href="{{route('jual.index')}}">Jual Produk</a><span class="arrow"></span></li>
                      @endguest
                      <li class="right"> <a href="{{route('berita.index')}}" class="m-link">Berita</a> <span class="arrow"></span></li>
                      <li class="right"> <a href="{{route('tentang.index')}}" class="m-link">Tentang</a> <span class="arrow"></span></li>
                      <a href="{{route('cart.index')}}">
                        <li class="right" style="top: 18px">
                            <span class="fa-stack fa-lg has-badge" data-count="{{ Cart::instance('default')->count() }}">
                            {{-- <span class="fa-stack fa-lg has-badge"> --}}
                              <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                            </span>
                        </li>
                      </a>
                    @endif
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--end menu--> 
    </div>
    <!--end menu--> 
  </div>
  {{-- start content here!! --}}
  @yield('content')
  {{-- end content --}}

  {{-- start footer here --}}
  <div class="clearfix"></div>
  <footer class="footer black-bg">
    <div class="footer-content">
      <div class="container">
        <div class="row">
          <div class="col-md-4 m-bot-2"> 
            <!-- Footer widget area 1 -->
            <h4 class="uppercase f-15 font-bold white m-bot-3">Sekilas</h4>
            <ul class="list-icon">
              <li><i class="fa fa-map-marker"></i> Jl Raya Candi 5 Blok D 226, <br>
                Karangbesuki, Sukun 65146</li>
              <li><i class="fa fa-phone"></i> 082233928872</li>
              <li><i class="fa fa-envelope"></i> <a href="#">baroksah@baroksah.com</a></li>
            </ul>
            <!-- Social icons -->
            <div class="social-icons bor-light">
              <ul>
                <li><a href="https://www.facebook.com/" target="blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/?lang=en" target="blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://id.pinterest.com/" target="blank"><i class="fa fa-pinterest"></i></a></li>
              </ul>
            </div>
            <!-- end: Social icons --> 
            <!-- end: Footer widget area 1 --> 
          </div>
          <div class="col-md-4 m-bot-2"> 
            <!-- Footer widget area 4 -->
            <h4 class="uppercase f-15 font-bold white m-bot-3">Navigasi</h4>
            <div class="row clearfix">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <ul class="list-icon">
                  <li><i class="fa fa-angle-right"></i> <a href="{{route('landing-page')}}">Beranda</a></li>
                  <li><i class="fa fa-angle-right"></i> <a href="{{route('berita.index')}}">Berita</a></li>
                </ul>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <ul class="list-icon">
                  <li><i class="fa fa-angle-right"></i> <a href="{{route('shop.index')}}">Beli Produk</a></li>
                  <li><i class="fa fa-angle-right"></i> <a href="{{route('tentang.index')}}">Tentang</a></li>
                </ul>
              </div>
            </div>
            <!-- end: Footer widget area 4 --> 
          </div>
          <div class="col-md-4 m-bot-2"> 
            <!-- Footer widget area 2 -->
            <h4 class="uppercase f-15 font-bold white m-bot-3">Berita</h4>
            <div class="show-post sty-one"><img src="{{URL::asset('images/reksadana2.jpg')}}" alt="Image" class="pull-left">
              <div class="post pull-left">
                <h5><a href="{{route('berita.index')}}" class="tran3s">Berita Reksadana</a></h5>
                <p>21 jan, 2018  /  Business</p>
              </div>
              <!-- /.post --> 
            </div>
            <div class="show-post sty-one"><img src="{{URL::asset('images/reksadana3.jpg')}}" alt="Image" class="pull-left">
              <div class="post pull-left">
                <h5><a href="{{route('berita.index')}}" class="tran3s">Berita Reksadana</a></h5>
                <p>13 Feb, 2018  /  Business</p>
              </div>
              <!-- /.post --> 
            </div>
            <div class="show-post sty-one"><img src="{{URL::asset('images/reksadana1.jpg')}}" alt="Image" class="pull-left">
              <div class="post pull-left">
                <h5><a href="{{route('berita.index')}}" class="tran3s">Berita Reksadana</a></h5>
                <p>13 Feb, 2018  /  Business</p>
              </div>
              <!-- /.post --> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright sty-one">
      <div class="container">
        <div class="text-center">Copyright © 2017 baroksah. All rights reserved.</div>
      </div>
    </div>
  </footer>
  {{-- End footer --}}
  <div class="clearfix"></div>
</div>
<!-- end site wrapper--> 

<a href="#" class="scrollup"></a> 
<!-- end scroll to top of the page--> 

<!-- jQuery first, then Tether, then Bootstrap JS. --> 
<script type="text/javascript" src="{{URL::asset('js/jquery.js')}}"></script> 
<script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script> 

<!-- Mega Menu --> 
<script type="text/javascript" src="{{URL::asset('js/megamenu/js/main.js')}}"></script> 
<script type="text/javascript" src="{{URL::asset('js/megamenu/js/onepage.js')}}"></script> 

<!-- MasterSlider --> 
<script type="text/javascript" src="{{URL::asset('js/masterslider/jquery.easing.min.js')}}"></script> 
<script type="text/javascript" src="{{URL::asset('js/masterslider/masterslider.min.js')}}"></script> 
<script type="text/javascript" src="{{URL::asset('js/masterslider/masterslider.int.js')}}"></script> 

<!-- load cubeportfolio --> 
<script type="text/javascript" src="{{URL::asset('js/cubeportfolio/jquery-latest.min.js')}}"></script> 
<script type="text/javascript" src="{{URL::asset('js/cubeportfolio/jquery.cubeportfolio.min.js')}}"></script> 

<!-- init cubeportfolio --> 
<script type="text/javascript" src="{{URL::asset('js/cubeportfolio/main3.js')}}"></script> 

<!-- Animations --> 
<script src="{{URL::asset('js/animations/animations.min.js')}}" type="text/javascript"></script> 
<script src="{{URL::asset('js/animations/appear.min.js')}}" type="text/javascript"></script> 

<!-- Counters --> 
<script type="text/javascript" src="{{URL::asset('js/aninum/jquery.animateNumber.min.js')}}"></script> 

<!-- Scroll Up --> 
<script src="{{URL::asset('js/scrolltotop/totop.js')}}" type="text/javascript"></script> 

<!-- contact form --> 
<script type="text/javascript" src="{{URL::asset('js/form/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/form/jquery.form.min.js')}}"></script> 
<script type="text/javascript" src="{{URL::asset('js/form/jquery.validate.min.js')}}"></script>

<!-- Chartjs JavaScript --> 
{{-- <script type="text/javascript" src="{{URL::asset('js/chartjs/chart.min.js')}}"></script> 
<script type="text/javascript" src="{{URL::asset('js/chartjs/chart-int.js')}}"></script> --}}

@yield('extra-js-star')

@yield('extra-js')

<script type="text/javascript">
(function($) {
  "use strict";
	$(function()
			{
				// Validation
				$("#sky-form").validate(
				{					
					// Rules for form validation
					rules:
					{
						name:
						{
							required: true
						},
						email:
						{
							required: true,
							email: true
						},
						message:
						{
							required: true,
							minlength: 10
						},
						captcha:
						{
							required: true,
							remote: 'captcha/process.php'
						}
					},
										
					// Messages for form validation
					messages:
					{
						name:
						{
							required: 'Please enter your name',
						},
						email:
						{
							required: 'Please enter your email address',
							email: 'Please enter a VALID email address'
						},
						message:
						{
							required: 'Please enter your message'
						},
						captcha:
						{
							required: 'Please enter characters',
							remote: 'Correct captcha is required'
						}
					},
										
					// Ajax form submition					
					submitHandler: function(form)
					{
						$(form).ajaxSubmit(
						{
							beforeSend: function()
							{
								$('#sky-form button[type="submit"]').attr('disabled', true);
							},
							success: function()
							{
								$("#sky-form").addClass('submited');
							}
						});
					},
					
					// Do not change code below
					errorPlacement: function(error, element)
					{
						error.insertAfter(element.parent());
					}
				});
			});
			})(jQuery);		
		</script>
</body>
</html>