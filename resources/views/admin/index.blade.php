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
          <li class="breadcrumb-item"><a href="/admin/berita">Daftar Berita</a></li>

        </ol>
      </div>
    </div>
    <!-- row -->
    @if (session('message'))
          <div class="alert success">
            <span class="closebtn">&times;</span>  
            <strong style="color: white;">{{ session('message')['value'] }}</strong>
          </div>

          @elseif(session('message2'))
          <div class="alert info">
            <span class="closebtn">&times;</span>  
            <strong style="color: white;">{{ session('message2')['value'] }}</strong> 
          </div>

           @elseif(session('message3'))
          <div class="alert success">
            <span class="closebtn">&times;</span>  
            <strong style="color: white;">{{ session('message3')['value'] }}</strong> 
          </div>


           @elseif(session('message4'))
          <div class="alert danger">
            <span class="closebtn">&times;</span>  
            <strong style="color: white;">{{ session('message4')['value'] }}</strong> 
          </div>

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
                  <tr style="color:black ;">
                    <td>
                      <a>{{ $item->judul }}</a>
                    </td>
                    <td>{{ $item->kategori }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->penulis }}</td>
                    <td class="actions" >
                      <a href="/admin/berita/{{ $item->id }}"><i class=" ti-pencil" style=""></i></a>
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

<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>

<style>
  
.alert.success {background-color: #04AA6D;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}
.alert.danger{background-color: #ff1100;}

</style>

@endsection


