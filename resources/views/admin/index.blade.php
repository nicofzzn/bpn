@extends('Layout/index2')
@section('container')

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
    @if (session('message'))
    <h1>{{ session('message') }}</h1>
    @endif
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
                      <a href="/admin/berita/{{ $item->id }}"><i class=" ti-pencil"></i></a>
                      <a href="/admin/berita/{{ $item->id }}/delete"><i class=" ti-trash"></i></a>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection