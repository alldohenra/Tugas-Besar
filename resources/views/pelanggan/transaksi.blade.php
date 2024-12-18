<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Transaksi Apotek</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            max-width: 600px;
            margin: 50px auto;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .header {
            background-color: #2d8f8d;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .header img {
            width: 50px;
        }
        .header h1 {
            margin: 10px 0;
        }
        .content {
            padding: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input, .form-group select, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group button {
            width: 100%;
            background-color: #2d8f8d;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #23716f;
        }
        .footer {
            text-align: center;
            padding: 10px;
            background-color: #f0f8ff;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="https://example.com/apotek-icon.png" alt="Ikon Apotek">
            <h1>Input Data Transaksi</h1>
        </div>
        <div class="content">
            <form action="{{ route('transaksi.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_pelanggan">Nama Pelanggan</label>
                    <input type="text" id="nama_pelanggan" name="nama_pelanggan" placeholder="Masukkan nama pelanggan" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea id="alamat" name="alamat" placeholder="Masukkan alamat (opsional)"></textarea>
                </div>
                <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input type="tel" id="telepon" name="telepon" placeholder="Masukkan nomor telepon (opsional)" maxlength="15">
                </div>
                <div class="form-group">
    <label for="obat_id">Obat</label>
    <select class="form-control" id="obat_id" name="obat_id" required>
        <option value="" disabled selected>Pilih Obat</option>
        @foreach ($obats as $obat)
            <option value="{{ $obat->id }}">{{ $obat->nama_obat }}</option>
        @endforeach
    </select>
</div>

                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" id="harga" name="harga" placeholder="Masukkan harga obat" required>
                </div>
                <div class="form-group">
                    <button type="submit">Simpan Transaksi</button>
                </div>
            </form>
        </div>
        <div class="footer">
            &copy; 2024 Apotek Sehat. All rights reserved.
        </div>
    </div>
</body>
</html>
