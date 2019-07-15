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
  <link rel="stylesheet" href="<?=base_url();?>assets/css/pesanan.css">

</head>
<body>

  <!-- Sidebar  -->
  <?php $this->load->view('templates/sidebar.html'); ?>

  <!-- Navigation -->
  <?php $this->load->view('templates/navbar'); ?>
  <section class="mt-5 py-4">
    <div class="container">

      <div class="row border rounded shadow mx-1">
        <div class="col-md-12 p-3">
          <h4 class="m-auto"><span class="far fa-clipboard pr-2"></span>Pesanan</h4>
        </div>
        <!-- Filter pesanan -->
        <div class="col-md-12 pb-3">
          <div class="row filter text-center">
            <div class="col-md-6 mx-auto border-bottom active">
              <a href="#">
                Aktif
              </a>
            </div>
            <div class="col-md-6 mx-auto border-bottom passive">
              <a href="#">
                Riwayat
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <!-- Pesanan kosong -->
          <div class="row">
            <div class="col-md-12 text-center my-5 p-5" style="color:rgba(0, 0, 0, 0.38);">
              <span class="far fa-clipboard mb-5" style="font-size:18rem;"></span>
              <h5>Semua pesanan aktif anda disini.<br>Anda belum memiliki pesanan aktif</h5>
            </div>
          </div>

          <!-- Isi pesanan -->
          <div class="row">
            <div class="col-md-12">
              <a href="<?=base_url();?>haji/detail?travel=AdzikraTravel" class="text-dark">
                <div class="media border rounded mx-1 my-3 p-2">
                  <img src="<?=base_url();?>assets/img/travel/adzikra.jpg" class="mr-3 border rounded d-none d-sm-block" width="100">
                  <div class="media-body">
                    <div class="row">
                      <div class="col-2 d-inline d-sm-none">
                        <img src="<?=base_url();?>assets/img/travel/adzikra.jpg" class="border rounded" width="30">
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
          <div class="row">
            <div class="col-md-12">
              <a href="<?=base_url();?>haji/detail?travel=AdzikraTravel" class="text-dark">
                <div class="media border rounded mx-1 my-3 p-2">
                  <img src="<?=base_url();?>assets/img/travel/adzikra.jpg" class="mr-3 border rounded d-none d-sm-block" width="100">
                  <div class="media-body">
                    <div class="row">
                      <div class="col-2 d-inline d-sm-none">
                        <img src="<?=base_url();?>assets/img/travel/adzikra.jpg" class="border rounded" width="30">
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
