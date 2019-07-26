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

  <!--Pemesanan-->
  <section class="mt-5 py-4">

    <div class="container">

      <div class="row border rounded shadow mx-1">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 p-3">
              <h4 class="m-auto">Pemesanan</h4>
            </div>
          </div>
          <!--Header Informasi Kontak-->
          <div class="row mx-3">
            <h5>Informasi Kontak</h5>
          </div>
          <!--End Informasi Kontak-->
          <div class="row border rounded p-3 mx-3 mb-3">
            <div class="col-md-12">
              <form>
                <div class="form-group">
                  <label for="fullName">Nama Lengkap</label>
                  <input type="text" class="form-control" id="fullName" value="Naufal Rizaldi" disabled>
                </div>
                <div class="form-group">
                  <label for="NoKTP">No. KTP</label>
                  <input type="text" class="form-control" id="NoKTP" value="357414130619970006" disabled>
                </div>
                <div class="form-group">
                  <label for="email">Alamat Email</label>
                  <input type="text" class="form-control" id="email" value="naufal.rizaldi@gmail.com" disabled>
                </div>
                <div class="form-group">
                  <label for="NoHP">No. Handphone</label>
                  <input type="text" class="form-control" id="NoHP" value="+6282112345678" disabled>
                </div>
                <div class="form-check text-right">
                  <label class="m-2" for="CheckJamaah">Saya Juga Calon Jamaah</label>
                  <label class="switch p-1">
                    <input type="checkbox" data-toggle='collapse' data-target='#usercollapse' id="CheckJamaah">
                    <span class="slider round">
                  </label>
                </div>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editUserJamaah">Edit</button>
              </form>
            </div>
          </div>
          <!--Header Daftar Jamaah-->
          <div class="row mx-3">
            <h5>Daftar Jamaah</h5>
          </div>
          <!--End Daftar Jamaah-->
          <!--Calon Jamaah 1-->
          <div class="row border rounded p-3 mx-3 mb-3 collapse" id='usercollapse'>
            <div class="col-md-12">
              <h5>Calon Jamaah 1</h4>
              <form>
                <div class="form-group">
                  <label for="fullName1">Nama Lengkap</label>
                  <input type="text" class="form-control" id="fullName1" placeholder="Nama Lengkap" value="Naufal Rizaldi" readonly>
                </div>
                <div class="form-group">
                  <label for="NoKTP1">No. KTP</label>
                  <input type="text" class="form-control" id="NoKTP1" placeholder="No. KTP" value="357414130619970006" readonly>
                </div>
                <div class="form-group">
                  <label for="NoHP1">No. Handphone</label>
                  <input type="text" class="form-control" id="NoHP1" placeholder="+621234567890" value="+6282112345678" readonly>
                </div>
              </form>
            </div>
          </div>
          <!--End Calon Jamaah 1-->
          <!--Calon Jamaah 2-->

          <div class="row border rounded p-3 mx-3 mb-3" id='jamaah2'>
            <div class="col-md-12">
              <button type="button" class="close" data-toggle="modal" data-target="#confirm2">&times;</button>
              <h5>Calon Jamaah 2</h5>
              <form>
                <div class="form-group">
                  <label for="fullName1">Nama Lengkap</label>
                  <input type="text" class="form-control" id="fullName2" placeholder="Nama Lengkap" value="Risma Sri Rahayu" readonly>
                </div>
                <div class="form-group">
                  <label for="NoKTP1">No. KTP</label>
                  <input type="text" class="form-control" id="NoKTP2" placeholder="No. KTP" value="357415160918878879" readonly>
                </div>
                <div class="form-group">
                  <label for="NoHP1">No. Handphone</label>
                  <input type="text" class="form-control" id="NoHP2" placeholder="+621234567890" value="+6285724321289" readonly>
                </div>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editJamaah">Edit</button>
              </form>
            </div>
          </div>

          <!--Modal Confirm Hapus-->
          <div class="modal" id="confirm2">
            <div class="modal-dialog">
              <div class="modal-content">
                
                <!--Modal Header-->
                <div class="modal-header">
                  <h5 class="modal-title">Hapus Calon Jamaah</h5>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!--End Modal Header-->
                <!--Modal Body-->
                <div class="modal-body">
                  <p>Apakah anda yakin ingin menghapus data calon jamaah tersebut?</p>
                </div>
                <!--End Modal Body-->
                <!--Modal Delete or Cancel Button-->
                <div class="modal-footer">
                  <button data-dismiss="modal" class="btn btn-danger col">Hapus</button>
                  <button data-dismiss="modal" class="btn btn-success">Batal</button>
                </div>
                <!--End Modal Delete or Cancel Button-->
              </div>
            </div>
          </div>
          <!--End Modal Confirm Hapus-->

          <!--End Calon Jamaah 2-->
          <!--Tambah Jamaah-->

          <div class="row m-0 mb-3">
            <div class="col-md-6">
              <button type="button" class="btn btn-success m-0" data-toggle="modal" data-target="#tambahJamaah"><i class="fas fa-plus"></i></button>
            </div>
            <div class="col-md-6 text-right">
              <a href="<?=base_url();?>pemesanan/konfirmasi" class="text-secondary">
                <button type="button" class="btn btn-success m-0">Selanjutnya</button>
              </a>
            </div>
          </div>
          <!--End Tambah Jamaah-->
        </div>

      </div>

    </div>

  </section>

  <!--End Pemesanan-->
  <!--Modal Tambah-->
  <div class="modal" id="tambahJamaah">
    <div class="modal-dialog">
      <div class="modal-content">
        
        <!--Modal Header-->
        <div class="modal-header">
          <h5 class="modal-title">Tambah Calon Jamaah</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!--End Modal Header-->
        <!--Modal Body-->
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="fullName1">Nama Lengkap</label>
              <input type="text" class="form-control" id="fullName2" placeholder="Nama Lengkap" value="">
            </div>
            <div class="form-group">
              <label for="NoKTP1">No. KTP</label>
              <input type="text" class="form-control" id="NoKTP2" placeholder="No. KTP" value="">
            </div>
            <div class="form-group">
              <label for="NoHP1">No. Handphone</label>
              <input type="text" class="form-control" id="NoHP2" placeholder="+62xx" value="">
            </div>
        </div>
        <!--End Modal Body-->
        <!--Modal Add Button-->
        <div class="modal-footer">
          <button type="submit" class="btn btn-success col">Tambah</button>
          </form>
        </div>
        <!--End Modal Add Button-->

      </div>
    </div>
  </div>
  <!--End Modal Tambah-->
  <!--Modal Edit User-->
  <div class="modal" id="editUserJamaah">
    <div class="modal-dialog">
      <div class="modal-content">
        
        <!--Modal Header-->
        <div class="modal-header">
          <h5 class="modal-title">Edit Calon Jamaah 1</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!--End Modal Header-->
        <!--Modal Body-->
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="fullName1">Nama Lengkap</label>
              <input type="text" class="form-control" id="fullName2" placeholder="Nama Lengkap" value="Naufal Rizaldi">
            </div>
            <div class="form-group">
              <label for="NoKTP1">No. KTP</label>
              <input type="text" class="form-control" id="NoKTP2" placeholder="No. KTP" value="357414130619970006">
            </div>
            <div class="form-group">
                  <label for="email">Alamat Email</label>
                  <input type="text" class="form-control" id="email" value="naufal.rizaldi@gmail.com">
                </div>
            <div class="form-group">
              <label for="NoHP1">No. Handphone</label>
              <input type="text" class="form-control" id="NoHP2" placeholder="+62xx" value="+6282112345678">
            </div>
        </div>
        <!--End Modal Body-->
        <!--Modal Add Button-->
        <div class="modal-footer">
          <button type="submit" class="btn btn-success col">Edit</button>
          </form>
        </div>
        <!--End Modal Add Button-->

      </div>
    </div>
  </div>
  <!--End Modal Edit User-->
  <!--Modal Edit Jamaah-->
  <div class="modal" id="editJamaah">
    <div class="modal-dialog">
      <div class="modal-content">
        
        <!--Modal Header-->
        <div class="modal-header">
          <h5 class="modal-title">Edit Calon Jamaah 2</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!--End Modal Header-->
        <!--Modal Body-->
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="fullName1">Nama Lengkap</label>
              <input type="text" class="form-control" id="fullName2" placeholder="Nama Lengkap" value="Risma Sri Rahayu">
            </div>
            <div class="form-group">
              <label for="NoKTP1">No. KTP</label>
              <input type="text" class="form-control" id="NoKTP2" placeholder="No. KTP" value="357415160918878879">
            </div>
            <div class="form-group">
              <label for="NoHP1">No. Handphone</label>
              <input type="text" class="form-control" id="NoHP2" placeholder="+62xx" value="+6285724321289">
            </div>
          
        </div>
        <!--End Modal Body-->
        <!--Modal Add Button-->
        <div class="modal-footer">
          <button type="submit" class="btn btn-success col">Edit</button>
          </form>
        </div>
        <!--End Modal Add Button-->

      </div>
    </div>
  </div>
  <!--End Modal Edit Jamaah-->
  
  <!-- Footer -->
  <?php $this->load->view('templates/footer.html'); ?>

  <!-- CDN Scripts -->
  <?php $this->load->view('templates/cdn_script.html'); ?>

  <!-- Custom scripts for all pages -->
  <script src="<?=base_url();?>assets/js/main.js"></script>
</body>
</html>