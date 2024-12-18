<?php

namespace App\Http\Controllers;
use App\Models\Obat;

use Illuminate\Http\Request;

class ObatController extends Controller
{
     // Menampilkan daftar dokter
     public function index()
     {
         $obat = Obat::all();
         return view('obat.index', compact('obat'));
     }
 
     // Menampilkan form untuk membuat dokter baru
     public function create()
     {
         return view('obat.create');
     }
 
     // Menyimpan data dokter yang baru
     public function store(Request $request)
     {
 
         Obat::create($request->all());
 
         return redirect()->route('obat.index');
     }
 
     // Menampilkan form untuk mengedit data dokter
     public function edit($id)
     {
         $obat = Obat::findOrFail($id);
         return view('obat.edit', compact('obat'));
     }
 
     // Memperbarui data dokter
     public function update(Request $request, $id)
     {
 
         $obat = Obat::findOrFail($id);
         $obat->update($request->all());
 
         return redirect()->route('obat.index');
     }
 
     // Menghapus data dokter
     public function destroy($id)
     {
         Obat::findOrFail($id)->delete();
         return redirect()->route('obat.index');
     }
}
