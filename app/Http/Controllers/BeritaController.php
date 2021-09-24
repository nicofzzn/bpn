<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

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
}
