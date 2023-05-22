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
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
          <li><a class="nav-link scrollto" href="#obat">Stok Obat</a></li>
          <li><a class="nav-link scrollto" href="#why-us">Informasi</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Galeri</a></li>
          <li><a class="nav-link scrollto" href="#team">Pengurus Harian</a></li>
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
            <a href="#why-us" class="btn-get-started scrollto"><i class="bi bi-info-circle"></i><span> Informasi Pengunjung</span></a>
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

    

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>APA ITU UKS?</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              dasdadw
            </p>
                      </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Layanan Kami</h2>
        
        </div>

        <div class="row">

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>
          
        </div>
      </div>
    </section><!-- End Services Section -->

    <section id="obat" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Stok Obat</h2>
        </div>

        <div class="row">

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3><strong>Informasi Pengunjung</strong></h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <?php
                $divID = 0;
                global $divID;
                ?>
                <h4><strong>Saat Ini</strong></h4>
                @foreach ($tamu as $tampil_tamu)
                  @if ($tampil_tamu->keluar == null)
                    <li>
                      <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-<?php echo ++$divID; ?>"><span>{{ $tampil_tamu->nama }}</span>{{ $tampil_tamu->created_at->diffForHumans() }}<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                      <div id="accordion-list-<?php echo $divID; ?>" class="collapse" data-bs-parent=".accordion-list">
                        
                      <table class="table">
                          <br>
                          <tbody>
                            <tr>
                              <th>Kelas</th>
                              <td style="width: 50%">{{ $tampil_tamu->kelas }}</td>
                            </tr>
                            <tr>
                              <th>Keperluan</th>
                              <td style="width: 50%">{{ $tampil_tamu->keperluan }}</td>
                            </tr>
                            <tr>
                              <th>Jam Masuk UKS</th>
                              <td style="width: 50%">{{ $tampil_tamu->masuk }}</td>
                            </tr>
                            <tr>
                              <th>Jam Keluar UKS</th>
                              <td style="width: 50%">{{ $tampil_tamu->keluar }}</td>
                            </tr>
                          </tbody>
                        </table>

                      </div>
                    </li>
                  @endif
                @endforeach
                <br><h4><strong>Riwayat</strong></h4>
                @foreach ($tamu as $tampil_tamu)
                  @if ($tampil_tamu->keluar != null)
                    <li>
                      <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-<?php echo ++$divID; ?>"><span>{{ $tampil_tamu->nama }}</span>{{ $tampil_tamu->created_at->diffForHumans() }}<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                      <div id="accordion-list-<?php echo $divID; ?>" class="collapse" data-bs-parent=".accordion-list">
                        
                      <table class="table">
                          <br>
                          <tbody>
                            <tr>
                              <th>Kelas</th>
                              <td style="width: 50%">{{ $tampil_tamu->kelas }}</td>
                            </tr>
                            <tr>
                              <th>Keperluan</th>
                              <td style="width: 50%">{{ $tampil_tamu->keperluan }}</td>
                            </tr>
                            <tr>
                              <th>Jam Masuk UKS</th>
                              <td style="width: 50%">{{ $tampil_tamu->masuk }}</td>
                            </tr>
                            <tr>
                              <th>Jam Keluar UKS</th>
                              <td style="width: 50%">{{ $tampil_tamu->keluar }}</td>
                            </tr>
                          </tbody>
                        </table>

                      </div>
                    </li>
                  @endif
                @endforeach
              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("style/assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Galeri Foto</h2>
          
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter">
            <div class="portfolio-img"><img src="style/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 1</h4>
              <a href="style/assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pengurus Harian</h2>
          <p>Berikut adalah pengurus dari UKS di sekolah ini.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="style/assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="style/assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="style/assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="style/assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->


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