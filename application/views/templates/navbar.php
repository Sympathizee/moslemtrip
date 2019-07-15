<html>
<body>
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light fixed-top border-bottom" id="mainNav">
        <div class="container">
            <button type="button" id="sidebarCollapse" class="btn mr-3">
                <i class="fas fa-bars text-secondary"></i>
            </button>

            <a class="navbar-brand text-green" href="<?=base_url()?>">
            <h4>My Trips</h4>
            </a>

            <button class="text-dark navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-chevron-down"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <a class="nav-link text-secondary" href="#">
                    <i class="fas fa-percentage mr-3"></i>PROMO
                </a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link text-secondary dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-compass mr-3"></i>LAYANAN
                </a>
                <div class="dropdown-menu text-uppercase" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?=base_url('haji')?>">Haji</a>
                    <a class="dropdown-item" href="#">Umroh</a>
                    <a class="dropdown-item" href="#">Wisata Halal</a>
                    <a class="dropdown-item" href="#">Panduan Manasik</a>
                    <a class="dropdown-item" href="#">Oleh-oleh</a>
                    <a class="dropdown-item" href="#">Dokumentasi</a>
                </div>
                </li>
                <li class="nav-item">
                <a class="nav-link text-secondary" href="#">
                    <i class="far fa-heart mr-3"></i>FAVORIT
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-secondary" href="<?=base_url('pesanan')?>">
                    <i class="far fa-clipboard mr-3"></i>PESANAN
                </a>
                </li>
                <li class="nav-item dropdown">

                <a class="nav-link text-secondary dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-user mr-3"></i>Myusuf
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#" >Poin <span class="badge badge-warning float-right">100</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Profil</a>
                    <a class="dropdown-item" href="#">Tagihan</a>
                    <a class="dropdown-item" href="#">Pembayaran</a>
                    <a class="dropdown-item" href="#">Pengaturan</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="#">Keluar</a>
                </div>
                </li>
            </ul>
            </div>

        </div>
    </nav>
</body>
</html>
