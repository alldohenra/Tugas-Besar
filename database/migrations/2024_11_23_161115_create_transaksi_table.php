<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('transaksi', function (Blueprint $table) {
        $table->id();
        $table->string('nama_pelanggan');
        $table->text('alamat')->nullable();
        $table->string('telepon', 15)->nullable();      
        $table->foreignId('obat_id')->constrained('obat')->onDelete('cascade');        
        $table->string('harga');
        $table->date('tanggal_transaksi');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
