<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = ['nama_pelanggan', 'alamat', 'telepon', 'obat_id', 'harga', 'tanggal_transaksi'];

    public function obat()
    {
        return $this->belongsTo(Obat::class);
    }
}
