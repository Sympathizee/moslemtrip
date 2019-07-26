<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pemesanan</title>
  <link rel="shortcut icon" href="<?=base_url();?>assets/img/logo/logo-myTrips.png">

  <!-- CDN Styles -->
  <?php $this->load->view('templates/cdn_style.html'); ?>

  <!-- Custom styles for all pages -->
  <link href="<?=base_url();?>assets/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="<?=base_url();?>assets/css/pemesanan.css">
</head>
<body>

  <!-- Sidebar  -->
  <?php $this->load->view('templates/sidebar.html'); ?>

  <!-- Navigation -->
  <?php $this->load->view('templates/navbar'); ?>

  <!--Pemesanan Selesai-->
  <section class="mt-5 py-4">

    <div class="container">

      <div class="row border rounded shadow mx-1">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 p-3">
              <h4 class="m-auto"><a href="<?=base_url();?>pemesanan/konfirmasi" class="text-secondary"><i class="fas fa-arrow-left m-1 mx-3"></i></a>Pemesanan Selesai</h4>
            </div>
          </div>

          <div class="row mx-3">
            <h5 class="text-secondary">Pembayaran Melalui Virtual Account Mandiri Syariah</h5>
          </div>

          <div class="row border rounded p-3 mx-3 mb-2" id="jamaah1">
            <div class="col-md-12">
              <h5>Batas Pembayaran</h5>
              <label>12-07-2019 13:30:00</label>
            </div>
          </div>

          <div class="row border rounded p-3 mx-3 mb-2" id="jamaah1">
            <div class="col-md-12">
              <h5>No. Virtual Account Mandiri Syariah</h5>
              <label>889006557892134</label>
            </div>
          </div>

          <div class="row border rounded p-3 mx-3 mb-3" id="jamaah1">
            <div class="col-md-12">
              <h5>Nominal Tagihan</h5>
              <label>Rp. 49.800.000,-</label>
            </div>
          </div>

          <div class="row border rounded p-3 mx-3 mb-3" id="jamaah1">
            <div class="col-md-12">
              <h5>Nomor Tagihan</h5>
              <label>001156782320</label>
            </div>
          </div>

          <div class="row border rounded p-2 mx-3 my-0 mb-3">
            <div class="col-md-6">
              <a href="" class="text-secondary">Tata Cara Pembayaran</a>
            </div>
            <div class="col-md-6 text-right">
              <a href="" class="text-secondary">
                <i class="fas fa-chevron-down"></i>
              </a>
            </div>
          </div>

          <!--Tambah Jamaah-->
          <div class="row m-0 mb-3">
            <div class="col-md-12 text-center">
              <a href="<?=base_url();?>" class="text-secondary">
                <button type="button" class="btn btn-success m-0">Tutup</button>
              </a>
            </div>
          </div>
          <!--End Tambah Jamaah-->
        </div>

      </div>

    </div>

  </section>

  <!--End Informasi Kontak-->
  <!--Modal Edit-->

  <!-- Footer -->
  <?php $this->load->view('templates/footer.html'); ?>

  <!-- CDN Scripts -->
  <?php $this->load->view('templates/cdn_script.html'); ?>

  <!-- Custom scripts for all pages -->
  <script src="<?=base_url();?>assets/js/main.js"></script>
</body>
</html>