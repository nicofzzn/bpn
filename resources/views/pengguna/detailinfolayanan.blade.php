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
              id="navbarSupportedContent" >
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item ">
                  <a class="nav-link" href="/">Beranda</a>
                </li>

                 <li class="nav-item">
                  <a class="nav-link" href="/beritabpn">Berita Pertanahan</a>
                </li>
                <li class="nav-item submenu dropdown">
                  <a
                    href=""
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
				
               	 <li class="nav-item active">
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


    


     <section class="course_details_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 course_details_left">
                   
                    <div class="content_wrapper">
                        <h4 class="title2">Objectives</h4>
                        <div class="content">
                            When you enter into any new area of science, you almost always find yourself with a
                            baffling new language of
                            technical terms to learn before you can converse with the experts. This is certainly
                            true in astronomy both in
                            terms of terms that refer to the cosmos and terms that describe the tools of the trade,
                            the most prevalent
                            being the telescope.
                          
                            
                        </div>


                
                    </div>
                </div>
            </div>
        </div>
    </section>




      @endsection