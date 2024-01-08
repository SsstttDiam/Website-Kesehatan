<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EDIT CONSULTATION</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/'); ?>/img/favicon.png" rel="icon">
  <link href="<?php echo base_url('assets/'); ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
  <!-- ======= Appointment Section ======= -->
  <section id="consultation" class="consultation section-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>EDIT CONSULTATION</h2>
        <p>You can edit your consultation data here!</p>
      </div>

      <form action="<?php echo site_url('Crud_konsultasi/aksi_edit');?>" method="post" role="form" data-aos="fade-up" data-aos-delay="100" enctype="multipart/form-data">
        <input type="hidden" name="idKonsultasi" value="<?php echo $konsultasi['idkonsultasi']; ?>">
        <div class="row">
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required value="<?php echo $konsultasi['nama']; ?>">
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="text" class="form-control" name="disease" id="disease" placeholder="Disease" required value="<?php echo $konsultasi['penyakit']; ?>">
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required value="<?php echo $konsultasi['no_hp']; ?>">
          </div> 
        </div>

        <div class="form-group mt-3">
          <select name="doctor" id="doctor" class="form-select">
            <option value="">Select Doctor</option>
            <option value="Doctor 1" <?php if ($konsultasi['dokter'] == 'Doctor 1') echo 'selected'; ?>>Doctor 1</option>
            <option value="Doctor 2" <?php if ($konsultasi['dokter'] == 'Doctor 2') echo 'selected'; ?>>Doctor 2</option>
            <option value="Doctor 3" <?php if ($konsultasi['dokter'] == 'Doctor 3') echo 'selected'; ?>>Doctor 3</option>
          </select>
        </div>

        <div class="form-group mt-3">
          <input type="file" id="fileUploadEdit" name="fileUploadEdit" class="form-control">
        </div>


        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message (complaint)"><?php echo $konsultasi['pesan']; ?></textarea>
        </div>

        <div class="my-3"></div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary btn-user btn-block">Update Consultation</button>
        </div>
      </form>
    </div>
  </section>
  <!-- End Appointment Section -->

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
