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
        Schema::create('penempatan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_siswa')->constrained('siswa');
            $table->foreignId('id_guru')->constrained('guru');
            $table->foreignId('id_mitra')->constrained('mitra');
            $table->foreignId('id_periode')->constrained('periode');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->string('status')->default('aktif');
            $table->timestamps();

            $table->unique(['id_siswa', 'id_periode']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penempatan');
    }
};
