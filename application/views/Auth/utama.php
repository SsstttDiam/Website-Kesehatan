<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HOME</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/'); ?>/img/favicon.png" rel="icon">
  <link href="<?php echo base_url('assets/'); ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="<?php echo base_url('assets/'); ?>https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/'); ?>vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/'); ?>vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/'); ?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/'); ?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/'); ?>vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/'); ?>vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/'); ?>css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
<div id="topbar" class="d-flex align-items-center fixed-top">
  <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
    <div class="align-items-center d-none d-md-flex">
      <i>FINAL PROJECT</i>
    </div>
  </div>
</div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
  <div class="container d-flex justify-content-between align-items-center">
    <div class="d-flex align-items-center">
      <a href="<?php echo site_url('auth/profil'); ?>" class="bi bi-people">
        KELOMPOK 2T2P
      </a>
    </div>

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul class="d-flex">
        <li><a class="nav-link scrollto" href="#heroCarousel">HOME</a></li>
        <li><a class="nav-link scrollto" href="#service">SERVICE</a></li>
        <li><a class="nav-link scrollto" href="#consultation">CONSULTATION</a></li>
        <li><a class="nav-link scrollto" href="#medecine">MEDECINE</a></li>
        <li><a class="nav-link scrollto" href="#contact">CONTACT ME</a></li>
        <li>
          <a href="<?php echo site_url('auth/logout'); ?>">LOG OUT</a>
        </li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
  </div>
</header>

  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active"  style="background: url(<?php echo base_url('/assets/img/slide/slide-1.jpg'); ?>)">
          <div class="container">
            <h2>WELCOME TO CLINIC 2T2P</h2>
            <p>"Welcome to 2t2p Healthy Clinic, a trusted place for health solutions. We are ready to provide the best
              service for your medical needs. Find complete information about our services, doctors, and clinic
              consultations. Your health is our top priority."</p>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(<?php echo base_url('/assets/img/slide/slide-2.jpg'); ?>)">
          <div class="container">
            <h2>CONSULTATION NEED</h2>
            <p>"We understand that your health needs are unique. With our online consultation service, you can connect
              with our team of experienced doctors from the comfort of your home. Arrange your consultation immediately
              and get personalized and effective health solutions."</p>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(<?php echo base_url('/assets/img/slide/slide-3.jpg'); ?>)">
          <div class="container">
            <h2>MEDECINE NEED</h2>
            <p>"Find the convenience of ordering medication with a prescription or without a prescription through our
              platform. We provide delivery services to your door to ensure your convenience. Feel free to explore the
              wide selection of quality medicines in our online store."</p>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section>

  <!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->

    <section id="service" class="featured-services">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>SERVICE</h2>
          <p></p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="fas fa-heartbeat"></i></div>
              <h4 class="title"><a href="">HEALTHY</a></h4>
              <p class="description">"We are committed to providing high-quality services and the latest medical
                solutions. Explore our site for more information about services, our team of doctors, and modern clinic
                facilities. Your health is our top priority."</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="fas fa-pills"></i></div>
              <h4 class="title"><a href="">MEDECINE</a></h4>
              <p class="description">"We understand your every health need. With top-notch medical personnel and
                state-of-the-art technology, we offer transparent and easy-to-understand health services. Explore
                various treatment plans, find the best specialists, and book an appointment for an enlightened health
                journey with us."</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="fas fa-thermometer"></i></div>
              <h4 class="title"><a href="">THERMOMETER</a></h4>
              <p class="description">"Providing Exceptional Health Solutions. We prioritize your well-being with
                high-quality medical services. Our experienced physicians are ready to help you overcome a variety of
                health problems. Don't hesitate to schedule an appointment and discover an amazing care experience."</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="fas fa-dna"></i></div>
              <h4 class="title"><a href="">DNA</a></h4>
              <p class="description">"We understand that your health is a top priority. With our team of top doctors, we
                are ready to provide quality medical services. Explore our facilities, find information about services,
                and schedule your consultation now. Your health is our mission."</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Featured Services Section -->

<!-- ======= Cta Section ======= -->
<section id="consultation" class="cta">
  <div class="container" data-aos="zoom-in">
    <div class="text-center">
      <h3>HAVE A PAIN COMPLAINT? NEED HELP NOW?</h3>
      <p>HERE YOU CAN PROVIDE FEEDBACK ON YOUR PAIN COMPLAINTS AT OUR CLINIC FOR FREE!</p>
      <a class="cta-btn scrollto" href="<?php echo site_url('auth/konsultasi');?>">MAKE A COMPLAINT DATA</a>
    </div>
  </div>
</section>

<section id="medecine" class="cta">
  <div class="container" data-aos="zoom-in">
    <div class="text-center">
      <h3>PURCHASE OF MEDICINE</h3>
      <p>YOU CAN BUY THE MEDICINE YOU NEED AT OUR CLINIC!</p>
      <a class="cta-btn scrollto" href="<?php echo site_url('auth/listobat');?>">PURCHASE MEDICINE</a>
    </div>
  </div>
</section>
<!-- End Cta Section -->

 <!-- ======= Counts Section ======= -->
 <!-- Counts Section -->
 <section id="counts" class="counts">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-12">
          <form action="">
            <div class="count-box">
              <i class="bx bx-receipt"></i><br>
              <p><strong>DATA CONSULTATION</strong> History of filling in your consultation data!</p>
              <a href="<?php echo site_url('auth/checkkonsultasi');?>">CHECK &raquo;</a>
            </div>
          </form>
        </div>
        <div class="col-lg-6 col-md-12">
          <form action="">
            <div class="count-box">
              <i class="bx bx-cart"></i><br>
              <p><strong>SHOPPING CART</strong> History of your drug purchases or orders!</p>
              <a href="<?php echo site_url('auth/checkobat');?>">CHECK &raquo;</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
<!-- End Counts Section -->

<!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>CONTACT ME</h2>
          <p></p>
        </div>

      </div>
      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-12">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>ALAMAT</h3>
                  <p>UNIVERSITAS AMIKOM YOGYAKARTA<br>Jl. Ring Road Utara, Condong Catur, Sleman, Yogyakarta<br>(0274)
                    884201207</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>EMAIL</h3>
                  <p>
                    mohammaddimaswiku@students.amikom.ac.id<br>jose.reynal.dwi.putra@students.amikom.ac.id<br>zanamaulanaa@students.amikom.ac.id<br>annisaichaa@students.amikom.ac.id
                  </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+62 81903930763<br>+62 85348756634<br>+62 89606769765<br>+62 85803784077</p>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section>
<!-- End Contact Section -->

  </main>
  <!-- End #main -->

<!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        <strong><span>KELOMPOK 3</span></strong>
      </div>
    </div>
  </footer>
<!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/'); ?>vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?php echo base_url('assets/'); ?>vendor/aos/aos.js"></script>
  <script src="<?php echo base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url('assets/'); ?>vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url('assets/'); ?>vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url('assets/'); ?>vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/'); ?>js/main.js"></script>

</body>

</html>