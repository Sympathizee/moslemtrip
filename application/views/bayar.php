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

  <!--Pembayaran-->
  <section class="mt-5 py-4">

    <div class="container">

      <div class="row border rounded shadow mx-1">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 p-3">
              <h4 class="m-auto"><a href="<?=base_url();?>pemesanan/konfirmasi" class="text-secondary"><i class="fas fa-arrow-left m-1 mx-3"></i></a> Pembayaran</h4>
            </div>
          </div>
          <!--Header Calon Jamaah-->
          <div class="row mx-3">
            <h5>Calon Jamaah</h5>
          </div>
          <!--End Calon Jamaah-->
          <!--User Jamaah-->
          <div class="row border rounded p-3 mx-3 mb-3" id="jamaah1">
            <div class="col-md-12">
              <label>Jamaah 1</label>
              <br>
              <small>Nama Lengkap</small>
              <br>
              <label>Naufal Rizaldi</label>
              <br>
              <small>No. KTP</small>
              <br>
              <label>357414130619970006</lable>
              <br>
              <small>No. Handphone</small>
              <br>
              <label>+6282112345678</lable>
            </div>
          </div>
          <!--End User Jamaah-->
          <!--Jamaah 2-->
          <div class="row border rounded p-3 mx-3 mb-3" id='jamaah2'>
            <div class="col-md-12">
              <label>Jamaah 2</label>
              <br>
              <small>Nama Lengkap</small>
              <br>
              <label> Risma Sri Rahayu </label>
              <br>
              <small>No. KTP</small>
              <br>
              <label>357415160918878879</label>
              <br>
              <small>No. Handphone</small>
              <br>
              <label>+6285724321289</label>
            </div>
          </div>
          <!--End Jamaah 2-->
          <!--Header Detail Pembelian Paket-->
          <div class="row mx-3">
            <h5>Detail Pembelian Paket</h5>
            <div class="col-md-12">
              Minimal DP Rp. 5.000.000,-<br><small>*DP yang sudah dibayar tidak dapat dikembalikan.</small>
            </div>
          </div>
          <!--End Header Detail Pembelian Paket-->
          <!--Detail Pembelian Paket-->
          <div class="row border rounded p-3 mx-3 mt-3">
            <div class="col-md-6">
              Kamar Hotel Quad
            </div>
            <div class="col-md-6">
              Total
            </div>
            <div class="col-md-6">
              Rp. 24.900.000 x 2
            </div>
            <div class="col-md-6">
              Rp. 49.800.000
            </div>
          </div>
          <div class="row border rounded p-3 mx-3 my-0 mb-3">
            <div class="col-md-6">
              Harga Minimal DP
            </div>
            <div class="col-md-6">
              Total
            </div>
            <div class="col-md-6">
              Rp. 5.000.000 x 2
            </div>
            <div class="col-md-6">
              Rp. 10.000.000
            </div>
          </div>
          <!--End Detail Pembelian Paket-->

          <!--Header Metode Pembayaran-->
          <div class="row mx-3">
            <h5>Metode Pembayaran</h5>
          </div>
          <!--End Header Metode Pembayaran-->
          <!--Metode Pembayaran-->
          <div class="row border rounded p-2 mx-3 my-0 mb-3">
            <div class="col-md-6">
              <a href="" class="text-secondary">Pilih Metode</a>
            </div>
            <div class="col-md-6 text-right">
              <a href="" class="text-secondary">
                <i class="fas fa-chevron-right"></i>
              </a>
            </div>
          </div>

          <div class="row mx-3 my-0 mb-3">
            <div class="col p-0 m-0">
              <input type="text" name="" class="form-control" placeholder="Masukkan Kode Voucher">
            </div>
            <div class="col-md-2 text-right p-0 m-0">
              <button type="button" class="btn btn-success">Cek Kode</button>
            </div>
          </div>


          <!--End Metode Pembayaran-->
          <!--Total-->
          <div class="row mx-3 my-0 mb-3" style="border-bottom: 1px solid #ccc">
            <div class="col-md-6">
              <h5><b>TOTAL</b></h5>
            </div>
            <div class="col-md-6 text-right">
              <h5><b>Rp. 49.800.000,-</b></h5>
            </div>
          </div>
          <!--End Total-->

          <!--Tambah Jamaah-->
          <div class="row m-0 mb-3">
            <div class="col-md-12 text-center">
              <a href="<?=base_url();?>pemesanan/selesai" class="text-secondary">
                <button type="button" class="btn btn-success m-0">Bayar Sekarang</button>
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