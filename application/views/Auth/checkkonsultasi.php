<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>CHECK CONSULTATION</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Roboto:300,400,500,700|Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    body {
      font-family: "Roboto", sans-serif;
      background-color: #f4f4f4;
      color: #333;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }
    h1 {
      text-align: center;
      margin-bottom: 30px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 30px;
    }
    table th, table td {
      padding: 12px 15px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    table th {
      background-color: #f8f8f8;
    }
    a {
      display: inline-block;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }
    a:hover {
      background-color: #0056b3;
    }
    .back-to-main {
      text-align: center;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>CONSULTATION DETAILS</h1>
    <div class="consultation-details">
      <table>
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Penyakit</th>
            <th>No. Hp</th>
            <th>Tanggal</th>
            <th>Doctor</th>
            <th>Foto</th>
            <th>Pesan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody> 
          <?php $no = 1;
          foreach ($pasien as $val) { ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $val->nama; ?></td>
              <td><?php echo $val->penyakit; ?></td>
              <td><?php echo $val->no_hp; ?></td>
              <td><?php echo $val->tanggal; ?></td>
              <td><img src="<?php echo base_url('assets/keluhan/' . $val->foto); ?>" width="150" height="110"></td>
              <td><?php echo $val->dokter; ?></td>
              <td><?php echo $val->pesan; ?></td>
              <td>
                <a href="<?php echo site_url('auth/editkonsultasi/'.$val->idkonsultasi); ?>">Update</a>
                <a href="<?php echo site_url('Crud_konsultasi/hapus_konsultasi/'.$val->idkonsultasi); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus konsultasi ini?')">Delete</a>
              </td>
            </tr>
            <?php $no++;
          } ?>
        </tbody>
      </table>
      <div class="back-to-main">
        <a href="<?php echo site_url('auth/home'); ?>">Back to Main Page</a>
      </div>
    </div>
  </div>
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