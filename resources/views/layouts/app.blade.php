
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Awaiken">
        <title>Porwal Groups</title>
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" media="screen">
        <link rel="stylesheet" href="{{asset('assets/css/slicknav.min.css')}}" >
        <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}"  media="screen">
        <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" >
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/mousecursor.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}" media="screen">
        
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="topbar">
            @include('layouts.topbar')
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <header class="main-header">
            @include('layouts.header')
        </header>
        <!-- Nav Bar End -->

        @yield('style')
		@yield('content')
		@yield('script')

        <!-- Footer Start -->
        <footer class="main-footer bg-section">
            @include('layouts.footer')
        </footer>
                <!-- Footer End -->

        <script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/validator.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.slicknav.js')}}"></script>
        <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('assets/js/isotope.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('assets/js/SmoothScroll.js')}}"></script>
        <script src="{{asset('assets/js/parallaxie.js')}}"></script>
        <script src="{{asset('assets/js/gsap.min.js')}}"></script>
        <script src="{{asset('assets/js/magiccursor.js')}}"></script>
        <script src="{{asset('assets/js/SplitText.js')}}"></script>
        <script src="{{asset('assets/js/ScrollTrigger.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.mb.YTPlayer.min.js')}}"></script>
        <script src="{{asset('assets/js/wow.min.js')}}"></script>
        <script src="{{asset('assets/js/function.js')}}"></script>
    </html>
