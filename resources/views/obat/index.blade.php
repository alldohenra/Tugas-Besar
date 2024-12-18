@extends('Layouts.Base')

@section('content')
    <div class="container mt-4">
        <a href="{{ route('obat.create') }}" class="btn btn-primary btn-sm mb-3">Tambah Data obat</a>

        <div class="card shadow-sm">
            <div class="card-header bg-dark text-white">
                <h4 class="mb-0">Daftar obat</h4>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Nama Obat</th>
                            <th>Jenis Obat</th>
                            <th>Stok</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($obat as $obat)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $obat->nama_obat }}</td>
                                <td>{{ $obat->jenis_obat }}</td>
                                <td>{{ $obat->stok }}</td>
                                <td>{{ $obat->harga }}</td>
                                <td>
                                    <a href="{{ route('obat.edit', $obat->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('obat.destroy', $obat->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
