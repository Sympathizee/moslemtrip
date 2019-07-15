<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Trips - Layanan Travel Haji dan Umroh</title>
    <link rel="shortcut icon" href="<?=base_url();?>assets/img/logo/logo-myTrips.png">

    <!-- CDN Styles -->
    <?php $this->load->view('templates/cdn_style.html'); ?>

    <!-- Custom styles for all pages -->
    <link href="<?=base_url();?>assets/css/main.css" rel="stylesheet">
  </head>
  <body>
    <!-- Sidebar  -->
    <?php $this->load->view('templates/sidebar.html'); ?>

    <!-- Navigation -->
    <?php $this->load->view('templates/navbar'); ?>

    <!-- Profil -->
    <section class="mt-5 py-4">
      <div class="container">
        <h5 class="mx-1">Profil</h5>
        <div class="row border rounded shadow mx-1 mb-3 px-3 py-2">
          <div class="col-md-12">
            <b class="d-block text-weight-bold pb-1">Nama Pengguna</b>
            <input class="border-0 w-100" type="text" name="nama" value="Naufal Rizaldi">
            <a href="#"><small class="text-success">Ubah</small></a>
          </div>
        </div>
        <div class="row border rounded shadow mx-1 mb-3 px-3 py-2">
          <div class="col-md-12">
            <b class="d-block text-weight-bold pb-1">Email</b>
            <input class="border-0 w-100" type="email" name="email" value="naufal.rizaldi@gmail.com">
            <a href="#"><small class="text-success">Ubah</small></a>
          </div>
        </div>
        <div class="row border rounded shadow mx-1 mb-3 px-3 py-2">
          <div class="col-md-12">
            <b class="d-block text-weight-bold pb-1">Nomor Telepon</b>
            <input class="border-0 w-100" type="text" name="nomortelp" value="Naufal Rizaldi">
            <a href="#"><small class="text-success">Ubah</small></a>
          </div>
        </div>
        <div class="row border rounded shadow mx-1 mb-3 px-3 py-2">
          <div class="col-md-12">
            <b class="d-block text-weight-bold pb-1">Nomor KTP</b>
            <input class="border-0 w-100" type="text" name="nomorktp" value="Naufal Rizaldi">
            <a href="#"><small class="text-success">Ubah</small></a>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <?php $this->load->view('templates/footer.html'); ?>

    <!-- CDN Scripts -->
    <?php $this->load->view('templates/cdn_script.html'); ?>

    <!-- Custom scripts for all pages -->
    <script src="<?=base_url();?>assets/js/main.js"></script>
  </body>
</html>
