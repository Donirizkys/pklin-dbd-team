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
        Schema::create('presensi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_penempatan')->constrained('penempatan');
            $table->date('tanggal');
            $table->time('waktu_masuk');
            $table->time('waktu_pulang');
            $table->decimal('latitude_masuk', 10, 7);
            $table->decimal('longitude_masuk', 10, 7);
            $table->decimal('latitude_pulang', 10, 7);
            $table->decimal('longitude_pulang', 10, 7);
            $table->decimal('jarak_masuk_meter', 8, 2);
            $table->decimal('jarak_pulang_meter', 8, 2);
            $table->string('foto_masuk');
            $table->string('foto_pulang');
            $table->string('foto_bukti');
            $table->string('status_kehadiran')->default('alpha');
            $table->text('catatan');
            $table->timestamps();

            $table->unique(['id_penempatan', 'tanggal']);
            $table->index('tanggal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presensi');
    }
};
