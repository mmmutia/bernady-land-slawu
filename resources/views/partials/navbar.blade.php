 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <!-- <h1 class="text-light"><a href="index.php"><span>Moderna</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.php"><img src="img/logo-bernady.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
                  <ul>
                  <li><a href="/">Beranda</a></li>
                  <li><a href="/about">Tentang</a></li>
                  <li><a href="/services">Layanan</a></li>
                  <li><a href="/portofolio">Cluster</a></li>
                  <li><a href="/team">Tim</a></li>
                  <li><a href="/contact">Kontak</a></li>

          @if (auth()->user() != null)
          <div class='dropdown' style='margin-right:60px;'><a href='#'>
          <a href='#' style='text-decoration: none; color: white;'>
            <img src='img/logo_orang.png' alt='Logo Orang' style='width: 35px; height: 35px; margin-right: 15px; display: inline-block;'>
            <span style='font-size: 14px; display: inline-block;'>{{auth()->user()->name}}</span>
          </a>
          <ul>
            <li> <a href='/profil'>Profil</a></li>
            <li> <a href='/riwayat-pemesanan'>Pemesanan Rumah</a></li>
            <li> <a href='/pembayaran-user'>Pembayaran</a></li>
            <li> <a href='/progres'>Progres</a></li>
            <li> <a href='/cluster-tersimpan'>Cluster Tersimpan</a></li>
            <li data-bs-toggle='modal' data-bs-target='#modalLogout'> <a href='javascript:void(0)'>Logout</a></li>
          </ul>
        </div>
        @else
        <li><a href="/login">Login</a></li>
        @endif
    </ul>
         <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
