@extends('Layout/index2')
@section('container')


<div class="quixnav">
  <div class="quixnav-scroll">
    <ul class="metismenu" id="menu">
      <li class="nav-label first">Menu Berita</li>
      <li><a href="/admin" aria-expanded="false"><i class="ti-archive"></i><span class="nav-text ">Daftar
            Berita</span></a>
      </li>
      <li><a href="/buatberita" aria-expanded="false"><i class="ti-pencil-alt"></i><span class="nav-text">Buat
            Berita</span></a>

      </li>

      <li class="nav-label">Menu Admin</li>
      <li><a href="/logout" aria-expanded="false"><i class="ti-power-off"></i><span class="nav-text">Logout</span></a>

      </li>
    </ul>
  </div>


</div>
<!--**********************************
            Sidebar end
        ***********************************-->

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
  <div class="container-fluid">
    <div class="row page-titles mx-0">
      <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
          <h4>Halo, Selamat Datang !</h4>
          <p class="mb-0">Menu untuk melihat berita yang telah dibuat </p>
        </div>
      </div>
      <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Daftar Berita</a></li>

        </ol>
      </div>
    </div>
    <!-- row -->

    <div class="row">



      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">List Berita</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="display" style="min-width: 845px">
                <thead>
                  <tr>

                    <th>Judul Berita</th>
                    <th>Kategori</th>
                    <th>Tanggal</th>
                    <th>Author</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($berita as $item)
                  <tr>
                    <td>
                      <a href="/admin/berita/{{ $item->id }}">{{ $item->judul }}</a>
                    </td>
                    <td>{{ $item->kategori }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->penulis }}</td>
                    <td class="actions">
                      <a href="/admin/berita/{{ $item->id }}/edit" method="GET"><i class=" ti-pencil"></i></a>
                      <a href="/admin/berita/{{ $item->id }}/delete" method="GET"><i class=" ti-trash"></i></a>

                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>







      @endsection