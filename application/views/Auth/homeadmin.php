<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HOME ADMIN</title>
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
    <div class="container d-flex align-items-center justify-content-between">
        <div class="align-items-center">
            <i>FINAL PROJECT</i>
        </div>
        <div class="align-items-center">
            <i class="bi bi-people"></i>
            <i>KELOMPOK 2T2P</i>
        </div>
    </div>
</div>
    <!-- ======= End Top Bar ======= -->

  <main id="main">

 <!-- Counts Section -->
 <section id="counts" class="counts">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12">
                <form action="">
                    <div class="count-box">
                        <i class="bi bi-people"></i><br>
                        <p><strong>DATA USER</strong> Check, delete Username and Password user!</p>
                        <a href="<?php echo site_url('auth/checkuser');?>">CHECK &raquo;</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- End Counts Section -->
<div class="container d-flex justify-content-center mt-5">
    <a href="<?php echo site_url('auth/logout'); ?>" class="btn btn-primary">LOG OUT</a>
</div>


  </main>
  <!-- End #main -->

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