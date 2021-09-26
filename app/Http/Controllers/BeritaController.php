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
      'headline' => 'required',
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

    return redirect('admin/buatberita')->with('message', 'Berita berhasil ditambah');
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
      'headline' => 'required',
      'kategori' => 'required',
      'tanggal' => 'required',
      'penulis' => 'required',
      'isi' => 'required',
    ]);

    $berita = Berita::find($id);

    if (!$berita) {
      return redirect('admin/berita')->with('message', 'Berita tidak ditemukan');
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
    return redirect('admin/berita/' . $berita->id)->with('message', 'Berita berhasil di update');
  }

  public function delete($id)
  {
    $berita = Berita::find($id);
    if ($berita) {
      File::delete('image/' . $berita->gambar);
      $berita->delete();
      return redirect('admin/berita')->with('message', 'Berita berhasil dihapus');
    }
    return redirect('admin/berita')->with('message', 'Berita tidak ditemukan');
  }
}
