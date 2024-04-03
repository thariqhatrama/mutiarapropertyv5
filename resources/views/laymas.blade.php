<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/13a7b28a80.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="style/style.css" />

    <!-- logo title -->
    <link rel="icon" href="{{ asset('img/main-logo.png') }}" type="image/x-icon">
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

    @media (max-width: 991px) {
      .navbar-collapse.collapsing,
      .navbar-collapse.show {
        background-color: #0a2946; /* Consistent with the navbar color */
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
                <a class="nav-link" href="#utama">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#type-rumah">Type Rumah</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#keunggulan">Keunggulan</a>
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
    @yield('content')
</body>
</html>

