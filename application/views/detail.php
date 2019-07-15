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

        <div class="row border rounded mx-1 mb-3 p-2">
            <div class="col-md-12 text-center">
                <img src="<?=base_url();?>assets/img/travel/adzikra.jpg" class="mr-3 border rounded d-inline" width="100">
                <h4 class="my-3">Adzikra Travel</h4>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <small class="d-block">No. Izin</small><b>No 782 Tahun 2017</b>
                    </div>
                    <div class="col-md-3">
                        <small class="d-block">Domisili</small><b>DKI Jakarta</b>
                    </div>
                    <div class="col-md-2 col-6">
                        <small class="d-block">Rating</small><b>4.5/5</b>
                    </div>
                    <div class="col-md-2 col-6">
                        <small class="d-block">Ulasan</small><b>1.7 K</b>
                    </div>
                    <div class="col-md-1 col-6">
                        <a id="btn-toggle-star" href="#" class="">
                        <div class="border rounded-circle text-center shadow mx-auto my-2 btn-love" style="width:40px;height:40px;line-height: 40px;">
                            <span class="toggle-star fas fa-star text-warning"></span>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-1 col-6">
                        <a id="btn-toggle-love" href="#" class="">
                        <div class="border rounded-circle text-center shadow mx-auto my-2 btn-love" style="width:40px;height:40px;line-height: 40px;">
                            <span class="toggle-love far fa-heart text-danger"></span>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row border rounded mx-1 mb-3 p-2">
            <h4><span class="badge badge-primary">Promo</span></h4>
            <div class="col-md-12 text-justify">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum arcu vitae elementum curabitur vitae. Sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus. Urna condimentum mattis pellentesque id nibh tortor id aliquet lectus. Velit aliquet sagittis id consectetur purus. Amet massa vitae tortor condimentum.
                <hr class="my-2">
            </div>
            <div class="col-md-12 text-justify">
                <div class="card border-0">
                    <a href="#collapseKodePromo" class="text-dark card-header border-0 px-0" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseKodePromo"  style="background-color: white">Kode Promo</a>

                    <div id="collapseKodePromo" class="collapse">
                    <div class="card-body">
                        <div  class="breadcrumb text-center font-weight-bold">
                            <span class="mx-auto">HAJIBARENG</span>
                            <button class="btn btn-sm text-success p-0 m-0">Salin</button>
                        </div>
                    </div>
                    </div>
                </div>
                <hr class="my-2">
            </div>
            <div class="col-md-12 text-justify">
                <div class="card border-0">
                    <a href="#collapseSyaratPromo" class="text-dark card-header border-0 px-0" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseSyaratPromo"  style="background-color: white">Syarat dan Ketentuan Promo</a>

                    <div id="collapseSyaratPromo" class="collapse">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                    </div>
                </div>
            </div>

        </div>

        <b class="mx-1">Keberangkatan</b>
        <div class="row border rounded mx-1 mb-3 p-3">
            <div class="col-md-4">
                <div class="row">
                    <i class="col-1 far fa-calendar my-2 p-0"></i>
                    <div class="col">
                        <small class="d-block">Keberangkatan</small>
                        29 Desember 2019
                    </div>
                </div>
                <div class="row mt-2">
                    <i class="col-1 far fa-clock my-2 p-0"></i>
                    <div class="col">
                        <small class="d-block">Durasi</small>
                        10 Hari 9 Jam
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="row mt-2">
                    <i class="col-1 fas fa-plane-departure my-2 p-0"></i>
                    <div class="col">
                        <small class="d-block">Penerbangan</small>
                        <dl>
                            <li>Jakarta <span class="badge badge-light">CGK</span>
                                <small class="ml-3 d-block pl-1">Soekarno Hatta International Airport</small>
                            </li>
                            <hr class="my-0 mx-3">
                            <li>Jeddah <span class="badge badge-light">JED</span>
                                <small class="ml-3 d-block pl-1">King Abdulaziz International Airport</small>
                            </li>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <i class="col-1 fas fa-exchange-alt my-2 p-0"></i>
                    <div class="col">
                        <small class="d-block">Transit</small>
                        <span class="d-block">2 kali</span>
                        Bangkok <span class="badge badge-light">BKK</span>
                        <span class="fas fa-sm text-secondary fa-arrow-right mx-1"></span>
                        Addis <span class="badge badge-light">ADD</span>
                    </div>
                </div>
                <div class="row mt-2">
                    <i class="col-1 fas fa-plane my-2 p-0"></i>
                    <div class="col">
                        <small class="d-block">Maskapai</small>
                        <span class="badge p-1 border rounded">Emirates</span>
                        <span class="badge p-1 border rounded">Garuda Indonesia</span>
                        <span class="badge p-1 border rounded">Etihad Airways</span>
                    </div>
                </div>
            </div>
        </div>

        <b class="mx-1">Hotel</b>
        <div class="row border rounded mx-1 mb-3 p-3">
            <div class="col-md-4">
                <img src="<?=base_url();?>assets/img/hotel/raffless-header.jpeg" class="mr-3 border rounded d-inline img-fluid">
            </div>
            <div class="col-md-8">
                <div class="row"><h4>Raffless Hotel</h4></div>
                <div class="row text-left">
                    <div class="col-md-6 media p-1">
                        <i class="fas fa-map-marker-alt my-1 p-0 d-inline"></i>
                        <div class="media-body mx-2">
                        Ajyad Street Al-Hajad, Makkah, Saudi Arabia
                        </div>
                    </div>
                    <div class="col-md-6 media p-1">
                        <i class="far fa-map my-1 p-0 d-inline"></i>
                        <div class="media-body mx-2">
                        500m dari Masjidil Haram
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 px-0 my-3">
                <div class="gmap_canvas">
                    <iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=masjidil%20haram&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
            </div>
        </div>

        <b class="mx-1">Kegiatan</b>
        <div class="accordion" id="accordionKegiatan">
            <div class="card">
                <div class="card-header " id="kegiatan1" style="background-color: white">
                    <a class="text-dark" href="#" data-toggle="collapse" data-target="#collapseKegiatan1" aria-expanded="false" aria-controls="collapseKegiatan1">
                    Jeddah - Madinah</a>
                    <small class="float-right text-muted">Hari ke-1</small>
                </div>

                <div id="collapseKegiatan1" class="collapse" aria-labelledby="kegiatan1" data-parent="#accordionKegiatan">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header " id="kegiatan2" style="background-color: white">
                    <a class="text-dark" href="#" data-toggle="collapse" data-target="#collapseKegiatan2" aria-expanded="false" aria-controls="collapseKegiatan2">
                    Madinah + Ziarah Raudhoh</a>
                    <small class="float-right text-muted">Hari ke-2</small>
                </div>

                <div id="collapseKegiatan2" class="collapse" aria-labelledby="kegiatan2" data-parent="#accordionKegiatan">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header " id="kegiatan3" style="background-color: white">
                    <a class="text-dark" href="#" data-toggle="collapse" data-target="#collapseKegiatan3" aria-expanded="false" aria-controls="collapseKegiatan3">
                    Ziarah Kota Madinah</a>
                    <small class="float-right text-muted">Hari ke-3</small>
                </div>

                <div id="collapseKegiatan3" class="collapse" aria-labelledby="kegiatan3" data-parent="#accordionKegiatan">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header " id="kegiatan4" style="background-color: white">
                    <a class="text-dark" href="#" data-toggle="collapse" data-target="#collapseKegiatan4" aria-expanded="false" aria-controls="collapseKegiatan4">
                    Makkah + Umroh ke-1</a>
                    <small class="float-right text-muted">Hari ke-4</small>
                </div>

                <div id="collapseKegiatan4" class="collapse" aria-labelledby="kegiatan4" data-parent="#accordionKegiatan">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header " id="kegiatan5" style="background-color: white">
                    <a class="text-dark" href="#" data-toggle="collapse" data-target="#collapseKegiatan5" aria-expanded="false" aria-controls="collapseKegiatan5">
                    Makkah</a>
                    <small class="float-right text-muted">Hari ke-5</small>
                </div>

                <div id="collapseKegiatan5" class="collapse" aria-labelledby="kegiatan5" data-parent="#accordionKegiatan">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header " id="kegiatan6" style="background-color: white">
                    <a class="text-dark" href="#" data-toggle="collapse" data-target="#collapseKegiatan6" aria-expanded="false" aria-controls="collapseKegiatan6">
                    Ziarah Kota Makkah</a>
                    <small class="float-right text-muted">Hari ke-6</small>
                </div>

                <div id="collapseKegiatan6" class="collapse" aria-labelledby="kegiatan6" data-parent="#accordionKegiatan">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header " id="kegiatan7" style="background-color: white">
                    <a class="text-dark" href="#" data-toggle="collapse" data-target="#collapseKegiatan7" aria-expanded="false" aria-controls="collapseKegiatan5">
                    Makkah + Umrah ke-2</a>
                    <small class="float-right text-muted">Hari ke-7</small>
                </div>

                <div id="collapseKegiatan7" class="collapse" aria-labelledby="kegiatan7" data-parent="#accordionKegiatan">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header " id="kegiatan8" style="background-color: white">
                    <a class="text-dark" href="#" data-toggle="collapse" data-target="#collapseKegiatan8" aria-expanded="false" aria-controls="collapseKegiatan8">
                    Makkah + Tawaf Wada</a>
                    <small class="float-right text-muted">Hari ke-8</small>
                </div>

                <div id="collapseKegiatan8" class="collapse" aria-labelledby="kegiatan8" data-parent="#accordionKegiatan">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header " id="kegiatan9" style="background-color: white">
                    <a class="text-dark" href="#" data-toggle="collapse" data-target="#collapseKegiatan9" aria-expanded="false" aria-controls="collapseKegiatan5">
                    Jeddah Jakarta</a>
                    <small class="float-right text-muted">Hari ke-9</small>
                </div>

                <div id="collapseKegiatan9" class="collapse" aria-labelledby="kegiatan9" data-parent="#accordionKegiatan">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                </div>
                </div>
            </div>
        </div>

        <div class="card my-3">
            <a href="#collapsePerlengkapan" class="text-dark card-header" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapsePerlengkapan"  style="background-color: white">
                Perlengkapan
            </a>

            <div id="collapsePerlengkapan" class="collapse">
            <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
            </div>
        </div>

        <div class="card my-3">
            <a href="#collapseSyarat" class="text-dark card-header" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseSyarat"  style="background-color: white">
                Syarat dan Ketentuan
            </a>
            <div id="collapseSyarat" class="collapse">
            <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
            </div>
        </div>

        <div class="row my-4">
            <div class="col-md-12 text-md-right">
                <button class="col-md-2 btn btn-success d-inline">Pesan Sekarang</button>
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

  <script>
    $('#btn-toggle-love').on('click', function(){
        $('.toggle-love').toggleClass('far fas');
    });
    $('#btn-toggle-star').on('click', function(){
        $('.toggle-star').toggleClass('far fas');
    });
  </script>
</body>

</html>
