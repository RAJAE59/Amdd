<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Association AMDD</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <!-- // what i add -->
  

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">

</head>

<body class="page-index">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="d-flex align-items-center">    <img src="assets/img/logo-amdd.png" class="img-fluid" alt=""></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{route('home')}}" class="active">Home</a></li>
          <li><a href="{{route('association')}}" class="active">Association AMDD</a></li>
          <li><a href="{{route('evenement')}}" class="active">Evenements </a></li>
         
          
          <li><a href="/adhesion" class="active">Adhesion</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
 

  <main id="main">
    @yield('content')
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row gy-4">
          
          <div class="col-lg-5 col-md-12 footer-info">
          <img src="assets/img/logo-amdd1.png" class="img-fluid" alt="" width="100px;">
            <a href="index.html" class="logo d-flex align-items-center">
              
              <span>Association AMDD</span>
            </a>
            <div class="social-links d-flex  mt-3">
           
              <a href="https://www.facebook.com/100086786397029/" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/ass.amdd/" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://www.linkedin.com/in/association-amdd-919ab2254/" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>AMDD</h4>
            <ul>
              <li><i class="bi bi-dash"></i> Quartier Sbata</li>
              <li><i class="bi bi-dash"></i> Casablanca</li>
              <li><i class="bi bi-dash"></i> Maroc</li>
              </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Notre Platforme</h4>
            <ul>
              <li><i class="bi bi-dash"></i> <a href="{{route('home')}}">
Acceuil</a></li>
              <li><i class="bi bi-dash"></i> <a href="{{route('association')}}">
Association</a></li>
              <li><i class="bi bi-dash"></i> <a href="">
Presentation</a></li>
              <li><i class="bi bi-dash"></i> <a href="{{route('evenement')}}">
Evènements</a></li>
              <li><i class="bi bi-dash"></i> <a href="/adhesion">
Adhesion</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Nous</h4>
            <p>
              <strong>Téléphone : </strong> +212 760122146<br>
              <strong>Téléphone Complex :</strong>  +212 (0) 5 22 37 21 89<br>
              <strong>Email:</strong> direction.amdd@gmail.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal">
      <div class="container">
        <div class="copyright">
        © Copyright  <strong><span>Amdd</span></strong>. Tous les droits reservés
        </div>
        
      </div>
    </div>
  </footer><!-- End Footer --><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>