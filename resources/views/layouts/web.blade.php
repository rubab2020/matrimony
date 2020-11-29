<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Creative - Start Bootstrap Theme</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Google fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto&family=Crimson+Text:ital,wght@0,400;1,600&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
    <!-- Third party plugin CSS-->
    <link href="{{ asset('assets/web/css/magnific-popup.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/web/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{asset('assets/web/css/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('assets/web/css/styles.css') }}" rel="stylesheet" />
    <!-- custom css -->
    <link href="{{ asset('assets/web/css/custom.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/web/css/search.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/web/css/profile.css') }}" rel="stylesheet" />
    {{ Html::style(mix('assets/web/css/notification.css')) }}
    @yield('style')
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}">Matrimony</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('login') }}">Login</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('register') }}">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @if(isset($slot))
    {{ $slot }}
    @endif

    @if(Session::has('success'))
        <div class="alert alert-success">
          {{ Session::get('success') }}
        </div>
    @elseif(Session::has('error'))
        <div class="alert alert-danger">
          {{ Session::get('error') }}
        </div>
    @endif

    @yield('content')

    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container">
            <div class="small text-center text-muted">Copyright © 2020 - Matrimony</div>
            <div class="small text-center text-muted">
                Made with <i class="fa fa-heart"></i> <a href="https://www.appxor.com">appXor</a>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="{{ asset('assets/web/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Third party plugin JS-->
    <script src="{{ asset('assets/web/js/fontawesome.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/web/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/jquery-ui.min.js') }}"></script>
    <script src="{{asset('assets/web/js/bootstrap-datepicker.min.js')}}"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('assets/web/js/scripts.js') }}"></script>
    <!-- custom JS -->
    <script src="{{ asset('assets/web/js/custom.js') }}"></script>
    {{ Html::script(mix('assets/web/js/notification.js')) }}
    @include('admin.sections.alert')
    @yield('script')
</body>

</html>