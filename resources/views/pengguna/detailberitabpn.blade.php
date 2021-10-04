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
              <img  class="img2" src="{{url('image/'.$berita->gambar)}}" style="max-width:100%; height: 400px; ">
              <!-- <img class="img-fluid" src="{{url('a/img/blog/feature-img1.jpg')}}" alt=""> -->
            </div>
          </div>

          <div class="col-lg-12 blog_details">
           <center> <h2 style="text-align: left;">{{ $berita->judul }}</h2></center>
             


            <div class="quotes" >
              {!!$berita->isi!!}
            </div>
         </div>

        </div>

        <div class="col-md-12 text-center">
          <br><br>
          <a href="/berita" class="primary-btnx">Kembali</a>
        </div>

      </div>


      <div class="col-lg-4">
        <div class="blog_right_sidebar">

          <aside class="single_sidebar_widget popular_post_widget">
            <h3 class="widget_title">Pengumuman</h3>
            @foreach ($pengumuman as $item)
            <div class="media post_item">
              <img src="{{url('image/'.$item->gambar)}}" alt="post" width="100" height="60">
              <div class="media-body">
                <a href="/berita/{{$item->id}}">
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
                <a href="/berita/{{$item->id}}">
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
                <a href="/berita/{{$item->id}}">
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