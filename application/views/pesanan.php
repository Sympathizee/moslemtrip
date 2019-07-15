<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>My Trips - Layanan Travel Haji dan Umroh</title>
  <link rel="shortcut icon" href="assets/img/logo/logo-myTrips.png">

  <!-- CDN Styles -->
  <?php $this->load->view('templates/cdn_style.html'); ?>

  <!-- Custom styles for all pages -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>
<body>

  <!-- Sidebar  -->
  <?php $this->load->view('templates/sidebar.html'); ?>

  <!-- Navigation -->
  <?php $this->load->view('templates/navbar'); ?>
  <style media="screen">
  .filter .active {
    border: 1px solid rgb(79, 209, 90)!important;
    border-radius: 16px;
    background-color: rgb(235, 255, 239);
    color: rgb(3, 172, 14)!important;
    padding: 5px 0;
  }

  .filter .passive {
    border: 1px solid rgb(229, 231, 233)!important;
    border-radius: 16px;
    background-color: rgb(255, 255, 255);
    color: rgba(49, 53, 59, 0.68)!important;
    padding: 5px 0;
  }

  .active a {
    display: block;
    color: rgb(3, 172, 14)!important;
  }

  .passive a {
    display: block;
    color: rgba(49, 53, 59, 0.68)!important;
  }

  /* Pesanan detail pada collapse isi pesanan */
  .msg-from-buyer {
    background-color: rgb(248, 148, 9);
    padding: 4px 10px;
    border-radius: 4px;
    color: white;
    font-weight: 500;
  }

  .msg-from-system {
    background-color: rgb(153, 153, 153);
    padding: 4px 10px;
    border-radius: 4px;
    color: white;
    font-weight: 500;
  }

  .msg-from-selesai {
    background-color: rgb(70, 136, 71);
    padding: 4px 10px;
    border-radius: 4px;
    color: white;
    font-weight: 500;
  }
  </style>
  <section class="mt-5 py-4">
    <div class="container">
      <!-- Filter pesanan -->
      <div class="row border rounded shadow mx-1 mb-3 p-2">
        <div class="col-md-12">
          <h4>Pesanan</h4>
        </div>
        <div class="col-md-12">
          <div class="row filter text-center">
            <div class="col-md-5 mx-auto active">
              <a href="#">
                Aktif
              </a>
            </div>
            <div class="col-md-5 mx-auto passive">
              <a href="#">
                Riwayat
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Pesanan kosong -->
      <div class="row border rounded shadow mx-1 mb-3 p-2" hidden>
        <div class="col-md-12 text-center my-5 p-5" style="color:rgba(0, 0, 0, 0.38);">
          <span class="far fa-clipboard mb-5" style="font-size:18rem;"></span>
          <h5>Semua pesanan aktif anda disini.<br>Anda belum memiliki pesanan aktif</h5>
        </div>
      </div>

      <!-- Isi pesanan -->
      <div class="row">
        <div class="col-md-12">
          <a href="haji/detail?travel=AdzikraTravel" class="text-dark">
            <div class="media border rounded shadow mx-1 my-3 p-2">
              <img src="assets/img/travel/adzikra.jpg" class="mr-3 border rounded d-none d-sm-block" width="100">
              <div class="media-body">
                <div class="row">
                  <div class="col-2 d-inline d-sm-none">
                    <img src="assets/img/travel/adzikra.jpg" class="border rounded" width="30">
                  </div>
                  <div class="col">
                    <h5 class="d-inline font-weight-bold">Adzikra Travel</h5>
                    <p class="d-md-inline mx-1 float-md-right">
                      <span class="fas fa-star text-warning mr-2"></span><b>4.5</b>
                    </p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    <span class="badge badge-danger">Discount</span>
                  </div>
                  <div class="col-md-3">
                    <b class="mr-2">No. Izin</b> No 782 Tahun 2017
                  </div>
                  <div class="col-md-3">
                    <b class="mr-2">Domisili</b> DKI Jakarta
                  </div>
                  <div class="col-md-4 pb-3">
                    <h5>RP. 29.000.000 ,-</h5>
                  </div>
                </div>
                <!-- Collapse -->
                <div class="row">
                  <div class="col text-center">
                    <hr>
                    <a class="detail text-success" data-toggle="collapse" href="#collapseDetail_1" role="button" aria-expanded="true" aria-controls="collapseDetail_1"></a>

                    <div class="card p-1 collapse" id="collapseDetail_1">
                      <div class="row mx-2 my-2 text-left">
                        <div class="col-md-3 text-right">
                          <div class="msg-from-selesai">
                            Moslem Trip
                          </div>
                          <div class="tanggal">
                            Jumat, 09 April 2019<br>23.00 WIB
                          </div>
                        </div>
                        <div class="col-md-9 border-bottom">
                          Pemesanan sudah selesai.<br>
                        </div>
                      </div>
                      <div class="row mx-2 my-2 text-left">
                        <div class="col-md-3 text-right">
                          <div class="msg-from-system">
                            Moslem Trip
                          </div>
                          <div class="tanggal">
                            Jumat, 09 April 2019<br>23.00 WIB
                          </div>
                        </div>
                        <div class="col-md-9 border-bottom">
                          Paket sedang diproses.<br>
                        </div>
                      </div>
                      <div class="row mx-2 my-2 text-left">
                        <div class="col-md-3 text-right">
                          <div class="msg-from-system">
                            Moslem Trip
                          </div>
                          <div class="tanggal">
                            Jumat, 09 April 2019<br>23.00 WIB
                          </div>
                        </div>
                        <div class="col-md-9 border-bottom">
                          Pembayaran sudah Diverifikasi.<br>
                        </div>
                      </div>
                      <div class="row mx-2 my-2 text-left">
                        <div class="col-md-3 text-right">
                          <div class="msg-from-buyer">
                            Pembeli
                          </div>
                          <div class="tanggal">
                            Jumat, 09 April 2019<br>20.00 WIB
                          </div>
                        </div>
                        <div class="col-md-9 border-bottom">
                          Melakukan proses Check Out order.<br>Menunggu konfirmasi pembayaran.
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php $this->load->view('templates/footer.html'); ?>

  <!-- CDN Scripts -->
  <?php $this->load->view('templates/cdn_script.html'); ?>

  <!-- Custom scripts for all pages -->
  <script src="assets/js/main.js"></script>
</body>
</html>
