<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/13a7b28a80.js" crossorigin="anonymous"></script>

    <!-- Logo title -->
    <link rel="icon" href="{{ asset('img/main-logo.png') }}" type="image/x-icon">
    <title>Mutiara Residence</title>

    <style>
        .navbar-custom {
            background-color: #0a2946;
            /* Dark blue background */
            color: #ffffff;
            /* White text color */
            transition: top 0.3s;
        }

        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-nav .nav-link {
            color: #ffffff;
            /* White text color */
        }

        .navbar-custom .nav-item.active .nav-link,
        .navbar-custom .nav-link:hover {
            color: #cccccc;
            /* Lighter shade of white for hover state */
        }

        .navbar-hide {
            top: -100px;
        }

        body {
            padding-top: 0px;
            /* Adjusted to match the height of the navbar */
        }

        @media (max-width: 991px) {

            .navbar-collapse.collapsing,
            .navbar-collapse.show {
                background-color: #0a2946;
                /* Consistent with the navbar color */
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('img/main-logo.png') }}" alt="Logo" height="65">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/artikel') }}">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/portfolio') }}">Portfolio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')

    <footer
    class="text-center text-lg-start text-white"
    style="background-color: #0f1925;"
    >
<!-- Grid container -->
<div class="container p-4 pb-0">
<!-- Section: Links -->
<section class="">
  <!--Grid row-->
  <div class="row">
    <!-- Grid column -->
    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
      <h6 class="text-uppercase mb-4 font-weight-bold">
        Mutiara Residence
      </h6>
      <p>
        Tempat Impian Hidup Bermakna, 
        di Mana Setiap Sudut Mencerminkan 
        Elegansi dan Kehangatan Rumah Anda.
      </p>
    </div>

    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
        <p><i class="fas fa-home mr-3"></i> Jl. Kunir No.48A, Pd. Cabe Udik</p>
        <p><i class="fas fa-envelope mr-3"></i> mutiararesidence.id@gmail.com</p>
        <p><i class="fas fa-phone mr-3"></i> (+62) 812 1333 4441</p>
    </div>
        <!-- Grid column -->
    </div>
    <!--Grid row-->
</section>
<!-- Section: Links -->

<hr class="my-3">

<!-- Section: Copyright -->
<section class="p-3 pt-0">
  <div class="row d-flex align-items-center">
    <!-- Grid column -->
    <div class="col-md-7 col-lg-8 text-center text-md-start">
      <!-- Copyright -->
      <div class="p-3">
        © 2024 Copyright:
        <a class="text-white" href="/"
           >Mutiara Property</a
          >
      </div>
      <!-- Copyright -->
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
        <style>
            .btn-floating {
        width: 40px; /* Atur lebar */
        height: 40px; /* Atur tinggi */
        line-height: 40px; /* Atur line-height agar icon terpusat */
        padding: 0; /* Hilangkan padding default */
        text-align: center; /* Teks/icon terpusat */
        }
        </style>
      <a
         class="btn btn-outline-light btn-floating m-1 rounded-circle"
         class="text-white"
         role="button"
         href="https://fb.watch/qY2ik0avOQ/"

         ><i class="fab fa-facebook-f"></i
        ></a>

      <a
         class="btn btn-outline-light btn-floating m-1 rounded-circle"
         class="text-white"
         role="button"
         href="https://www.youtube.com/@mutiararesidence-je4hq"
         ><i class="fab fa-youtube"></i
        ></a>

      <a
         class="btn btn-outline-light btn-floating m-1 rounded-circle"
         class="text-white"
         role="button"
         href="https://www.instagram.com/mutiararesidence.id?igsh=ZDlvZzFybnpvdXlt"
         ><i class="fab fa-instagram"></i
        ></a>
    </div>
    <!-- Grid column -->
  </div>
</section>
<!-- Section: Copyright -->
</div>
<!-- Grid container -->
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let lastScrollTop = 0;
        const navbar = document.querySelector('.navbar');

        window.addEventListener('scroll', function() {
            let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

            if (currentScroll > lastScrollTop && currentScroll > navbar.offsetHeight) {
                // Scroll Down
                navbar.classList.add('navbar-hide');
            } else {
                // Scroll Up
                navbar.classList.remove('navbar-hide');
            }
            lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // For Mobile or negative scrolling
        }, false);
    </script>
</body>

</html>
