@extends('Layouts.Base')
@section('content')
<title>Data obat</title>
<div class="container">
<h1 class="mt-4">Tambah Data Obat</h1>
        <div class="card">
            <div class="card-body">
            <form method="POST" action="{{ route('obat.store') }}">
                @csrf
                <div class="mb-3">
            <label for="nama_obat" class="form-label">Nama obat</label>
            <input type="text" class="form-control" id="nama_obat" name="nama_obat" required>
        </div>
        <div class="mb-3">
            <label for="jenis_obat" class="form-label">Jenis obat</label>
            <input type="text" class="form-control" id="jenis_obat" name="jenis_obat" required>
        </div>
        <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="number" class="form-control" id="stok" name="stok" required>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" required>
        </div>
        
                    <button type="submit" class="btn btn-primary btn-sm">Simpan Data</button>
                    <a href="{{ url('obat.index') }}"><button type="button" class="btn btn-danger btn-sm">Batal</button></a>
                </form>
            </div>
        </div>
@endsection