<?php

namespace Database\Seeders;

use App\Models\Siswa;
use App\Models\Guru;
use App\Models\Mitra;
use App\Models\Penempatan;
use App\Models\Periode;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder{
    public function run(): void{
        // Admin
        User::firstOrCreate(
            ['username' => 'admin'],
            ['name' => 'Administrator', 'password' => 'passwordadmin', 'role' => 'admin']
        );

        $periode = Periode::firstOrCreate(
            ['tahun_ajaran' => '2026/2027'],
            ['tanggal_mulai' => '2026-11-01', 'tanggal_selesai' => '2027-02-28', 'status' => 'aktif']
        );

        $userGuru = User::firstOrCreate(
            ['username' => 'guru1'],
            ['name' => 'Guru 1', 'password' => 'passwordguru1', 'role' => 'guru']
        );

        $guru = Guru::firstOrCreate(
            ['id_user' => $userGuru->id],
            [
                'nip' => '242220321', 
                'nama' => 'Guru 1',
                'email' => 'guru190@gmail.com'
            ]
        );

        $userMitra = User::firstOrCreate(
            ['username' => 'mitra1'],
            ['name' => 'Mitra 1', 'password' => 'passwordmitra', 'role' => 'mitra']
        );

        $mitra = Mitra::firstOrCreate(
            ['id_user' => $userMitra->id],
            [
                'nama_instansi' => 'PT Mitra Sejati',
                'nama_pembimbing' => 'Pembimbing 1',
                'alamat' => 'Jl. Mawar No 22, Kediri',
                'latitude' => -7.6051000,
                'longitude' => 111.9042000,
                'no_telp' => '08148992012',
            ]
        );

        $userSiswa = User::firstOrCreate(
            ['username' => 'siswa1'],
            ['name' => 'Siswa 1', 'password' => 'passwordsiswa', 'role' => 'siswa']
        );

        $siswa = Siswa::firstOrCreate(
            ['id_user' => $userSiswa->id],
            ['nis' => '009212211', 'nama' => 'Putra Sejati','email' => 'siswa190@gmail.com' ,'kelas' => 'XII TKJ']
        );

        Penempatan::firstOrCreate(
            ['id_siswa' => $siswa->id, 'id_periode' => $periode->id],
            [
                'id_guru' => $guru->id,
                'id_mitra' => $mitra->id,
                'tanggal_mulai' => '2026-11-01',
                'tanggal_selesai' => '2027-02-28',
                'status' => 'aktif',

            ]
        );
    }
}