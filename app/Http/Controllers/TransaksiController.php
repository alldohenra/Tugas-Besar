<?php

namespace App\Http\Controllers;
use App\Models\Transaksi;
use App\Models\Obat;
use App\Models\Pelanggan;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    // Menampilkan daftar transaksi
    public function index()
    {
        // Ambil semua data transaksi
        $transaksi = Transaksi::all();

        // Kirim data ke view
        return view('transaksi.index', compact('transaksi'));
    }

    public function deskripsi()
    {
        // Ambil semua data transaksi
        $transaksi = Transaksi::all();

        // Kirim data ke view
        return view('deskripsi.deskripsi', compact('transaksi'));
    }

    // Menampilkan form untuk membuat transaksi baru
// Menampilkan form untuk membuat transaksi baru
public function create()
{
    $obats = Obat::all(); // Ambil semua data obat dari tabel 'obat'
    return view('pelanggan.transaksi', compact('obats'));
}


    // Menyimpan transaksi baru
    public function store(Request $request)
    {
        Transaksi::create($request->all());
        return redirect()->route('pelanggan.transaksi');
    }

    public function destroy($id)
    {
        Transaksi::findOrFail($id)->delete();
        return redirect()->route('transaksi.index');
    }
}

