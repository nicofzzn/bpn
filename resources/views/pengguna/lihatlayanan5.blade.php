@extends('Layout/index')
@section('container')







<section class="course_details_area section_gap">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 course_details_left">

        <div class="content_wrapper">
          <center>
            <h4 class="title3">V. PELAYANAN PENGATURAN DAN PENATAAN PERTANAHAN</h4>
          </center>




          <div class="col-lg-12 course_details_left">


            <br> <br>

            <div class="content">
              <ul class="course_list">
                <div class="justify-content-between d-flex">
                  <p style="color: #f8b600;">1.</p>
                  <p style="padding-right: 680px;">Konsolidasi Tanah Swadaya </p>
                  <li>
                    <a class="primary-btnz" target="_blank" style="font-size: 13px;"
                      href="{{url('file/lampiran 2-23.png')}}">Tahapan</a>
                  </li>
                </div>
                <br>
                <div class="justify-content-between d-flex">
                  <p style="color: #f8b600;">2.</p>
                  <p style="padding-right: 700px;">Pertimbangan Teknis <span onclick="myFunction('1')"
                      style="color: #f8b600;margin-left: 5px; " class="ti-more-alt"></span></p>
                  <li>
                    <a class="primary-btnz" target="_blank" style="font-size: 13px;"
                      href="{{url('file/lampiran 2-24.png')}}">Tahapan</a>
                  </li>
                </div>
                <div class="justify-content-between d-flex w3-hide w3-animate-zoom" id="1">
                  <span>
                    <p style="padding-left: 30px;  ">A. Pertimbangan Teknis Pertanahan</p>
                  </span>
                  <span>
                    <p style="padding-left: 30px;  ">B. Pertimbangan Teknis Penatagunaan Tanah </p>
                  </span>

                </div>
                <br>


                <div class="col-md-12 text-center">
                  <br><br>
                  <a href="{{url('lampiran/lampiran_3_BAB_5.pdf')}}" target="_blank" class="primary-btnx">Unduh Lampiran
                    Persyaratan</a>
                </div>






              </ul>
            </div>
          </div>
        </div>



      </div>
    </div>
  </div>
  </div>
</section>

<script>
  function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

@endsection