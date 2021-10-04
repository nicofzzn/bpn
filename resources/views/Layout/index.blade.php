<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="{{url('a/img/favicon.png')}}" type="image/png" />
    <title>Edustage Education</title>

    <!-- Latest compiled and minified CSS CDN -->
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<link href='//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'/>
 

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('a/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{url('a/css/flaticon.css')}}" />
    <link rel="stylesheet" href="{{url('a/css/themify-icons.css')}}" />
    <link rel="stylesheet" href="{{url('a/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{url('a/vendors/nice-select/css/nice-select.css')}}" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <!-- main css -->
    <link rel="stylesheet" href="{{url('a/css/style.css')}}" />
    <!-- Ftco Page spinner loader -->
  
  </head>
  <body>

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
              <li class="nav-item {{ Request::path() === '/' ? 'active' : '' }}">
                <a class="nav-link" href="/">Beranda</a>
              </li>

              <li class="nav-item {{ Request::path() === 'berita' ? 'active' : '' }}">
                <a class="nav-link" href="/berita">Berita Pertanahan</a>
              </li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Tentang Kami</a>
                <ul class="dropdown-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="/profil">Profil BPN Jember</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/visimisi">Visi & Misi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/struktur">Struktur Organisasi</a>
                  </li>
                </ul>
              </li>
            

            @if(Request::path() === 'layanan')
                <li class="nav-item active ">
                <a class="nav-link " href="/layanan">Info Layanan</a>
              </li>
            @elseif(Request::path() === 'lihat1')
               <li class="nav-item active ">
                <a class="nav-link " href="/layanan">Info Layanan</a>
              </li>
               @elseif(Request::path() === 'lihat1')
               <li class="nav-item active ">
                <a class="nav-link " href="/layanan">Info Layanan</a>
              </li>
               @elseif(Request::path() === 'lihat2')
               <li class="nav-item active ">
                <a class="nav-link " href="/layanan">Info Layanan</a>
              </li>
               @elseif(Request::path() === 'lihat3')
               <li class="nav-item active ">
                <a class="nav-link " href="/layanan">Info Layanan</a>
              </li>
               @elseif(Request::path() === 'lihat4')
               <li class="nav-item active ">
                <a class="nav-link " href="/layanan">Info Layanan</a>
              </li>
               @elseif(Request::path() === 'lihat5')
               <li class="nav-item active ">
                <a class="nav-link " href="/layanan">Info Layanan</a>
              </li>
              @elseif(Request::path() === 'lihat6')
               <li class="nav-item active ">
                <a class="nav-link " href="/layanan">Info Layanan</a>
              </li>
              @else
              <li class="nav-item ">
                <a class="nav-link " href="/layanan">Info Layanan</a>
              </li>
              @endif

              <li class="nav-item {{ Request::path() === 'kontak' ? 'active' : '' }} ">
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
  @yield('container')

  <!--================ Start footer Area  =================-->
 

  <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up "></i></a>




    <footer class="footer-area section_gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-6 single-footer-widget">
           
            <h4>Top Products</h4>
            <ul>
              <li><a href="#">Managed Website</a></li>
              <li><a href="#">Manage Reputation</a></li>
              <li><a href="#">Power Tools</a></li>
              <li><a href="#">Marketing Service</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4>Quick Links</h4>
            <ul>
              <li><a href="#">Jobs</a></li>
              <li><a href="#">Brand Assets</a></li>
              <li><a href="#">Investor Relations</a></li>
              <li><a href="#">Terms of Service</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4>Features</h4>
            <ul>
              <li><a href="#">Jobs</a></li>
              <li><a href="#">Brand Assets</a></li>
              <li><a href="#">Investor Relations</a></li>
              <li><a href="#">Terms of Service</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4>Resources</h4>
            <ul>
              <li><a href="#">Guides</a></li>
              <li><a href="#">Research</a></li>
              <li><a href="#">Experts</a></li>
              <li><a href="#">Agencies</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 single-footer-widget">
            <h4>Newsletter</h4>
            <p>You can trust us. we only send promo offers,</p>
            <div class="form-wrap" id="mc_embed_signup">
              <form
                target="_blank"
                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                method="get"
                class="form-inline"
              >
                <input
                  class="form-control"
                  name="EMAIL"
                  placeholder="Your Email Address"
                  onfocus="this.placeholder = ''"
                  onblur="this.placeholder = 'Your Email Address'"
                  required=""
                  type="email"
                />
                <button class="click-btn btn btn-default">
                  <span>subscribe</span>
                </button>
                <div style="position: absolute; left: -5000px;">
                  <input
                    name="b_36c4fd991d266f23781ded980_aefe40901a"
                    tabindex="-1"
                    value=""
                    type="text"
                  />
                </div>

                <div class="info"></div>
              </form>

            </div>
          </div>
        </div>
        <div class="row footer-bottom d-flex justify-content-between">
          <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
          <div class="col-lg-4 col-sm-12 footer-social">
            <a href="#"><i class="ti-facebook"></i></a>
            <a href="#"><i class="ti-twitter"></i></a>
            <a href="#"><i class="ti-dribbble"></i></a>
            <a href="#"><i class="ti-linkedin"></i></a>
          </div>
        </div>
      </div>
    </footer>

    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f8b600"/></svg></div>
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script  type='text/javascript' >
//<![CDATA[
$(window).resize(function () {
var w = $(window).width();
if (w > 800 && menu.is(':hidden')) {
menu.removeAttr('style');
}
});


$(window).scroll(function() {
if ($(this).scrollTop() >= 50) { // If page is scrolled more than 50px
$('#return-to-top').fadeIn(200); // Fade in the arrow
} else {
$('#return-to-top').fadeOut(200); // Else fade out the arrow
}
});
$('#return-to-top').click(function() { // When arrow is clicked
$('body,html').animate({
scrollTop : 0 // Scroll to top of body
}, 500);
});
//]]>
</script>

    <script src="{{url('a/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{url('a/js/popper.js')}}"></script>
    <script src="{{url('a/js/bootstrap.min.js')}}"></script>
    <script src="{{url('a/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{url('a/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{url('a/js/owl-carousel-thumb.min.js')}}"></script>
    <script src="{{url('a/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{url('a/js/mail-script.js')}}"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="{{url('a/js/gmaps.min.js')}}"></script>
    <script src="{{url('a/js/theme.js')}}"></script>

  <!--Ftco Page Spinner Loader-->
  <script src="{{url('cc/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{url('cc/js/jquery.stellar.min.js')}}"></script>
  <script src="{{url('cc/js/aos.js')}}"></script>
  <script src="{{url('cc/js/main.js')}}"></script>
  </body>
</html>
