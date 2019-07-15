<!DOCTYPE html>
<html lang="en">

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

  <!-- Promo -->
  <section class=" mt-5 py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="main-carousel"  data-flickity='{ "imagesLoaded": true, "autoPlay": true, "wrapAround": true }'>
              <img class="d-block m-2 rounded" src="<?=base_url();?>assets/img/header-bg.jpg" alt="First slide" height="300">
              <img class="d-block m-2 rounded" src="<?=base_url();?>assets/img/header-bg.jpg" alt="Second slide" height="300">
              <img class="d-block m-2 rounded" src="<?=base_url();?>assets/img/header-bg.jpg" alt="Third slide" height="300">
              <img class="d-block m-2 rounded" src="<?=base_url();?>assets/img/header-bg.jpg" alt="Fourth slide" height="300">
          </div>
        </div>
        <div class="col-md-12 text-center text-md-right mt-4">
            <a href="#" class="text-success font-weight-bold">Lihat Semua Promo</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Layanan -->
  <section class="p-3">
    <div class="container p-0">

        <div class="row">
            <div class="col-md-10">
                <b>Filter</b>
                <nav class="border-bottom">
                    <div class="nav nav-tabs font-weight-normal border-0" id="nav-tab" role="tablist">
                        <a class="nav-item text-dark m-2" id="nav-home-tab" data-toggle="tab" href="#filter-harga" role="tab" aria-controls="filter-harga" aria-selected="false">Harga</a>
                        <a class="nav-item text-dark m-2" id="filter-keberangkatan-tab" data-toggle="tab" href="#filter-keberangkatan" role="tab" aria-controls="filter-keberangkatan" aria-selected="false">Keberangkatan</a>
                        <a class="nav-item text-dark m-2" id="filter-maskapai-tab" data-toggle="tab" href="#filter-maskapai" role="tab" aria-controls="filter-maskapai" aria-selected="false">Maskapai</a>
                        <a class="nav-item text-dark m-2" id="filter-lokasi-tab" data-toggle="tab" href="#filter-lokasi" role="tab" aria-controls="filter-lokasi" aria-selected="false">Lokasi</a>
                        <a class="nav-item text-dark m-2" id="filter-hotel-tab" data-toggle="tab" href="#filter-hotel" role="tab" aria-controls="filter-hotel" aria-selected="false">Hotel</a>
                        <a class="nav-item m-1 btn btn-sm text-danger" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Reset</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="col-md-6 tab-pane fade" id="filter-harga" role="tabpanel" aria-labelledby="filter-harga-tab">
                        <div class="row p-3">
                            <div class="col-12 ">
                                <input id="hargaSlider" type="text" data-provide="slider" data-slider-min="1" data-slider-max="100" data-slider-step="1" data-slider-value="[10, 45]"/>
                            </div>
                            <div class="col-6 p-0">
                                <small class="d-block">Mulai Dari</small>
                                Rp. <span id="minHargaSlider">10</span>.000.000
                            </div>
                            <div class="col-6 p-0">
                                <small class="d-block">Sampai Dengan</small>
                                Rp. <span id="maxHargaSlider">45</span>.000.000
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 tab-pane fade" id="filter-keberangkatan" role="tabpanel" aria-labelledby="filter-keberangkatan-tab">
                        <div class="row p-3">
                            <div class="col-6 p-0 pr-3">
                                <small class="d-block">Mulai Dari</small>
                                <input type="text" class="form-control form-control-sm datepicker-here" data-toggle="datepicker" data-language='en' data-date-format="dd/mm/yyyy" id="dp1" placeholder="Tanggal Awal">
                            </div>
                            <div class="col-6 p-0 pr-3">
                                <small class="d-block">Sampai Dengan</small>
                                <input type="text" class="form-control form-control-sm datepicker-here" data-toggle="datepicker" data-language='en' data-date-format="dd/mm/yyyy" id="dp2" placeholder="Tanggal Akhir">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 tab-pane fade" id="filter-maskapai" role="tabpanel" aria-labelledby="filter-maskapai-tab">
                        <div class="row p-3">
                            <div class="col-md-3 form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                Garuda Indonesia
                                </label>
                            </div>
                            <div class="col-md-3 form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">
                                Qatar Airlines
                                </label>
                            </div>
                            <div class="col-md-3 form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                                <label class="form-check-label" for="defaultCheck3">
                                Air Asia Airlines
                                </label>
                            </div>
                            <div class="col-md-3 form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
                                <label class="form-check-label" for="defaultCheck4">
                                Malaysia Airlines
                                </label>
                            </div>
                            <div class="col-md-3 form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck5">
                                <label class="form-check-label" for="defaultCheck5">
                                Etihad Airways
                                </label>
                            </div>
                            <div class="col-md-3 form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck6">
                                <label class="form-check-label" for="defaultCheck6">
                                Saudia Airlines
                                </label>
                            </div>
                            <div class="col-md-3 form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck7">
                                <label class="form-check-label" for="defaultCheck7">
                                Emirates Airways
                                </label>
                            </div>
                            <div class="col-md-3 form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck8">
                                <label class="form-check-label" for="defaultCheck8">
                                Turkish Airlines
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 tab-pane fade" id="filter-lokasi" role="tabpanel" aria-labelledby="filter-lokasi-tab">
                        <div class="row p-3">
                            <div class="col-md-3 form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                Jakarta
                                </label>
                            </div>
                            <div class="col-md-3 form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">
                                Bandung
                                </label>
                            </div>
                            <div class="col-md-3 form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                                <label class="form-check-label" for="defaultCheck3">
                                Surabaya
                                </label>
                            </div>
                            <div class="col-md-3 form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
                                <label class="form-check-label" for="defaultCheck4">
                                Medan
                                </label>
                            </div>
                            <div class="col-md-3 form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck5">
                                <label class="form-check-label" for="defaultCheck5">
                                Aceh
                                </label>
                            </div>
                            <div class="col-md-3 form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck6">
                                <label class="form-check-label" for="defaultCheck6">
                                Padang
                                </label>
                            </div>
                            <div class="col-md-3 form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck7">
                                <label class="form-check-label" for="defaultCheck7">
                                Makassar
                                </label>
                            </div>
                            <div class="col-md-3 form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck8">
                                <label class="form-check-label" for="defaultCheck8">
                                Jayapura
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 tab-pane fade" id="filter-hotel" role="tabpanel" aria-labelledby="filter-hotel-tab">
                        <div class="row p-3">
                            <div class="col-md-3 form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                Bintang 2
                                </label>
                            </div>
                            <div class="col-md-3 form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                Bintang 3
                                </label>
                            </div>
                            <div class="col-md-3 form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                Bintang 4
                                </label>
                            </div>
                            <div class="col-md-3 form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                Bintang 5
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"></div>
                </div>
            </div>
            <div class="col-md-2 text-center text-md-right">
                <a class="nav-item my-4 btn text-light btn-success btn-sm" href="#">Filter</a>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <a href="<?=base_url();?>haji/detail?travel=AdzikraTravel" class="text-dark">
                <div class="media border rounded shadow my-3 p-2">
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
                        <div class="row">
                            <div class="col text-center">
                                <hr>
                                <a class="detail text-success" data-toggle="collapse" href="#collapseDetail_1" role="button" aria-expanded="true" aria-controls="collapseDetail_1"></a>

                                <div class="card p-1 collapse" id="collapseDetail_1">
                                    <div class="row mx-2 text-left">
                                        <div class="col-md-4">
                                            <div class="row">
                                                <i class="col-1 far fa-calendar my-2 p-0"></i>
                                                <div class="col">
                                                    <small class="d-block">Keberangkatan</small>
                                                    29 Desember 2019
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <i class="col-1 fas fa-plane-departure my-2 p-0"></i>
                                                <div class="col">
                                                    <small class="d-block">Penerbangan</small>
                                                    Jakarta <span class="badge badge-light">CGK</span> -
                                                    Jeddah <span class="badge badge-light">JED</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="row">
                                                <i class="col-1 far fa-clock my-2 p-0"></i>
                                                <div class="col">
                                                    <small class="d-block">Durasi</small>
                                                    10 Hari 9 Jam
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="row">
                                                <i class="col-1 fas fa-exchange-alt my-2 p-0"></i>
                                                <div class="col">
                                                    <small class="d-block">Transit</small>
                                                    2 kali
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <i class="col-1 fas fa-plane my-2 p-0"></i>
                                                <div class="col">
                                                    <small class="d-block">Maskapai</small>
                                                    Garuda Indonesia
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <i class="col-1 far fa-building my-2 p-0"></i>
                                                <div class="col">
                                                    <small class="d-block">Hotel</small>
                                                    <i class="fas fa-star fa-xs text-warning"></i>
                                                    <i class="fas fa-star fa-xs text-warning"></i>
                                                    <i class="fas fa-star fa-xs text-warning"></i>
                                                    <i class="fas fa-star fa-xs text-warning"></i>
                                                    <i class="fas fa-star fa-xs text-muted"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <a href="#" class="btn mt-3 text-success">
                                                <small>Lihat Detail</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                </a>

                <a href="<?=base_url();?>haji/detail?travel=AdzikraTravel" class="text-dark">
                <div class="media border rounded shadow my-3 p-2">
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
                                <span class="badge badge-primary">Promo</span>
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
                        <div class="row">
                            <div class="col text-center">
                                <hr>
                                <a class="detail text-success" data-toggle="collapse" href="#collapseDetail_2" role="button" aria-expanded="true" aria-controls="collapseDetail_1"></a>

                                <div class="card p-1 collapse" id="collapseDetail_2">
                                    <div class="row mx-2 text-left">
                                        <div class="col-md-4">
                                            <div class="row">
                                                <i class="col-1 far fa-calendar my-2 p-0"></i>
                                                <div class="col">
                                                    <small class="d-block">Keberangkatan</small>
                                                    29 Desember 2019
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <i class="col-1 fas fa-plane-departure my-2 p-0"></i>
                                                <div class="col">
                                                    <small class="d-block">Penerbangan</small>
                                                    Jakarta <span class="badge badge-light">CGK</span> -
                                                    Jeddah <span class="badge badge-light">JED</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="row">
                                                <i class="col-1 far fa-clock my-2 p-0"></i>
                                                <div class="col">
                                                    <small class="d-block">Durasi</small>
                                                    10 Hari 9 Jam
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="row">
                                                <i class="col-1 fas fa-exchange-alt my-2 p-0"></i>
                                                <div class="col">
                                                    <small class="d-block">Transit</small>
                                                    Langsung
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <i class="col-1 fas fa-plane my-2 p-0"></i>
                                                <div class="col">
                                                    <small class="d-block">Maskapai</small>
                                                    Garuda Indonesia
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <i class="col-1 far fa-building my-2 p-0"></i>
                                                <div class="col">
                                                    <small class="d-block">Hotel</small>
                                                    <i class="fas fa-star fa-xs text-warning"></i>
                                                    <i class="fas fa-star fa-xs text-warning"></i>
                                                    <i class="fas fa-star fa-xs text-warning"></i>
                                                    <i class="fas fa-star fa-xs text-warning"></i>
                                                    <i class="fas fa-star fa-xs text-muted"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <a href="#" class="btn mt-3 text-success">
                                                <small>Lihat Detail</small>
                                            </a>
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
  <script src="<?=base_url();?>assets/js/main.js"></script>

</body>

</html>
