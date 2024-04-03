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
  
  <!-- Font Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- logo title -->
    <link rel="icon" href="{{ asset('img/main-logo.png') }}" type="image/x-icon" />
    <title>Mutiara Residence</title>
    <style>
      .navbar-custom {
        background-color: #0a2946; /* Dark blue background */
        color: #ffffff; /* White text color */
        transition: top 0.3s;
      }
      .navbar-custom .navbar-brand,
      .navbar-custom .navbar-nav .nav-link {
        color: #ffffff; /* White text color */
      }
      .navbar-custom .nav-item.active .nav-link,
      .navbar-custom .nav-link:hover {
        color: #cccccc; /* Lighter shade of white for hover state */
      }
      .navbar-hide{
        top: -100px;
      }
      body {
        padding-top: 0px; /* Adjusted to match the height of the navbar */
      }
    </style>
    
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
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
              <a class="nav-link" href="#utama">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#type-rumah">Type Rumah</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#keunggulan">Keunggulan </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#artikel">Artikel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
            <!-- Add other sections as needed -->
          </ul>
        </div>
      </div>
    </nav>
  
    @yield('content')

    <section id="footer">
      <div class="container">
        <div class="row">
            <div class="footer col-4 mt-4">
              <span>
                <img src="{{ asset('img/main-logo.png') }}" alt="" class="mb-3">
                <p>There is nothing more important than a good, safe, secure place get back to.</p>
              </span>
            </div>
            <div class="footer col-4 mt-4">
              <span>
                <h3>Contact</h3>
                <i class="fa-solid fa-phone mb-4 me-2"></i> (+62) 81234567890 <br>
                <i class="fa-solid fa-envelope mb-4 me-2"></i> mutiara@property.com <br>
                <i class="fa-solid fa-location-dot mb-4 me-2"></i>Jl. Panjang No.24 Cipedak, Kec. Jagakarsa,
                Kota Jakarta Selatan
              </span>
            </div>
            <div class="footer col-4 mt-4">
              <img src="Assets/img/image-footer.svg" alt="">
            </div>
            <div class="footer col-12 mt-3 mb-3">
              <h5 class="text-center">Copyright ©2024 All rights reserved</h5>
            </div>
        </div>
      </div>
    </section>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  let lastScrollTop = 0;
  const navbar = document.querySelector('.navbar');

  <!-- CSS -->
  <link rel="stylesheet" href="style/style.css">

  <!-- Logo Title -->
  <link rel="icon" href="{{ asset('img/main-logo.png') }}" type="image/x-icon">

  <!-- Page Title -->
  <title>Mutiara Residence</title>

  <!-- Custom Styles -->
  <style>
    .navbar-custom {
      background-color: #0a2946; /* Dark blue background */
      transition: top 0.3s;
    }
    .navbar-custom .navbar-brand,
    .navbar-custom .navbar-nav .nav-link {
      color: #ffffff; /* White text color */
    }
    .navbar-custom .nav-item.active .nav-link,
    .navbar-custom .nav-link:hover {
      color: #cccccc; /* Lighter shade of white for hover state */
    }
    .navbar-hide {
      top: -100px;
    }
    body {
      padding-top: 0px; /* Adjust this to the height of your navbar */
    }
    .navbar-toggler {
      border: none;
      background-color: transparent;
    }
    .navbar-toggler:focus {
      box-shadow: none;
    }
    /* Custom styles for collapsed navbar */
    @media (max-width: 991px) {
      .navbar-collapse.collapsing,
      .navbar-collapse.show {
        background-color: white; /* White background when navbar is toggled */
      }
      .navbar-custom .navbar-nav .nav-link {
        color: white; /* Dark text color for visibility on white background */
      }
    }
  </style>
  
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-custom fixed-top navbar-dark ">
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
            <a class="nav-link" href="#utama">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#type-rumah">Type Rumah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#keunggulan">Keunggulan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#artikel">Artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio">Portfolio</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Your page content here -->
  
  @yield('content')

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    let lastScrollTop = 0;
    const navbar = document.querySelector('.navbar');

    window.addEventListener('scroll', function() {
      let currentScroll = window.pageYOffset || document.documentElement.scrollTop;
      
      if (currentScroll > lastScrollTop && currentScroll > navbar.offsetHeight){
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
