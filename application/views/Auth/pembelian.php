<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ORDER MEDECINE</title>
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
<!-- ======= Appointment Section ======= -->
<section id="medicine_order" class="medicine-order section-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>MEDICINE ORDER</h2>
      <p>You can order medicine here!</p>
    </div>

    <form action="<?php echo site_url('crud_obat/aksi_obat');?>" method="post" role="form" data-aos="fade-up" data-aos-delay="100">
      <div class="row">
        <div class="col-md-4 form-group">
          <input type="text" class="form-control" name="nama" placeholder="Your Name" required>
        </div>
        <div class="col-md-4 form-group mt-3 mt-md-0">
          <input type="text" class="form-control" name="alamat" placeholder="Your Address" required>
        </div>
        <div class="col-md-4 form-group mt-3 mt-md-0">
          <input type="tel" class="form-control" name="nohp" id="nohp" placeholder="Your Phone" required>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 form-group mt-3">
          <select name="obat" id="obat" class="form-select">
            <option value="">Select Medicine</option>
            <option value="Promag Double Action">Promag Double Action - Rp 26.500</option>
            <option value="Imboost Force">Imboost Force - Rp 99.500</option>
            <option value="Cetirgi 10mg">Cetirgi 10mg - Rp 42.300</option>
            <option value="Sunmol Forte 4 Table">Sunmol Forte 4 Table - Rp 3.100</option>
            <option value="Paracetamol 500 mg">Paracetamol 500 mg - Rp 4.500</option>
            <option value="Axaprofen">Axaprofen - Rp 6.500</option>
            <option value="Zelface 20% Cream 10 g">Zelface 20% Cream 10 g - Rp 38.500</option>
            <option value="Cataflam 25 mg 10 Tablet">Cataflam 25 mg 10 Tablet - Rp 39.700</option>
          </select>
        </div>
        <div class="col-md-4 form-group mt-3">
          <input type="tel" class="form-control" name="jumlah" id="jumlah" placeholder="Amount of medication" required>
        </div>
        <div class="col-md-4 form-group mt-3">
          <select name="metode_pembayaran" id="metode_pembayaran" class="form-select">
            <option value="">Select Payment Method</option>
            <option value="transfer_bank">Bank Transfer</option>
            <option value="e_wallet">E-Wallet</option>
            <option value="cash_on_delivery">Cash on Delivery</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 form-group mt-3">
          <textarea class="form-control" name="pesantambahan" rows="5" placeholder="Additional Notes"></textarea>
        </div>
      </div>
      <div class="my-3"></div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary btn-user btn-block">Place Order</button>
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