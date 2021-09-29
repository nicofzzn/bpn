@extends('Layout/index')
@section('container')


<!--================Blog Area =================-->
<section class="blog_area single-post-area section_gap">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 posts-list">
        <div class="single-post row">
          <div class="col-lg-12 ">
            <div class="feature-img">
              <img class="img-fluid" src="{{url('image/'.$berita->gambar)}}" alt="" width="730" height="340">
              <!-- <img class="img-fluid" src="{{url('a/img/blog/feature-img1.jpg')}}" alt=""> -->
            </div>
          </div>

          <div class="col-lg-12 blog_details">
            <h2>{{ $berita->judul }}</h2>
            <p class="quotes">
              {{$berita->isi}}
            </p>
          </div>

        </div>

        <div class="col-md-12 text-center">
          <br>
          <a href="/berita" class="primary-btnx">Kembali</a>
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
            <h3 class="widget_title">Berita Pertanahan</h3>
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