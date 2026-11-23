<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pembimbing', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('nip', 30);
            $table->string('email', 100);
            $table->string('telp', 20);
        });

        Schema::create('dudi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('nama_perusahaan', 150);
            $table->string('alamat');
            $table->string('telp', 20);
        });

        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nisn', 20)->unique();
            $table->string('nama', 100);
            $table->string('kelas', 30);
            $table->string('jurusan', 30);
        });

        Schema::create('penempatan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->unique()->constrained('siswa')->cascadeOnDelete();
            $table->foreignId('dudi_id')->constrained('dudi')->cascadeOnDelete();
            $table->foreignId('pembimbing_id')->constrained('pembimbing')->cascadeOnDelete();
        });

        Schema::create('presensi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained('siswa')->cascadeOnDelete();
            $table->date('tanggal');
            $table->time('jam_masuk')->nullable();
            $table->enum('status', ['hadir', 'izin', 'sakit', 'alpha']);
            $table->string('keterangan')->nullable();
            $table->unique(['siswa_id', 'tanggal']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('presensi');
        Schema::dropIfExists('penempatan');
        Schema::dropIfExists('siswa');
        Schema::dropIfExists('dudi');
        Schema::dropIfExists('pembimbing');
    }
};
