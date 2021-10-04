@extends('Layout/index')
@section('container')



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

          @foreach ($beritas as $item)

<?php           
$headline = (str_word_count("$item->headline") >60 ? substr("$item->headline",0,110)."..."  : "$item->headline") ;

?>     
        <div class="single_course" >
          <div class="course_head">
            <img class="img2"  src="{{url('image/'.$item->gambar)}}"  />
          </div>
          <div class="course_content" >
            <span class="tag mb-4 d-inline-block">{{ $item->kategori }}</span>
            <h4 class="mb-3" style="height: 60px;" >
              <a href="/berita/{{ $item->id }}">{{ $item->judul }}</a>
            </h4>
           
       <div
              class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
              <div class="authr_meta">

                <span class="d-inline-block ml-2">{{ $item->tanggal }}</span>
              </div>
              <div class="mt-lg-0 mt-3">

              </div>
            </div>
          </div>
        </div>
         @endforeach
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