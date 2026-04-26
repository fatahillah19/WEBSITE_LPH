<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi untuk menambah kolom.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Menambah kolom role untuk membedakan Admin dan Klien [cite: 98, 108]
            // Default adalah 'client' (pelaku usaha/UMK)
            $table->string('role')->default('client')->after('email');
            
            // Menambah kolom nomor telepon/WA sesuai kebutuhan kontak di dokumen 
            $table->string('phone_number')->nullable()->after('role');
        });
    }

    /**
     * Batalkan perubahan jika migrasi di-rollback.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['role', 'phone_number']);
        });
    }
};