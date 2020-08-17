<!doctype html>
<html lang="en">
<head>
    <title>{{ config('app.name') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,700|Playfair+Display:400,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('customer/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('customer/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('customer/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('customer/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('customer/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('customer/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('customer/fonts/flaticon/font/flaticon.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('customer/css/aos.css') }}">
{{--    <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('customer/css/style.css') }}">
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<div class="site-wrap" id="home-section">
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <header class="site-navbar site-navbar-target" role="banner">
        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="col-4">
                    <div class="site-logo serif">
                        <a href="{{ route('index') }}">{{ config('app.name') }}</a>
                    </div>
                </div>
                <div class="col-8 text-right">
                    <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>
                    <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav ml-auto ">
                            <li><a href="{{ route('index') }}" class="nav-link">Főoldal</a></li>
                            <li><a href="{{ route('services') }}" class="nav-link">Szolgáltatások</a></li>
                            <li><a href="{{ route('prices') }}" class="nav-link">Árak</a></li>
                            <li><a href="{{ route('team') }}" class="nav-link">Csapatunk</a></li>
                            <li><a href="{{ route('contact') }}" class="nav-link">Kapcsolat</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <footer class="site-footer bg-image overlay" style="background-image: url('{{ asset('customer/images/hero/hero1.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h3 class="font-weight-bold serif text-white">{{ config('app.name') }}</h3>
                </div>
                <div class="col-12 text-center mb-5">
                    <a href="{{ route('index') }}">Főoldal</a>
                    <br>
                    <a href="{{ route('services') }}">Szolgáltatások</a>
                    <br>
                    <a href="{{ route('prices') }}">Árak</a>
                    <br>
                    <a href="{{ route('team') }}">Csapatunk</a>
                    <br>
                    <a href="{{ route('contact') }}">Kapcsolat</a>
                </div>
            </div>
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <div class="border-top pt-5">
                        <p class="small">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                            All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </footer>
</div>

<script src="{{ asset('customer/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('customer/js/jquery-migrate-3.0.0.js') }}"></script>
<script src="{{ asset('customer/js/popper.min.js') }}"></script>
<script src="{{ asset('customer/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('customer/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('customer/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('customer/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('customer/js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('customer/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('customer/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('customer/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('customer/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('customer/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('customer/js/aos.js') }}"></script>
{{--<script src="{{ asset('js/app.js') }}"></script>--}}

<script src="{{ asset('js/main.js') }}"></script>

<script>
    function jumpToContent() {
        document.getElementById('content').scrollIntoView({
            behavior: 'smooth'
        })
    }
</script>

@stack('scripts')
</body>
</html>

