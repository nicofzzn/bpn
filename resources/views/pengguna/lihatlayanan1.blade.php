@extends('Layout/index')
@section('container')


 


    


      <section class="course_details_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 course_details_left">
                   
                    <div class="content_wrapper">
                        <center><h4 class="title3">I. PELAYANAN PENDAFTARAN TANAH PERTAMA KALI</h4></center>
                        

                    

                       <div class="col-lg-12 course_details_left">
                    
   
                        <br>  <br>
                 
                   <div class="content">
                            <ul class="course_list" >
                                <div class="justify-content-between d-flex">
                                    <p style="color: #f8b600;">1.</p>
                                    <p style="padding-right: 593px;">Konversi, Pengakuan dan Penegasan Hak</p>
                                    <li>
                                      <a class="primary-btnz"  target="_blank" style="font-size: 13px;"  href="{{url('file/lampiran 2.png')}}">Tahapan</a>
                                    </li>
                                </div>
                                <br>
                                 <div class="justify-content-between d-flex" >
                                    <p style="color: #f8b600;">2.</p>
                                    <p style="padding-right: 753px;">Pemberian Hak <span onclick="myFunction('1')" style="color: #f8b600;margin-left: 5px; " class="ti-more-alt"></span></p>
                                    <li>
                                      <a class="primary-btnz"  target="_blank" style="font-size: 13px;"  href="{{url('file/lampiran 2-2.png')}}">Tahapan</a>
                                    </li>

                                </div>
                                      <div class="justify-content-between d-flex w3-hide w3-animate-zoom" id="1">
                                         <p style="padding-left: 30px;  ">A. Hak Milik <span onclick="myFunction('2')" style="color: #f8b600;margin-left: 5px; " class="ti-more-alt"></span> </p>
                                          
                                          <div class="justify-content-between d-flex w3-hide w3-animate-zoom" id="2">
                                         <span> <p style="padding-left: 50px;  ">1. Hak Milik Perorangan </p></span>
                                         <span> <p style="padding-left: 50px;  ">2. Hak Milik Badan Hukum </p></span> 
                                      </div>
                                         <p style="padding-left: 30px;">B. Hak Guna Bangunan <span onclick="myFunction('3')" style="color: #f8b600;margin-left: 5px; " class="ti-more-alt"></span> </p>
                                           <div class="justify-content-between d-flex w3-hide w3-animate-zoom" id="3">
                                         <span> <p style="padding-left: 50px;  ">1. Hak Guna Bangunan Perorangan </p></span>
                                         <span> <p style="padding-left: 50px;  ">2. Hak Guna Bangunan Badan Hukum </p></span> 
                                      </div>
                                        <p style="padding-left: 30px;">C. Hak Pakai <span onclick="myFunction('4')" style="color: #f8b600;margin-left: 5px; " class="ti-more-alt"></span></p>
                                           <div class="justify-content-between d-flex w3-hide w3-animate-zoom" id="4">
                                         <span> <p style="padding-left: 50px;  ">1. Hak Pakai Perorangan WNI </p></span>
                                         <span> <p style="padding-left: 50px;  ">2. Hak Pakai Perorangan WNA </p></span> 
                                         <span> <p style="padding-left: 50px;  ">3. Hak Pakai Badan Hukum Indonesia </p></span>
                                         <span> <p style="padding-left: 50px;  ">4. Hak Pakai Badan Hukum Asing </p></span>
                                         <span> <p style="padding-left: 50px;  ">5. Hak Pakai Instansi Pemerintah </p></span>
                                         <span> <p style="padding-left: 50px;  ">6. Hak Pakai Pemerintah Asing </p></span>
                                      </div>
                                       <span><p  style="padding-left: 30px;">D. Hak Pengelolaan Instansi Pemerintah/Pemerintah Daerah/BUMN/BUMD </p></span>
                                    </div>
                                      <br>
                                <div class="justify-content-between d-flex"  >
                                    <p style="color: #f8b600;">3.</p>
                                    <p style="padding-right: 946px;">Wakaf <span onclick="myFunction('5')" style="color: #f8b600;margin-left: 5px; " class="ti-more-alt"></span></p>
                                </div>
                                  <div class="justify-content-between d-flex w3-hide w3-animate-zoom" id="5">
                                         <div class="justify-content-between d-flex">
                                          <p style="padding-left: 30px;  ">A. Wakaf dari Tanah Yang Belum Bersertipikat (Konversi, Pengakuan dan Penegasan Hak) </p>
                                          <li>
                                         <a class="primary-btnz"  target="_blank" style="font-size: 13px; "  href="{{url('file/lampiran 2-3.png')}}">Tahapan</a> </li> 
                                          </div>
                                         <div class="justify-content-between d-flex">
                                         <p  style="padding-left: 30px;  ">B. Wakaf dari Tanah Negara (Pemberian Hak Tanah Wakaf) </p>
                                         <li><a class="primary-btnz"  target="_blank" style="font-size: 13px; "  href="{{url('file/lampiran 2-4.png')}}">Tahapan</a></li> 
                                         </div> 
                                </div>
                                  <br>
                                 <div class="justify-content-between d-flex" >
                                    <p style="color: #f8b600;">4.</p>
                                    <p style="padding-right: 800px;">P3MB/Prk.5</p>
                                    <li> <a class="primary-btnz"  target="_blank" style="font-size: 13px; "  href="{{url('file/lampiran 2-5.png')}}">Tahapan</a></li>
                                </div>
                                  <br>
                                 <div class="justify-content-between d-flex" >
                                    <p style="color: #f8b600;">5.</p>
                                    <p style="padding-right: 540px;">Pendaftaran Hak Milik Atas Satuan Rumah Susun</p>
                                    <li> <a class="primary-btnz"  target="_blank" style="font-size: 13px; "  href="{{url('file/lampiran 2-6.png')}}">Tahapan</a></li>
                                </div>
                                  <br>
                                 <div class="justify-content-between d-flex" >
                                    <p style="color: #f8b600;">6.</p>
                                    <p style="padding-right: 668px;">Pemberian Hak Guna Usaha <span onclick="myFunction('6')" style="color: #f8b600;margin-left: 5px; " class="ti-more-alt"></span></p>
                                    <li> <a class="primary-btnz"  target="_blank" style="font-size: 13px; "  href="{{url('file/lampiran 2-7.png')}}">Tahapan</a></li>
                                </div>
                                <div class="justify-content-between d-flex w3-hide w3-animate-zoom" id="6">
                                         <span> <p  style="padding-left: 30px;  ">A. Hak Guna Usaha Perorangan</p></span>
                                         <span> <p  style="padding-left: 30px;  ">B. Hak Guna Usaha Badan Hukum </p></span>  
                                </div>
                                <br>


           <div class="col-md-12 text-center">
          <br><br>
          <a href="" class="primary-btnx">Unduh Lampiran Persyaratan</a>
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