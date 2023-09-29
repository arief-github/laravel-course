<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          crossorigin="anonymous"/>
    <link href="{{  asset('/css/admin.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>@yield('title', 'Admin - Online Store')</title>
</head>
<body>
<div class="row g-0">
    <div class="p-3 col fixed text-white bg-dark">
        <a href="{{ route('admin.home.index') }}" class="text-white text-decoration-none">
            <span class="fs-4">Admin Panel</span>
        </a>
        <hr/>
        <ul class="nav flex-column">
            <li>
                <a href="{{ route("admin.home.index") }}" class="nav-link text-white">
                    Admin - Home
                </a>
            </li>
            <li>
                <a href="{{ route('admin.product.index') }}" class="nav-link text-white">
                    Admin - Products
                </a>
            </li>
            <li>
                <a href="{{ route("home.index") }}" class="mt-2 btn bg-primary text-white">
                    Go back to the home page
                </a>
            </li>
        </ul>
    </div>
    <div class="col content-grey">
        <nav class="p-3 shadow text-end">
            <span class="profile-font">Admin</span>
            <img src="{{ asset('/img/undraw_profile.svg') }}" alt="image" class="img-profile rounded-circle">
        </nav>

        <div class="g-0 m-5">
            @yield('content')
        </div>
    </div>
</div>

<div class="copyright py-4 text-center text-white">
    <div class="container">
        <small>
            Copyright - <a class="text-reset fw-bold text-decoration-none" href="https://github.com/arief-github">
                Arief Kurniawan
            </a>
        </small>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>
</body>
</html>
