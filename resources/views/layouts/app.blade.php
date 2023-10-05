<!doctype html>
<html lang="en">

<head>
    {{-- Css About Page start --}}
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="img/yello.jpeg" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/LineIcons.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nivo-lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    {{-- Css About Page end --}}

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <title>@yield('title', 'Online Store')</title>
</head>

<body>
    <!-- header -->
    {{-- Mengubah backdround menu menjadi warna kuning --}}
    <nav class="navbar navbar-expand-lg navbar-dark fw-bold bg-warning py-4">
        <div class="container">
            <a class="navbar-brand" href={{ route('home.index') }}>Online Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" href={{ route('home.index') }}>Home</a>
                    <a class="nav-link active" href={{ route('home.about') }}>About</a>
                    <a class="nav-link active" href="{{ route('product.index') }}">Product</a>
                    <div class="vr bg-white mx-2 d-none d-lg-block"></div>
                    @guest
                        {{-- user is not authenticated --}}
                        <a class="nav-link active" href="{{ route('login') }}">Login</a>
                        <a class="nav-link active" href="{{ route('register') }}">Register</a>
                    @else
                        {{--  user is authenticated  --}}
                        <form id="logout" action="{{ route('logout') }}" method="POST">
                            <a role="button" class="nav-link active" onclick="document.getElementById('logout').submit()">
                                Logout
                            </a>
                            @csrf
                        </form>
                    @endguest
                </div>
            </div>
        </div>
    </nav>
    {{-- Manghapus backgroud sebelumnya dari class --}}
    <header class="masthead text-black text-center py-4">
        <div class="container d-flex align-items-center flex-column">
            <h2>@yield('subtitle', 'A Laravel Online Store')</h2>
        </div>
    </header>
    <!-- header -->
    <div class="container my-4">
        @yield('content')
    </div>
    <!-- footer -->
    {{-- Mengubah bg menjadi warna putih --}}
    {{-- Design footer agar mempunyai height yang fixed menggunakan Fixed-bottom dan tambahan Style height 70px --}}
    <div class=" fixed-bottom copyright py-4 bg-white  text-center text-black" style="height: 70px">
        <div class="container">
            <small>
                Copyright - <a class=" text-white text-reset fw-bold text-decoration-none" target="_blank"
                    href="https://twitter.com/danielgarax">
                    Yellobox.ID
                </a>
            </small>
        </div>
    </div>
    <!-- footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>


    <!-- Business Plan Section End -->

    <!-- Go To Top Link -->
    {{-- <a href="#" class="back-to-top"> --}}
    {{-- <i class="lni-chevron-up"></i> --}}
    {{-- <div class="business-item-img">
            <img src="img/panah.png" class="img-fluid" alt="">
        </div>
    </a> --}}

    <!-- Preloader -->
    <div id="preloader">
        <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- Js About Page Start -->
    <script src="{{ asset('js/jquery-min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/jquery.nav.js') }}"></script>
    <script src="{{ asset('js/scrolling-nav.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/nivo-lightbox.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/form-validator.min.js') }}"></script>
    <script src="{{ asset('js/contact-form-script.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- Js About Page End -->
</body>

</html>
