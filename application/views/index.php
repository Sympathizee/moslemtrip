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
            <a href="#" class="text-green font-weight-bold">Lihat Semua Promo</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Layanan -->
  <section class="p-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-uppercase">Layanan</h2>
        </div>
      </div>
      <div class="row">

        <div class="layanan border rounded shadow p-3 my-3 mx-auto">
          <a href="<?=base_url();?>haji" class="text-secondary">
            <div class="layanan-bg bg-grayteal">
                <div class="row text-center justify-content-center p-3">
                  <img class="col" src="<?=base_url();?>assets/img/layanan/haji.png">
                </div>
            </div>
            <h5 class="text-uppercase mt-2">Haji</h5>
          </a>
        </div>

        <div class="layanan border rounded shadow p-3 my-3 mx-auto">
          <a href="#" class="text-secondary">
            <div class="layanan-bg bg-grayred">
                <div class="row text-center justify-content-center p-3">
                  <img class="col" src="<?=base_url();?>assets/img/layanan/umroh.png">
                </div>
            </div>
            <h5 class="text-uppercase mt-2">Umroh</h5>
          </a>
        </div>

        <div class="layanan border rounded shadow p-3 my-3 mx-auto">
          <a href="#" class="text-secondary">
            <div class="layanan-bg bg-grayblue">
                <div class="row text-center justify-content-center p-3">
                  <img class="col" src="<?=base_url();?>assets/img/layanan/wisatahalal.png">
                </div>
            </div>
            <h5 class="text-uppercase mt-2">Wisata Halal</h5>
          </a>
        </div>

        <div class="layanan border rounded shadow p-3 my-3 mx-auto">
          <a href="#" class="text-secondary">
            <div class="layanan-bg bg-grayyellow">
                <div class="row text-center justify-content-center p-3">
                  <img class="col" src="<?=base_url();?>assets/img/layanan/panduanmanasik.png">
                </div>
            </div>
            <h5 class="text-uppercase mt-2">Panduan Manasik</h5>
          </a>
        </div>

        <div class="layanan border rounded shadow p-3 my-3 mx-auto">
          <a href="#" class="text-secondary">
            <div class="layanan-bg bg-graypurple">
                <div class="row text-center justify-content-center p-3">
                  <img class="col" src="<?=base_url();?>assets/img/layanan/oleholeh.png">
                </div>
            </div>
            <h5 class="text-uppercase mt-2">Oleh-oleh</h5>
          </a>
        </div>

        <div class="layanan border rounded shadow p-3 my-3 mx-auto">
          <a href="#" class="text-secondary">
            <div class="layanan-bg bg-graygreen">
                <div class="row text-center justify-content-center p-3">
                  <img class="col" src="<?=base_url();?>assets/img/layanan/dokumentasi.png">
                </div>
            </div>
            <h5 class="text-uppercase mt-2">Dokumentasi</h5>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Maskapai -->
  <section class="p-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2 class="text-uppercase">Maskapai</h2>
          </div>
        </div>
        <div class="row">
            <div class="col-md-12"
            data-flickity='{"wrapAround": true, "pageDots": false, "prevNextButtons": false }'>
              <div class="maskapai border shadow rounded p-3 my-3 mx-2">
                <a href="#" class="text-secondary">
                  <div class="row text-center justify-content-center">
                    <img class="col" src="<?=base_url();?>assets/img/maskapai/etihad.png">
                  </div>
                  <span class="text-uppercase mt-2">Etihad Airways</span>
                </a>
              </div>

              <div class="maskapai border shadow rounded p-3 my-3 mx-2">
                <a href="#" class="text-secondary">
                  <div class="row text-center justify-content-center">
                    <img class="col" src="<?=base_url();?>assets/img/maskapai/garuda.png">
                  </div>
                  <span class="text-uppercase mt-2">Garuda Indonesia</span>
                </a>
              </div>

              <div class="maskapai border shadow rounded p-3 my-3 mx-2">
                <a href="#" class="text-secondary">
                  <div class="row text-center justify-content-center">
                    <img class="col" src="<?=base_url();?>assets/img/maskapai/qatar.png">
                  </div>
                  <span class="text-uppercase mt-2">Qatar Airlines</span>
                </a>
              </div>

              <div class="maskapai border shadow rounded p-3 my-3 mx-2">
                <a href="#" class="text-secondary">
                  <div class="row text-center justify-content-center">
                    <img class="col" src="<?=base_url();?>assets/img/maskapai/emirates.png">
                  </div>
                  <span class="text-uppercase mt-2">Emirates Airlines</span>
                </a>
              </div>

              <div class="maskapai border shadow rounded p-3 my-3 mx-2">
                <a href="#" class="text-secondary">
                  <div class="row text-center justify-content-center">
                    <img class="col" src="<?=base_url();?>assets/img/maskapai/turkish.png">
                  </div>
                  <span class="text-uppercase mt-2">Turkish Airlines</span>
                </a>
              </div>

              <div class="maskapai border shadow rounded p-3 my-3 mx-2">
                <a href="#" class="text-secondary">
                  <div class="row text-center justify-content-center">
                    <img class="col" src="<?=base_url();?>assets/img/maskapai/saudia.png">
                  </div>
                  <span class="text-uppercase mt-2">Saudia Airlines</span>
                </a>
              </div>

              <div class="maskapai border shadow rounded p-3 my-3 mx-2">
                <a href="#" class="text-secondary">
                  <div class="row text-center justify-content-center">
                    <img class="col" src="<?=base_url();?>assets/img/maskapai/airasia.png">
                  </div>
                  <span class="text-uppercase mt-2">Air Asia Airlines</span>
                </a>
              </div>

              <div class="maskapai border shadow rounded p-3 my-3 mx-2">
                <a href="#" class="text-secondary">
                  <div class="row text-center justify-content-center">
                    <img class="col" src="<?=base_url();?>assets/img/maskapai/malaysia.png">
                  </div>
                  <span class="text-uppercase mt-2">Malaysia Airlines</span>
                </a>
              </div>

            </div>
        </div>
      </div>
  </section>

  <!-- Hotel -->
  <section class="p-3">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2 class="text-uppercase">Hotel</h2>
            <p class="text-justify">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pellentesque adipiscing commodo elit at imperdiet.
            </p>
          </div>
          <div class="col-md-8"
          data-flickity='{"wrapAround": true, "pageDots": false, "prevNextButtons": false }'>
            <div class="maskapai border shadow rounded p-3 my-3 mx-2">
              <a href="#" class="text-secondary">
                <div class="row text-center justify-content-center">
                  <img class="col" src="<?=base_url();?>assets/img/hotel/bisha.png">
                </div>
                <span class="text-uppercase mt-2">Bisha Hotel Ressidance</span>
              </a>
            </div>

            <div class="maskapai border shadow rounded p-3 my-3 mx-2">
              <a href="#" class="text-secondary">
                <div class="row text-center justify-content-center">
                  <img class="col" src="<?=base_url();?>assets/img/hotel/hardrock.png">
                </div>
                <span class="text-uppercase mt-2">Hard Rock Hotel</span>
              </a>
            </div>

            <div class="maskapai border shadow rounded p-3 my-3 mx-2">
              <a href="#" class="text-secondary">
                <div class="row text-center justify-content-center">
                  <img class="col" src="<?=base_url();?>assets/img/hotel/pillows.png">
                </div>
                <span class="text-uppercase mt-2">Pillows Hotel</span>
              </a>
            </div>

            <div class="maskapai border shadow rounded p-3 my-3 mx-2">
              <a href="#" class="text-secondary">
                <div class="row text-center justify-content-center">
                  <img class="col" src="<?=base_url();?>assets/img/hotel/raffless.png">
                </div>
                <span class="text-uppercase mt-2">Raffles Hotel</span>
              </a>
            </div>

            <div class="maskapai border shadow rounded p-3 my-3 mx-2">
              <a href="#" class="text-secondary">
                <div class="row text-center justify-content-center">
                  <img class="col" src="<?=base_url();?>assets/img/hotel/royal.png">
                </div>
                <span class="text-uppercase mt-2">Royal Hotel Ressort</span>
              </a>
            </div>

            <div class="maskapai border shadow rounded p-3 my-3 mx-2">
              <a href="#" class="text-secondary">
                <div class="row text-center justify-content-center">
                  <img class="col" src="<?=base_url();?>assets/img/hotel/safir.png">
                </div>
                <span class="text-uppercase mt-2">Al Safir Hotel</span>
              </a>
            </div>

            <div class="maskapai border shadow rounded p-3 my-3 mx-2">
              <a href="#" class="text-secondary">
                <div class="row text-center justify-content-center">
                  <img class="col" src="<?=base_url();?>assets/img/hotel/saja.png">
                </div>
                <span class="text-uppercase mt-2">Saja Al Madina</span>
              </a>
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
