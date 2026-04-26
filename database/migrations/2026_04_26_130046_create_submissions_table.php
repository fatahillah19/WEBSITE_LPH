<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('submissions', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relasi ke tabel users (siapa yang daftar)
        
        // Data Perusahaan
        $table->string('company_name');
        $table->string('nib'); // Nomor Induk Berusaha
        $table->text('company_address');
        
        // Data Produk
        $table->string('product_name');
        $table->string('product_type'); // Contoh: Makanan, Minuman, Kosmetik
        
        // Status Alur (Sesuai dokumen LPH GHC)
        // default: 'pending' (baru daftar)
        $table->enum('status', [
            'pendaftaran', 
            'verifikasi_dokumen', 
            'penjadwalan_audit', 
            'pelaksanaan_audit', 
            'sidang_fatwa', 
            'penerbitan_sertifikat'
        ])->default('pendaftaran');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submissions');
    }
};
