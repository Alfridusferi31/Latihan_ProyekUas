<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Universitas Teknologi Bandung</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
    .header-background {
        background-color: #E8E8E8;
        /* atau gunakan warna latar belakang sesuai keinginan Anda */
        padding: 10px 0;
    }
    </style>
</head>

<body style="background: lightgray">
    <div class="container mt-5">
        <!-- Navbar and Logo Row -->
        <div class="header-background mb-4">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-2 text-center">
                    <img src="{{ asset('images/254721151_utb_kotak.png') }}" alt="Logo UTB" class="img-fluid"
                        style="max-width: 150px;">
                </div>
                <div class="col-md-10">
                    <nav class="navbar navbar-expand-lg navbar-light">

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link font-weight-bold text-uppercase" href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link font-weight-bold text-uppercase"
                                        href="{{ url('/about') }}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link font-weight-bold text-uppercase"
                                        href="{{ url('/contact') }}">Kontak</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link font-weight-bold text-uppercase"
                                        href="{{ url('/profile') }}">Profil</a>
                                </li>
                            </ul>
                        </div>

                    </nav>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="text-center mb-4">
                    <h3 class="text-primary">@yield('header-title')</h3>
                    <hr class="bg-primary">
                </div>
            </div>
        </div>

</body>

</html>