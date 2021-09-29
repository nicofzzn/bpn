@extends('Layout/index')
@section('container')


  <header class="header_area">
      <div class="main_menu">
         <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="/" ><img src="{{url('a/img/logo.png')}}" alt=""/></a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item ">
                  <a class="nav-link" href="/">Beranda</a>
                </li>

                  <li class="nav-item  active">
                  <a class="nav-link " href="/beritabpn">Berita Pertanahan</a>
                </li>
               <li class="nav-item submenu dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                     >Tentang Kami</a>
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
                      <a class="nav-link" href="/infolayanan" >Info Layanan</a >
                    </li>
                     <li class="nav-item ">
                  <a class="nav-link" href="/kontak">Kontak</a>
                </li>


              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>

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

    <!--================Blog Area =================-->
    <section class="blog_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">

                   <!-- Article start -->
                        <article >
                            <div class="col-md-12 ">
                                <div class="blog_post">
                                    <img class="img2" src="{{url('a/img/blog/main-blog/m-blog-1.jpg')}}" alt="">
                                    <div class="blog_details">

                                        <h2>Judul Berita</h2>
                                        <h6>Jember , 12 Oktober 2021</h6>
                                        <br>
                                        <p>     MCSE boot camps have its supporters and its detractors. Some people do not
                                            understand why you should have to spend money on boot camp when you can get
                                            the MCSE study materials yourself at a fraction.</p>
                                        <a href="/detailberitabpn" class="blog_btnx ">Lihat Berita</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <br>
                        <br>

                       <!-- Article End -->


                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <i class="ti-angle-left"></i>
                                        </span>
                                    </a>
                                </li>
                                <li class="page-item active"><a href="#" class="page-link">01</a></li>
                                <li class="page-item"><a href="#" class="page-link">02</a></li>
                                <li class="page-item"><a href="#" class="page-link">03</a></li>
                                <li class="page-item"><a href="#" class="page-link">04</a></li>
                                <li class="page-item"><a href="#" class="page-link">09</a></li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <span aria-hidden="true">
                                            <i class="ti-angle-right"></i>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cari Berita">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="ti-search"></i></button>
                                </span>
                            </div><!-- /input-group -->
                            <div class="br"></div>
                        </aside>

                          <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Pengumuman</h3>
                            @foreach ($berita as $item)
                                @if ($item->kategori == "pengumuman")
                                    <div class="media post_item">
                                        <img src="{{url('image/'.$item->gambar)}}" alt="post" width="100" height="60">
                                        <div class="media-body">
                                            <a href="/detailberitabpn/{{$item->id}}">
                                                <h3>{{ $item->headline }}</h3>
                                            </a>
                                            <p>{{ $item->tanggal }}</p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            <div class="br"></div>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Berita Pertanahan</h3>
                            @foreach ($berita as $item)
                                @if ($item->kategori == "berita pertahanan")
                                    <div class="media post_item">
                                        <img src="{{url('image/'.$item->gambar)}}" alt="post" width="100" height="60">
                                        <div class="media-body">
                                            <a href="/detailberitabpn/{{$item->id}}">
                                                <h3>{{ $item->headline }}</h3>
                                            </a>
                                            <p>{{ $item->tanggal }}</p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            <div class="br"></div>
                        </aside>
                         <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Sosialisasi</h3>
                            @foreach ($berita as $item)
                                @if ($item->kategori == "sosialisasi")
                                    <div class="media post_item">
                                        <img src="{{url('image/'.$item->gambar)}}" alt="post" width="100" height="60">
                                        <div class="media-body">
                                            <a href="/detailberitabpn/{{$item->id}}">
                                                <h3>{{ $item->headline }}</h3>
                                            </a>
                                            <p>{{ $item->tanggal }}</p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            <div class="br"></div>
                        </aside>


                    </div>
                </div>
            </div>
        </div>
    </section>



    @endsection
