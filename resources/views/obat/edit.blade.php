@extends('Layouts.Base')
@section('content')
<div class="container px-4">
    <h1 class="mt-4">Update Data obat</h1>
    <div class="card mb-4">
        <div class="card-body">
        <form action="{{ route('obat.update', $obat->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_obat" class="form-label">Nama obat</label>
            <input type="text" class="form-control" id="nama_obat" name="nama_obat" value="{{ $obat->nama_obat }}" required>
        </div>
        <div class="mb-3">
            <label for="jenis_obat" class="form-label">Jenis obat</label>
            <input type="text" class="form-control" id="jenis_obat" name="jenis_obat" value="{{ $obat->jenis_obat }}" required>
        </div>
        <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="number" class="form-control" id="stok" name="stok" value="{{ $obat->stok }}" required>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" value="{{ $obat->harga }}" required>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Update</button>
        <a href="{{ url('obat.index') }}" class="btn btn-danger btn-sm">Kembali</a>
    </form>
@endsection
