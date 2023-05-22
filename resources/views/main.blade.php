<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SIBUKS - SMKN 420 BALIKPAPAN</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="style/assets/img/favicon.png" rel="icon">
  <link href="style/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="style/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="style/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="style/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="style/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="style/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="style/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="style/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="style/assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">SIBUKS</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="style/assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto {{ Request::is('/*') ? 'active' : '' }}" href="/">Home</a></li>
          <li><a class="nav-link scrollto {{ Request::is('services*') ? 'active' : '' }}" href="/services">Layanan</a></li>
          <li><a class="nav-link scrollto {{ Request::is('obat*') ? 'active' : '' }}" href="/obat">Stok Obat</a></li>
          <li><a class="nav-link scrollto {{ Request::is('info*') ? 'active' : '' }}" href="/info">Informasi</a></li>
          <li><a class="nav-link scrollto {{ Request::is('galeri*') ? 'active' : '' }}" href="/galeri">Galeri</a></li>
          <li><a class="nav-link scrollto {{ Request::is('pengurus*') ? 'active' : '' }}" href="/pengurus">Pengurus Harian</a></li>
          @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdowwn-toggle" href="#" id="navbarDropdown"
              role="button" data-bs-toggle="dropdown" aria-expanded="false">Welcome back, {{ auth()->user()->name }}</a>
              
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/dashboard">Dashboard Saya<i class="bi bi-layout-text-window-reverse"></i></a></li>
                <li><hr class="dropdwon-divider"></li>
                <li>
                  <form action="/logout" method="post">
                      @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                  </form>
          @else
            <li><a class="getstarted scrollto" href="/login">Login Admin</a></li>
          @endauth

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Selamat Datang di Website UKS SMKN 420 Balikpapan</h1>
          <h2>Cari tahu tentang informasi perawatan kami disini!</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="/info" class="btn-get-started scrollto"><i class="bi bi-info-circle"></i><span> Informasi Pengunjung</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="style/assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">
      </div>
    </section><!-- End Cliens Section -->

    @yield('container')

   
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

 

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Kelompok 4 Proweb A</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <a href="https://www.youtube.com/watch?v=pKNEx-9OqRM">Kelompok 4 Proweb A</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="style/assets/vendor/aos/aos.js"></script>
  <script src="style/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="style/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="style/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="style/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="style/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="style/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="style/assets/js/main.js"></script>

</body>

</html>