@extends('Layouts.Base')

@section('content')
    <div class="container mt-4">        
        <div class="card shadow-lg">
            <div class="card-header bg-dark text-white">
                <h4 class="mb-0">Data Transaksi</h4>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-hover table-sm">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Nama pelanggan</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Obat</th>
                            <th>Harga</th>
                            <th>Tanggal transaksi</th>                            
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($transaksi as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_pelanggan }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->telepon }}</td>
                                <td>{{ optional($item->obat)->nama_obat ?? 'Tidak ditemukan' }}</td>                                
                                <td>{{ $item->harga }}</td>                                
                                <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}</td>                                
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">Tidak ada data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection