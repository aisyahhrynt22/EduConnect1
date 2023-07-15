<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required Meta Tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>PMB - Universitas Al Azhar Indonesia</title>

  <!--Core CSS -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link href="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://penerimaan.uai.ac.id/file/template/bulkit/css/app.css">
  <link rel="stylesheet" href="https://penerimaan.uai.ac.id/file/template/bulkit/css/blue.css">
  <link rel="icon" href="https://uai.ac.id/wp-content/uploads/2019/07/Logouai-icon.png" sizes="32x32">
  <link rel="shortcut icon" href="https://uai.ac.id/wp-content/uploads/2019/07/Logouai-icon.png">
</head>

<style>
  @media only screen and (max-width: 1024px) {

    .navbar-item,
    .navbar-link {
      color: #fff;
      font-size: 15px;
    }

    .navbar .navbar-menu .mobile-drop .mobile-drop-trigger {
      color: #fff;
      font-size: 15px;
      font-family: "Roboto", sans-serif;
    }

    .navbar .navbar-menu .mobile-drop .child-menu ul li a {
      color: #fff;
      font-size: 15px;
      font-family: "Roboto", sans-serif;
    }

  }


  @media (min-width: 1000px) {
    .linkdaftar {
      display: none;
    }
  }
</style>

<body class="is-theme-core">
  <!-- <div class="pageloader"></div>
    <div class="infraloader is-active"></div>     -->
  <div class="
        hero
        product-hero
        is-fullheight is-app-grey is-relative
        has-shape-layer-2" data-page-theme="night">
    <!-- <nav class="navbar navbar-wrapper navbar-default navbar-fade is-transparent"> -->
    <nav class="navbar navbar-wrapper navbar-default navbar-fade navbar-faded" style="background: #fff;">
      <!-- <div class="container"> -->
      <!-- Brand -->
      <div class="navbar-brand">
        <img class="switcher-logo" src="https://penerimaan.uai.ac.id/file/images/logo-uai.png" alt="" style="height: 60px;width: 170px; max-height:none;">

        <!-- Responsive toggle -->
        <div class="custom-burger" data-target="">
          <a id="" class="responsive-btn" href="javascript:void(0);">
            <span class="menu-toggle">
              <span class="icon-box-toggle">
                <span class="rotate">
                  <i class="icon-line-top"></i>
                  <i class="icon-line-center"></i>
                  <i class="icon-line-bottom"></i>
                </span>
              </span>
            </span>
          </a>
        </div>
        <!-- /Responsive toggle -->
      </div>

      <!-- Navbar menu -->
      <div class="navbar-menu">
        <!-- Navbar Start -->
        <div class="navbar-start">
          <!-- Navbar item -->
          <a class="navbar-item is-slide" href="https://penerimaan.uai.ac.id/">
            <b>Beranda</b>
          </a>
          <!-- Navbar item -->
          <a class="navbar-item is-slide" href="https://sip.uai.ac.id/" target="_blank">
            <b>Layanan Psikologi</b>
          </a>
          <!-- Dropdown -->
          <div class="navbar-item has-dropdown is-hoverable is-hidden-mobile">
            <div class="navbar-link">
              <b>Informasi PMB</b>
            </div>
            <div class="navbar-dropdown is-megamenu animated prefadeInUp fadeInUp" data-style="width: 18rem;">
              <div class="mega-inner">
                <div class="container">
                  <a class="navbar-item is-flex" href="https://penerimaan.uai.ac.id/home/BiayaKuliah">
                    <i data-feather="book-open"></i>
                    <div class="navbar-content">
                      <p>Biaya Kuliah</p>
                    </div>
                  </a>
                  <a class="navbar-item is-flex" href="https://penerimaan.uai.ac.id/assets/img/BUKU_PEDOMAN_DAN_PROSEDUR_2023_NEW.pdf">
                    <i data-feather="book-open"></i>
                    <div class="navbar-content">
                      <p>Buku Pedoman dan Jalur Masuk</p>
                    </div>
                  </a>
                  <a class="navbar-item is-flex" href="https://penerimaan.uai.ac.id/home/PengumumanKelulusan">
                    <i data-feather="book-open"></i>
                    <div class="navbar-content">
                      <p>Pengumuman Kelulusan Beasiswa</p>
                    </div>
                  </a>

                </div>
              </div>
            </div>
          </div>

          <!-- Mobile dropdown -->
          <div class="mobile-drop is-hidden-desktop">
            <div class="mobile-drop-trigger">
              Informasi PMB <i class="material-icons">keyboard_arrow_right></i>
            </div>
            <div class="child-menu">
              <ul>
                <li>
                  <a href="https://penerimaan.uai.ac.id/home/BiayaKuliah">Biaya Kuliah</a>
                </li>
                <li>
                  <a href="https://penerimaan.uai.ac.id/assets/img/BUKU_PEDOMAN_DAN_PROSEDUR_2023_NEW.pdf">Buku Pedoman dan Jalur Masuk</a>
                </li>
                <li>
                  <a href="https://penerimaan.uai.ac.id/home/PengumumanKelulusan">Pengumuman Kelulusan Beasiswa</a>
                </li>
              </ul>
            </div>
          </div>

          <!-- Dropdown -->
          <div class="navbar-item has-dropdown is-hoverable is-hidden-mobile">
            <div class="navbar-link">
              <b>Program Study</b>
            </div>
            <div class="navbar-dropdown is-megamenu animated prefadeInUp fadeInUp" data-style="width: 18rem;">
              <div class="mega-inner">
                <div class="container">
                  <a class="navbar-item is-flex" href="https://penerimaan.uai.ac.id/home/Brosur">
                    <i data-feather="book-open"></i>
                    <div class="navbar-content">
                      <p>Brosur Program Study</p>
                    </div>
                  </a>
                  <a class="navbar-item is-flex" href="https://penerimaan.uai.ac.id/home/Prodi">
                    <i data-feather="book-open"></i>
                    <div class="navbar-content">
                      <p>Video Program Study</p>
                    </div>
                  </a>

                </div>
              </div>
            </div>
          </div>

          <!-- Mobile dropdown -->
          <div class="mobile-drop is-hidden-desktop">
            <div class="mobile-drop-trigger">
              Program Study <i class="material-icons">keyboard_arrow_right</i>
            </div>
            <div class="child-menu">
              <ul>
                <li>
                  <a href="https://penerimaan.uai.ac.id/home/Brosur">Brosur Program Study</a>
                </li>
                <li>
                  <a href="https://penerimaan.uai.ac.id/home/Prodi">Video Program Study</a>
                </li>
              </ul>
            </div>
          </div>

          <!-- Mobile dropdown -->
          <div class="mobile-drop is-hidden-desktop">
            <div class="mobile-drop-trigger">
              Program Kuliah <i class="material-icons">keyboard_arrow_right</i>
            </div>
            <div class="child-menu">
              <ul>
                <li>
                  <a href="https://penerimaan.uai.ac.id/home/programS1">Program S1 Kelas Reguler</a>
                </li>
                <li>
                  <a href="https://penerimaan.uai.ac.id/home/KelasKaryawan">Program S1 Kelas Karyawan</a>
                </li>
                <li>
                  <a href="https://penerimaan.uai.ac.id/home/KelasAlihJenjangD3">Program S1 Kelas Alih Jenjang D3</a>
                </li>
                <li>
                  <a href="https://penerimaan.uai.ac.id/home/programS2">Program S2 Kelas Magister</a>
                </li>
              </ul>
            </div>
          </div>

        </div>

        <!-- Navbar end -->
        <div class="navbar-end">

          <!-- Dropdown -->
          {{-- <a href="{{ route('login') }}" class="navbar-item is-slide"><b>MGM</b></a> <!-- register Agen --> --}}
          <a href="agen/login" class="navbar-item is-slide"><b>MGM</b></a> <!-- register Agen -->

          <a class="navbar-item is-slide" href="/" target="_blank">
            <b>Pendaftaran</b>
          </a>

          <!-- Dropdown -->
          <a class="navbar-item is-slide" href="/" target="_blank">
            <b>Program Kuliah</b>
          </a>

          <!-- Signup button -->
          <div class=" navbar-item is-button is-centered-tablet">
                          <a id="#signup-btn" href="/calon_mhs/login" class="button button-cta is-bold btn-align primary-btn raised is-rounded">
                <b>Login</b>
              </a>
              <div class="linkdaftar">

                <div class="column" style="padding: .20rem;">
                  <a href="https://penerimaan.uai.ac.id/home/registrasiS1" class="button button-cta is-bold primary-btn rounded">
                    Daftar S1 Kelas Reguler
                  </a>
                </div>
                <!-- <div class="column" style="padding: .20rem;">
                                <a
                                href="https://pmbonline.uai.ac.id" target="_blank"
                                  class="button button-cta is-bold primary-btn rounded">
                                  Daftar S1 Reguler
                                </a>
                            </div> -->
                <div class="column" style="padding: .20rem;">
                  <a href="https://penerimaan.uai.ac.id/home/registrasiS2" class="button button-cta is-bold primary-btn rounded">
                    Daftar S2 Kelas Magister
                  </a>
                </div>

                <div class="column" style="padding: .20rem;">
                  <a href="https://penerimaan.uai.ac.id/home/registrasiKelasKaryawan" class="button button-cta is-bold primary-btn rounded">
                    Daftar S1 Kelas Karyawan
                  </a>
                </div>
                <div class="column" style="padding: .20rem;">
                  <a href="https://penerimaan.uai.ac.id/home/AlihJenjang" class="button button-cta is-bold primary-btn rounded">
                    Daftar S1 Kelas Alih Jenjang D3
                  </a>
                </div>

              </div>
            
          </div>
        </div>
      </div>
      <!-- </div> -->
    </nav>


    <style>
  @media (min-width: 800px) {
    .Wallop--v2 .caption-inner {
      margin-bottom: 120px;
    }
  }

  @media (max-width: 550px) {
    .action {
      display: none;
    }
  }

  @media (max-width: 1024px) {
    .faq {
      top: -80px;
      bottom: unset;
    }

    .intro-vid {
      top: -80px;
      bottom: unset;
    }

  }

  .faq {
    bottom: 270px;
  }

  .intro-vid {
    bottom: 160px;
  }
</style>

<!-- Hero Wallop Slider -->
<div class="Wallop Wallop--v2 Wallop--fade">
  <div class="Wallop-list">
    
      <div class="Wallop-item has-background-image" data-background="https://penerimaan.uai.ac.id/assets/img/Gelombang3_WebBanner.jpg" style=" background-repeat: no-repeat;background-size: 100%;height: 75vw;">
        <div class="Wallop-overlay"></div>
        <div class="Wallop-caption-wrapper">
          <div class="container">
            <div class="columns is-gapless is-vcentered">
              <div class="row">
                <div class="column is-12" style="display: flex;">

                  <div class="caption-inner">
                                        <div class="action">
                      <div class="columns">
                                                                                              </div>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>
      </div>


    
      <div class="Wallop-item has-background-image" data-background="https://penerimaan.uai.ac.id/assets/img/back07-min.jpg" style=" background-repeat: no-repeat;background-size: 100%;height: 75vw;">
        <div class="Wallop-overlay"></div>
        <div class="Wallop-caption-wrapper">
          <div class="container">
            <div class="columns is-gapless is-vcentered">
              <div class="row">
                <div class="column is-12" style="display: flex;">

                  <div class="caption-inner">
                                        <div class="action">
                      <div class="columns">
                                                                                              </div>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>
      </div>


    

  </div>
  <!-- Pagination dots -->
  <div class="Wallop-pagination" style="top: calc(0% - 27px);">
    
    <!-- Navigation arrows -->
    <button class="Wallop-buttonPrevious is-hidden-mobile" style="background:#4668ab;border-radius: 50%;">
      <i data-feather="arrow-left"><-</i>
    </button>
    <button class="Wallop-buttonNext is-hidden-mobile" style="background:#4668ab;border-radius: 50%;">
      <i data-feather="arrow-right">-></i>
    </button>

  </div>

</div>



<div class="section" id="tentang" style="bottom: 90px;">
  <!--Squares-->
  <!-- <div class="square square-4"></div> -->
  <!-- <div class="square square-5"></div> -->
  <div class="square square-6"></div>
  <div class="square square-7"></div>

  <div class="container">
    <div class="centered-title" id="program">
      <h2 class="has-text-centered">Kampus bernuansa Islam, di jantung Jakarta</h2>
      <div class="title-divider is-centered"></div><br>
      <span>
        Segera Daftarkan diri Anda sebagai Mahasiswa/i Universitas Al Azhar Indonesia agar dapat meraih cita-cita gemilang!
      </span>
    </div>
    <div class="content-wrapper">
      <div class="columns">
        <div class="column is-12 is-vcentered">
          <div style="width: 800px; height: 500px; float: none; clear: both; margin: 2px auto;">
            <embed src="https://www.youtube.com/embed/wILMXImHbMg?autohide=1&autoplay=1" wmode="transparent" type="video/mp4" width="100%" height="100%" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen title="Tur Kampus UAI 2021">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<section id="card-testimonials" class="section parallax is-relative is-medium" data-background="" data-color="#000" data-color-opacity="0.0">
  <div class="square square-4" style="top: -20px;"></div>
  <div class="square square-6"></div>
  <div class="square square-3"></div>
  <div class="square square-7"></div>
  <div class="container intro-vid">
    <!-- Title -->
    <div class="centered-title" id="program">
      <h2 class="has-text-centered">Kuliah di UAI</h2>
      <div class="title-divider is-centered"></div><br>
    </div>

    <div class="content-wrapper">
      <div class="columns is-vcentered">
        <div class="column"></div>
        <div class="column is-10">
          <!-- Testimonials -->
          <div class="columns is-vcentered">
            <div class="column is-6">
              <!-- Testimonial item -->
              <a href="https://penerimaan.uai.ac.id/home/programS1">
                <div class="flex-card testimonial-card light-bordered light-raised padding-20">
                  <div class="testimonial-title">Program S1 Kelas Reguler</div>
                  <div class="testimonial-text">
                    Diperuntukkan bagi lulusan SMU atau sederajat yang bercita-cita meraih gelar sarjana sesuai bidang keilmuan yang diminati. Metode belajar dilaksanakan secara tatap muka.
                  </div>
                </div>
              </a>

              <a href="https://penerimaan.uai.ac.id/home/programS2">
                <div class="flex-card testimonial-card light-bordered light-raised padding-20">
                  <div class="testimonial-title">Program S2 Kelas Magister</div>
                  <div class="testimonial-text">
                    Diperuntukkan bagi sarjana yang ingin meraih gelar magister. Saat ini, UAI membuka program studi Magister Ilmu Hukum dan Magister Ilmu Komunikasi bagi para sarjana yang ingin belajar ilmu hukum serta ilmu komunikasi, sebagai salah satu pendekatan dalam merespon berbagai permasalahan yang terjadi saat ini. Metode kuliah dilaksanakan secara tatap muka.
                  </div>
                </div>
              </a>
            </div>
            <div class="column is-6">
              <!-- Testimonial item -->
              <a href="https://penerimaan.uai.ac.id/home/KelasKaryawan">
                <div class="flex-card testimonial-card light-bordered light-raised padding-20">
                  <div class="testimonial-title">Program S1 Kelas Karyawan</div>
                  <div class="testimonial-text">
                    Perkuliahan di kelas karyawan dilaksanakan dengan metode Hybrid learning. Yakni memadukan pertemuan tatap muka dengan pertemuan online. Dengan metode ini, mahasiswa dapat belajar dengan maksimal tanpa mengganggu waktu bekerja mereka.
                  </div>
                </div>
              </a>

              <a href="https://penerimaan.uai.ac.id/home/KelasAlihJenjangD3">
                <div class="flex-card testimonial-card light-bordered light-raised padding-20">
                  <div class="testimonial-title">Program S1 Kelas Alih Jenjang D3</div>
                  <div class="testimonial-text">
                    Diperuntukan bagi Lulusan D3 yang ingin melanjutkan pendidikan ke S1. Metode belajar memadukan pertemuan tatap muka dan pertemuan online.
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="column"></div>
      </div>
    </div>
  </div>
</section>

<div class="section" id="faq">
  <div class="container faq">
    <div class="section-title has-text-centered">
      <h2 class="title is-2">Frequently Asked Questions</h2>
      <div class="title-divider is-centered"></div><br>
    </div>

    <div class="faq-wrapper">
      <div class="columns">
        <div class="column is-5 is-offset-1">
          <!--Faq Block-->
          <div class="faq-block">
            <div class="block-header">
              <div class="header-icon">
                <i class="fa fa-plus"></i>
              </div>
              <h3>Bagaimana mendaftar secara online?</h3>
            </div>
            <div class="block-body">
              <p>
                <!-- Mengikuti alur pendaftaran klik <a href="https://penerimaan.uai.ac.id/home/registrasi">disini</a> -->
                <li>Silakan pilih tombol diatas sesuai dengan jenjang yg diinginkan</li>
                <li>lalu anda akan diarahkan untuk mengisi form pendaftaran, pastikan anda mengisi dengan benar</li>
              </p>
            </div>
          </div>
          <!--Faq Block-->
          <div class="faq-block">
            <div class="block-header">
              <div class="header-icon">
                <i class="fa fa-plus"></i>
              </div>
              <h3>
                Saya tidak dapat login
              </h3>
            </div>
            <div class="block-body">
              <p>
                <li>Pastikan email dan password yang Anda masukkan benar.</li>
                <li>Perhatikan huruf besar dan kecil berpengaruh di password Anda.</li>
              </p>
            </div>
          </div>

          <!--Faq Block-->
          <div class="faq-block">
            <div class="block-header">
              <div class="header-icon">
                <i class="fa fa-plus"></i>
              </div>
              <h3>Saya kesulitan dalam meng-upload Foto dan dokumen lainnya.</h3>
            </div>
            <div class="block-body">
              <p>
                <li>Tipe File yang diperbolehkan yaitu JPG/JPEG(untuk foto) & Tipe File yang diperbolehkan yaitu PDF (untuk dokumen)</li>
                <li>Ukuran file maksimal 500KB (untuk foto).</li>
                <li>Ukuran file maksimal 5MB (untuk dokumen).</li>
              </p>
            </div>
          </div>
        </div>
        <div class="column is-5">
          <!--Faq Block-->
          <div class="faq-block">
            <div class="block-header">
              <div class="header-icon">
                <i class="fa fa-plus"></i>
              </div>
              <h3>Apa yang dilakukan jika saya lupa password?</h3>
            </div>
            <div class="block-body">
              <p>
                Jika Anda lupa password, silahkan klik <a href="https://penerimaan.uai.ac.id/login/lupa_password">disini</a>
              </p>
            </div>
          </div>

          <!--Faq Block-->
                    <!--Faq Block-->
          <div class="faq-block">
            <div class="block-header">
              <div class="header-icon">
                <i class="fa fa-plus"></i>
              </div>
              <h3>
                Masalah saya tidak ada di FAQ
              </h3>
            </div>
            <div class="block-body">
              <p>
                Bila masalah Anda tidak ada di FAQ kami, silakan hubungi kami di

                Penerimaan Mahasiswa Baru UAI
                Universitas Al Azhar Indonesia Komplek Masjid Agung Al Azhar Jakarta 12110 </br>
                Telp: (021) 727 92753 </br>
                Fax: (021) 724 4767 </br>
                E-Mail: pmb@uai.ac.id
              </p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>


    <!-- Footer -->
    <footer class="footer-light-medium">
      <div class="container">
        <!-- <div class="footer-head">
      </div>   -->
        <div class="columns footer-body">
          <!-- Column -->
          <div class="column is-4">
            <img src="https://penerimaan.uai.ac.id/file/images/logo-uai.png" alt="Logo UAI" width="200">
            <div class="footer-description">
              <p>Universitas Al Azhar Indonesia<br />
                Komplek Masjid Agung Al Azhar<br />
                Jl. Sisingamangaraja, Kebayoran Baru<br />
                Jakarta Selatan 12110<br />
              </p>
              <hr>
              <h2><b>Hubungi Kami</b></h2>
              <p><i class="fa fa-envelope"></i> pmb@uai.ac.id</p>
              <i class="fa fa-whatsapp"></i> <a href="https://wa.me/6281294275930">+62 812-9427-5930</a><br>
              <i class="fa fa-phone"></i> 021 726 7272 <br> &nbsp;&nbsp;&nbsp; 021 726 3344
            </div>
            <div class="social-links" style="margin-left: -10px; margin-top: -10px;">
              <a href="https://www.facebook.com/Daftar.UAI?_rdc=1&_rdr">
                <span class="icon"><i class="fa fa-facebook"></i></span>
              </a>
              <a href="https://twitter.com/YukDaftarUAI">
                <span class="icon"><i class="fa fa-twitter"></i></span>
              </a>
              <a href="https://instagram.com/daftaruai?igshid=YmMyMTA2M2Y=">
                <span class="icon"><i class="fa fa-instagram"></i></span>
              </a>
              <a href="https://www.youtube.com/channel/UCvLfMFYxIeppJsf2Zggh5Pw">
                <span class="icon"><i class="fa fa-youtube"></i></span>
              </a>
            </div>

          </div>
          <!-- Column -->
          <div class="column is-8 is-offset-2">
            <div class="columns">
              <!-- Column -->
              <div class="column is-2">
                <ul class="footer-column">
                  <li class="column-header">
                    PMB UAI
                  </li>
                  <li class="column-item"><a href="https://penerimaan.uai.ac.id/">Home</a></li>
                  <li class="column-item"><a href="https://penerimaan.uai.ac.id/home/BiayaKuliah">Biaya Kuliah</a></li>
                  <li class="column-item"><a href="https://penerimaan.uai.ac.id/assets/img/BUKU_PEDOMAN_DAN_PROSEDUR_2023_NEW.pdf" target="_blank">Buku Pedoman dan Jalur Masuk</a></li>
                  <li class="column-item"><a href="https://penerimaan.uai.ac.id/home/Brosur">Brosur</a></li>
                  <li class="column-item"><a href="https://penerimaan.uai.ac.id/home/#program">Program</a></li>
                  <li class="column-item"><a href="https://penerimaan.uai.ac.id/home/#faq">FAQ</a></li>
                </ul>
              </div>
              <!-- Column -->
              <div class="column">
                <ul class="footer-column">
                  <li class="column-header">
                    Fakultas
                  </li>
                  <li class="column-item"><a href="https://fst.uai.ac.id" target="_blank">Fakultas Sains dan Teknologi</a></li>
                  <li class="column-item"><a href="https://fe.uai.ac.id" target="_blank">Fakultas Ekonomi dan Bisnis</a></li>
                  <li class="column-item"><a href="https://fib.uai.ac.id" target="_blank">Fakultas Ilmu Pengetahuan Budaya</a></li>
                  <li class="column-item"><a href="https://fpp.uai.ac.id" target="_blank">Fakultas Psikologi dan Pendidikan</a></li>
                  <li class="column-item"><a href="https://fh.uai.ac.id" target="_blank">Fakultas Hukum</a></li>
                  <li class="column-item"><a href="https://fisip.uai.ac.id" target="_blank">Fakultas Ilmu Sosial dan Ilmu Politik</a></li>
                </ul>
              </div>
              <!-- Column -->
                          </div>
          </div>
        </div>
        <div class="footer-copyright has-text-centered">
          <p>&copy; 2021 - 2023 | <a href="https://uai.ac.id" target="_blank">Universitas Al Azhar Indonesia</a> | All Rights
            Reserved.</p>
        </div>
      </div>
    </footer>

    <script src="https://penerimaan.uai.ac.id/file/template/bulkit/js/app.js"></script>
    <script src="https://penerimaan.uai.ac.id/file/template/bulkit/js/core.js"></script>
        <script>
      $(document).ready(function() {

        // $(window).scroll(function() {
        //     if ($(document).scrollTop() < 50) {

        //       
        //         $('.navbar-item').css({"color": "#fff"});
        //         $('.navbar-link').css({"color": "#fff"});
        //         $('.navbar-content').css({"color": "black"});

        //        


        //     }else if ($(document).scrollTop() > 50) {
        //       $('.navbar-item').css({"color": "black"});
        //       $('.navbar-link').css({"color": "black"});
        //       $('.navbar-content').css({"color": "black"});

        //     }
        //   });

      });
    </script>
</body>

</html>