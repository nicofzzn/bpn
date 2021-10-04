<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\File;

class BeritaController extends Controller
{
  public function index()
  {
    $berita = Berita::latest()->get();
    return view('admin.index', compact('berita'));
  }

  public function store(Request $request)
  {
    $validated = $request->validate([
      'judul' => 'required',
      'gambar' => 'required',
      'kategori' => 'required',
      'tanggal' => 'required',
      'penulis' => 'required',
      'isi' => 'required',
    ]);
    $gambar = $request->file('gambar');

    $fileName = Uuid::uuid4()->toString() . '.' . $gambar->getClientOriginalExtension();
    $validated['gambar'] = $fileName;
    $gambar->move('image', $fileName);


    Berita::create($validated);

    return redirect('admin/berita')->with('message', ['type' => 'success', 'value' => 'Berita Berhasil di Tambahkan']);
  }

  public function edit($id)
  {
    $berita = Berita::find($id);
    if (!$berita) {
      return redirect('admin/berita');
    }

    return view('admin.editberita', compact('berita'));
  }

  public function update(Request $request, $id)
  {
    $validated = $request->validate([
      'judul' => 'required',
      'kategori' => 'required',
      'tanggal' => 'required',
      'penulis' => 'required',
      'isi' => 'required',
    ]);

    $berita = Berita::find($id);

    if (!$berita) {
      return redirect('admin/berita')->with('message2', ['type' => 'success', 'value' => 'Berita Tidak di Temukan']);
    }

    if ($request->file('gambar')) {
      File::delete('image/' . $berita->gambar);
      $gambar = $request->file('gambar');
      $fileName = Uuid::uuid4()->toString() . '.' . $gambar->getClientOriginalExtension();
      $validated['gambar'] = $fileName;
      $gambar->move('image', $fileName);
    } else {
      $validated['gambar'] = $berita->gambar;
    }

    $berita->update($validated);
    return redirect('admin/berita' )->with('message3', ['type' => 'success', 'value' => 'Berita Berhasil di Update']);
  }

  public function delete($id)
  {
    $berita = Berita::find($id);
    if ($berita) {
      File::delete('image/' . $berita->gambar);
      $berita->delete();
      return redirect('admin/berita')->with('message4', ['type' => 'success', 'value' => 'Berita Berhasil di Hapus']);
    }
    return redirect('admin/berita')->with('message2', ['type' => 'success', 'value' => 'Berita Tidak di Temukan']);
  }

  public function beranda()
  {
    $beritas = Berita::latest()->get()->take(3);
    return view('pengguna.beranda', compact('beritas'));
  }

  public function listBerita(Request $request)
  {
    $pagination = Berita::latest()->where('judul', 'LIKE', '%' . $request->search . '%')->paginate(3)->withQueryString();
    $beritas = Berita::latest()->get();
    $pengumuman = $beritas->where('kategori', 'pengumuman')->take(3);
    $berita_pertahanan = $beritas->where('kategori', 'berita pertanahan')->take(3);
    $sosialisasi = $beritas->where('kategori', 'sosialisasi')->take(3);
    return view('pengguna.beritabpn', [
      'beritas' => $pagination,
      'pengumuman' => $pengumuman,
      'berita_pertahanan' => $berita_pertahanan,
      'sosialisasi' => $sosialisasi,
    ]);
  }

  public function detail(Berita $berita)
  {
    $beritas = Berita::latest()->get();
    $pengumuman = $beritas->where('kategori', 'pengumuman')->take(3);
    $berita_pertahanan = $beritas->where('kategori', 'berita pertanahan')->take(3);
    $sosialisasi = $beritas->where('kategori', 'sosialisasi')->take(3);
    return view('pengguna.detailberitabpn', [
      'berita' => $berita,
      'pengumuman' => $pengumuman,
      'berita_pertahanan' => $berita_pertahanan,
      'sosialisasi' => $sosialisasi,
    ]);
  }
}

