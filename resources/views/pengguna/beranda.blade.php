@extends('Layout/index')
@section('container')



<header class="header_area">
  <div class="main_menu">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a class="navbar-brand logo_h" href="/"><img src="{{url('a/img/logo.png')}}" alt="" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar"></span> <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
          <ul class="nav navbar-nav menu_nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Beranda</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/beritabpn">Berita Pertanahan</a>
            </li>
            <li class="nav-item submenu dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                aria-expanded="false">Tentang Kami</a>
              <ul class="dropdown-menu">
                <li class="nav-item">
                  <a class="nav-link" href="">Profil BPN Jember</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="">Visi & Misi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="">Struktur Organisasi</a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/infolayanan">Info Layanan</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="/kontak">Kontak</a>
            </li>
            @auth
            <li class="nav-item ">
              <a class="nav-link" href="/logout">Logout</a>
            </li>
            @endauth

          </ul>
        </div>
      </div>
    </nav>
  </div>
</header>
<!--================ End Header Menu Area =================-->

<!--================ Start Home Banner Area =================-->
<section class="home_banner_area">
  <div class="banner_inner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="banner_content text-center">
            <p class="text-uppercase">
              Best online education service In the world
            </p>
            <h2 class="text-uppercase mt-4 mb-5">
              One Step Ahead This Season
            </h2>
            <div>
              <a href="#" class="primary-btn2 mb-3 mb-sm-0">learn more</a>
              <a href="#" class="primary-btn ml-sm-3 ml-0">see course</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================ End Home Banner Area =================-->

<!--================ Start Feature Area =================-->

<section class="feature_area section_gap_top ">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5">
        <div class="main_title">
          <h2 class="mb-3">Berita Pertanahan</h2>
          <p>
            Replenish man have thing gathering lights yielding shall you
          </p>
        </div>
      </div>
    </div>

    <div class="col-lg-12">
      <div class="owl-carousel active_course">
        <div class="single_course">
          <div class="course_head">
            <img class="img-fluid" src="{{url('a/img/courses/c3.jpg')}}" alt="" />
          </div>
          <div class="course_content">

            <span class="tag mb-4 d-inline-block">Kategori</span>
            <h4 class="mb-3">
              <a href="course-details.html">Judul Berita</a>
            </h4>
            <p>

              headline + substr

            </p>
            <div
              class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
              <div class="authr_meta">

                <span class="d-inline-block ml-2">Jember , 18 September 2020</span>
              </div>
              <div class="mt-lg-0 mt-3">

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
  </div>
</section>




<!--================ End Trainers Area =================-->

<!--================ Start Events Area =================-->

</div>
</div>
</div>
</div>






@endsection