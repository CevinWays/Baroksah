<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- vendor css --}}

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

    <!-- load css for cubeportfolio -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('js/cubeportfolio/css/cubeportfolio.min.css')}}">

    <!-- Animations -->
    <link href="{{URL::asset('js/animations/css/animations.min.css')}}" rel="stylesheet" type="text/css" media="all" />


</head>
<body style="background-color: #F5F5F5">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-laravel" style="background-color: rgb(0, 0, 0);">
            <div class="container">
                <a class="navbar-brand white f-25" href="{{ url('/') }}">
                    Baroksah
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

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

</body>
</html>
