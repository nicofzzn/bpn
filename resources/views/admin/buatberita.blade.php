@extends('Layout/index2')
@section('container')


<div class="quixnav">
  <div class="quixnav-scroll">
    <ul class="metismenu" id="menu">
      <li class="nav-label first">Menu Berita</li>
      <li><a href="/admin/berita" aria-expanded="false"><i class="ti-archive"></i><span class="nav-text ">Daftar
            Berita</span></a>
      </li>
      <li><a href="/admin/buatberita" aria-expanded="false"><i class="ti-pencil-alt"></i><span class="nav-text">Buat
            Berita</span></a>

      </li>

      <li class="nav-label">Menu Admin</li>
      <li><a href="/logout" aria-expanded="false"><i class="ti-power-off"></i><span class="nav-text">Logout</span></a>

      </li>
    </ul>
  </div>
</div>

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
          <li class="breadcrumb-item"><a href="/buatberita">Buat Berita</a></li>

        </ol>
      </div>
    </div>

    @if (session('message'))
    <h3>{{ session('message') }}</h3>
    @endif

    <div class="row">
      <div class="col-xl- col-lg-12">
        @if ($errors->any())
        <ul>
          @foreach ($errors->all() as $error)
          <li>
            <h3>
              {{ $error }}
            </h3>
          </li>
          @endforeach
        </ul>
        @endif
        <div class="card">
          <div class="card-header sizey">
            <h4 class="card-title">Judul Berita</h4>
          </div>
          <div class="card-body">
            <div class="basic-form ">
              <form action="/admin/berita" method="POST" enctype="multipart/form-data" id="myForm">
                @csrf

                <div class="form-group sizex">
                  <input type="text" name="judul" class="form-control  input-default "
                    placeholder="Masukkan judul berita" required>
                </div>


                <div class="card-header">
                  <h4 class="card-title">Headline Berita</h4>
                </div>
                <div class="card-body">
                  <div class="basic-form">
                    <div class="form-group">
                      <input type="text" name="headline" class="form-control input-default "
                        placeholder="Masukkan headline berita" required>
                    </div>
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
                        <input type="file" name="gambar" accept="image/*" class="custom-file-input" required>
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
                        <option value="berita pertahanan">Berita Pertanahan</option>
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