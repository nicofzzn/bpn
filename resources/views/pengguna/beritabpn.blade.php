@extends('Layout/index')
@section('container')


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
          @foreach ($beritas as $item)
          <article>
            <div class="col-md-12 ">
              <div class="blog_post">
                <img class="img2" src="{{url('image/'.$item->gambar)}}" alt="">
                <div class="blog_details">

                  <h2>{{ $item->judul }}</h2>
                  <h6>{{ $item->tanggal }}</h6>
                  <br>
                  <p>{{ $item->headline }}</p>
                  <a href="/detailberitabpn/{{ $item->id }}" class="blog_btnx ">Lihat Berita</a>
                </div>
              </div>
            </div>
          </article>
          <br>
          <br>
          @endforeach

          <!-- Article End -->

          <nav class="blog-pagination justify-content-center d-flex">
            {{ $beritas->links() }}
          </nav>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="blog_right_sidebar">
          <aside class="single_sidebar_widget search_widget">
            <div class="input-group">
              <form action="/berita">
                <input type="text" name="search" class="form-control" placeholder="Cari Berita">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="submit"><i class="ti-search"></i></button>
                </span>
              </form>
            </div><!-- /input-group -->
            <div class="br"></div>
          </aside>

          <aside class="single_sidebar_widget popular_post_widget">
            <h3 class="widget_title">Pengumuman</h3>
            @foreach ($pengumuman as $item)
            <div class="media post_item">
              <img src="{{url('image/'.$item->gambar)}}" alt="post" width="100" height="60">
              <div class="media-body">
                <a href="/detailberitabpn/{{$item->id}}">
                  <h3>{{ $item->judul }}</h3>
                </a>
                <p>{{ $item->tanggal }}</p>
              </div>
            </div>
            @endforeach
            <div class="br"></div>
          </aside>

          <aside class="single_sidebar_widget popular_post_widget">
            <h3 class="widget_title">Berita Pertanahan</h3>
            @foreach ($berita_pertahanan as $item)
            <div class="media post_item">
              <img src="{{url('image/'.$item->gambar)}}" alt="post" width="100" height="60">
              <div class="media-body">
                <a href="/detailberitabpn/{{$item->id}}">
                  <h3>{{ $item->judul }}</h3>
                </a>
                <p>{{ $item->tanggal }}</p>
              </div>
            </div>
            @endforeach
            <div class="br"></div>
          </aside>
          <aside class="single_sidebar_widget popular_post_widget">
            <h3 class="widget_title">Sosialisasi</h3>
            @foreach ($sosialisasi as $item)
            <div class="media post_item">
              <img src="{{url('image/'.$item->gambar)}}" alt="post" width="100" height="60">
              <div class="media-body">
                <a href="/detailberitabpn/{{$item->id}}">
                  <h3>{{ $item->judul }}</h3>
                </a>
                <p>{{ $item->tanggal }}</p>
              </div>
            </div>
            @endforeach
            <div class="br"></div>
          </aside>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection