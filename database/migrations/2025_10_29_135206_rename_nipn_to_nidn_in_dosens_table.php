<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up(): void
    {
        Schema::table('dosens', function (Blueprint $table) {
            // Ini akan mengubah nama kolom 'nipn' MENJADI 'nidn'
            $table->renameColumn('nipn', 'nidn');
        });
    }

    /**
     * Balikkan migrasi.
     */
    public function down(): void
    {
        Schema::table('dosens', function (Blueprint $table) {
            // Ini untuk rollback, mengubah 'nidn' KEMBALI menjadi 'nipn'
            $table->renameColumn('nidn', 'nipn');
        });
    }
};