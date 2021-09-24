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

                  <li class="nav-item active">
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
                  <a class="nav-link" href="">Kontak</a>
                </li>

              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12 ">
                            <div class="feature-img">
                                <img class="img-fluid" src="{{url('a/img/blog/feature-img1.jpg')}}" alt="">
                            </div>
                        </div>
                        
                        <div class="col-lg-12 blog_details">
                            <h2>Astronomy Binoculars A Great Alternative Alternative</h2>
                            <p class="quotes">
                              MCSE boot camps have its supporters and its detractors. Some people do not understand
                                why you should have to spend money on boot camp when you can get the MCSE study
                                materials yourself at a fraction of the camp price. However, who has the willpower to
                                actually sit through a self-imposed MCSE training.
                              ( HeadLine )
                            </p>
                           
                        </div>
                        <div class="col-lg-12">

                            <div class="quotes">
                                MCSE boot camps have its supporters and its detractors. Some people do not understand
                                why you should have to spend money on boot camp when you can get the MCSE study
                                materials yourself at a fraction of the camp price. However, who has the willpower to
                                actually sit through a self-imposed MCSE training.
                                 MCSE boot camps have its supporters and its detractors. Some people do not
                                understand why you should have to spend money on boot camp when you can get the
                                 MCSE study materials yourself at a fraction of the camp price. However, who has
                                 the willpower.
                                  MCSE boot camps have its supporters and its detractors. Some people do not understand
                                why you should have to spend money on boot camp when you can get the MCSE study
                                materials yourself at a fraction of the camp price. However, who has the willpower to
                                actually sit through a self-imposed MCSE training.
                                 MCSE boot camps have its supporters and its detractors. Some people do not
                                understand why you should have to spend money on boot camp when you can get the
                                 MCSE study materials yourself at a fraction of the camp price. However, who has
                                 the willpower.
                                  MCSE boot camps have its supporters and its detractors. Some people do not understand
                                why you should have to spend money on boot camp when you can get the MCSE study
                                materials yourself at a fraction of the camp price. However, who has the willpower to
                                actually sit through a self-imposed MCSE training.
                                 MCSE boot camps have its supporters and its detractors. Some people do not
                                understand why you should have to spend money on boot camp when you can get the
                                 MCSE study materials yourself at a fraction of the camp price. However, who has
                                 the willpower.
                            </div>
                        </div>

                        
                    </div>
                    
                       <div class="col-md-12 text-center">
                  <br>
                  <a href="/beritabpn" class="primary-btnx">Kembali</a>
                </div>
                 
                </div>
                   

               <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        

                          <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Pengumuman</h3>
                            <div class="media post_item">
                                <img src="{{url('a/img/blog/popular-post/post1.jpg')}}" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>Space The Final Frontier</h3>
                                    </a>
                                    <p>08 September 2021</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{url('a/img/blog/popular-post/post2.jpg')}}" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>The Amazing Hubble</h3>
                                    </a>
                                    <p>08 September 2021</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{url('a/img/blog/popular-post/post3.jpg')}}" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>Astronomy Or Astrology</h3>
                                    </a>
                                    <p>08 September 2021</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{url('a/img/blog/popular-post/post4.jpg')}}" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>Asteroids telescope</h3>
                                    </a>
                                    <p>08 September 2021</p>
                                </div>
                            </div>
                            <div class="br"></div>
                        </aside>
                        
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Berita Terbaru</h3>
                            <div class="media post_item">
                                <img src="{{url('a/img/blog/popular-post/post1.jpg')}}" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>Space The Final Frontier</h3>
                                    </a>
                                    <p>08 September 2021</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{url('a/img/blog/popular-post/post2.jpg')}}" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>The Amazing Hubble</h3>
                                    </a>
                                    <p>08 September 2021</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{url('a/img/blog/popular-post/post3.jpg')}}" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>Astronomy Or Astrology</h3>
                                    </a>
                                    <p>08 September 2021</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{url('a/img/blog/popular-post/post4.jpg')}}" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>Asteroids telescope</h3>
                                    </a>
                                    <p>08 September 2021</p>
                                </div>
                            </div>
                            <div class="br"></div>
                        </aside>
                       <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Sosialisasi</h3>
                            <div class="media post_item">
                                <img src="{{url('a/img/blog/popular-post/post1.jpg')}}" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>Space The Final Frontier</h3>
                                    </a>
                                    <p>08 September 2021</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{url('a/img/blog/popular-post/post2.jpg')}}" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>The Amazing Hubble</h3>
                                    </a>
                                    <p>08 September 2021</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{url('a/img/blog/popular-post/post3.jpg')}}" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>Astronomy Or Astrology</h3>
                                    </a>
                                    <p>08 September 2021</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{url('a/img/blog/popular-post/post4.jpg')}}" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>Asteroids telescope</h3>
                                    </a>
                                    <p>08 September 2021</p>
                                </div>
                            </div>
                           
                        </aside>
                        
                        
                        </div>
                    </div>

            </div>
        </div>
    </section>

   



  @endsection