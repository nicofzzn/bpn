@extends('Layout/index2')
@section('container')

<div class="content-body">
  <div class="container-fluid">
    <div class="row page-titles mx-0">
      <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
          <h4>Halo, Selamat Datang !</h4>
          <p class="mb-0">Menu untuk membuat berita </p>
        </div>
      </div>
      <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/buatberita">Buat Berita</a></li>

        </ol>
      </div>
    </div>


    <div class="row">
      <div class="col-xl- col-lg-12">
      
        <div class="card">
          <div class="card-header sizey">
            <h4 class="card-title">Judul Berita</h4>
          </div>
          <div class="card-body">
            <div class="basic-form ">
              <form action="/admin/berita" method="POST" enctype="multipart/form-data" id="myForm">
                @csrf

                <div class="form-group sizex">
                  <input type="text" name="judul" class="form-control input-default " minlength="10" maxlength="70"
                    placeholder="Masukkan judul berita" required>
                </div>


              
                </div>
                <div class="card-header">
                  <h4 class="card-title">Gambar Berita</h4>
                </div>
                <div class="card-body">
                  <div class="basic-form custom_file_input">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Upload</span>
                      </div>
                      <div class="custom-file">
                        <input type="file" name="gambar"  accept="image/*" class="custom-file-input" required>
                        <label class="custom-file-label">Masukkan gambar</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-header">
                  <h4 class="card-title">Kelengkapan Berita</h4>
                </div>
                <div class="card-body">
                  <div class="row form-material">
                    <div class="col-xl-4 col-xxl-6 col-md-6">
                      <label>Kategori Berita</label>
                      <select id="" name="kategori" class="form-control" required>
                        <option value='' selected disabled>Pilih Kategori</option>
                        <option value="berita pertanahan">Berita Pertanahan</option>
                        <option value="pengumuman">Pengumuman</option>
                        <option value="sosialisasi">Sosialisasi</option>
                      </select>
                    </div>

                    <div class="col-xl-4 col-xxl-6 col-md-6">
                      <label>Tanggal </label>
                      <input type="text" name="tanggal" value="" class="datepicker-default form-control" id="datepicker"
                        required>
                    </div>

                    <div class="col-xl-4 col-xxl-6 col-md-6">
                      <label>Penulis Berita</label>
                      <input type="text" name="penulis" class="form-control" placeholder="Nama Penulis" id="" name=""
                        required>
                    </div>
                  </div>
                </div>
                <div class="card-header">
                  <h4 class="card-title">Isi Berita</h4>
                </div>
                <div class="card-body">
                  <div class="basic-form">

                    <div class="form-group">
                      <textarea name="isi" class="form-control summernote" rows="20" id="" required></textarea>
                    </div>
                    <center> <button type="submit" class="btn btn-primary btn-lg ">Tambahkan Berita</button>
                    </center>
              </form>
            </div>





          </div>

        </div>
      </div>
    </div>





  </div>
</div>
</div>

@endsection