<?php

namespace Database\Seeders;

use App\Models\Dudi;
use App\Models\Pembimbing;
use App\Models\Penempatan;
use App\Models\Presensi;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Database\Seeder;

class PklinSeeder extends Seeder
{
    public function run(): void
    {
        // Akun (password di-hash otomatis oleh cast 'hashed' pada model User)
        User::create(['name' => 'Administrator Sistem', 'username' => 'admin', 'password' => 'admin123', 'role' => 'admin']);

        $pb = [];
        foreach ([
            ['pembimbing1', 'Budi Santoso, S.Kom', '198501122010011005', 'budi.santoso@gmail.com', '081234567890'],
            ['pembimbing2', 'Siti Rahayu, S.Pd',   '198803202011012008', 'siti.rahayu@gmail.com',   '081298765432'],
        ] as [$username, $nama, $nip, $email, $telp]) {
            $u = User::create(['name' => $nama, 'username' => $username, 'password' => 'pembimbing123', 'role' => 'pembimbing']);
            $pb[] = Pembimbing::create(['user_id' => $u->id, 'nip' => $nip, 'email' => $email, 'telp' => $telp])->id;
        }

        $dd = [];
        foreach ([
            ['dudi1', 'PT Gudang Gudang Tbk',     'Jl. Raya Kediri No. 10, Kediri',  '0354123456'],
            ['dudi2', 'PT Telkom Indonesia Tbk',  'Jl. Dhoho No. 25, Kediri',        '0354765432'],
            ['dudi3', 'Kreasi Studio Digital',    'Jl. Veteran No. 8, Kediri',       '0354555010'],
            [null,    'Bengkel Resmi Auto2000',   'Jl. Brawijaya No. 77, Kediri',    '0354888020'],
        ] as [$username, $nama, $alamat, $telp]) {
            $uid = $username
                ? User::create(['name' => $nama, 'username' => $username, 'password' => 'dudi123', 'role' => 'dudi'])->id
                : null;
            $dd[] = Dudi::create(['user_id' => $uid, 'nama_perusahaan' => $nama, 'alamat' => $alamat, 'telp' => $telp])->id;
        }

        // [nisn, nama, kelas, jurusan, idx dudi, idx pembimbing]
        $siswa = [
            ['0051234501', 'Ahmad Fauzi',      'XII TKJ 1', 'TKJ', 0, 0],
            ['0051234502', 'Dewi Lestari',     'XII TKJ 2', 'TKJ', 0, 0],
            ['0051234503', 'Rizky Pratama',    'XII TKJ 1', 'TKJ', 0, 0],
            ['0051234504', 'Nabila Putri',     'XII TKJ 2', 'TKJ', 0, 0],
            ['0051234505', 'Muhammad Iqbal',   'XII RPL 1', 'RPL', 1, 0],
            ['0051234506', 'Salsabila Ayu',    'XII RPL 1', 'RPL', 1, 0],
            ['0051234507', 'Bagas Setiawan',   'XII RPL 2', 'RPL', 1, 1],
            ['0051234508', 'Annisa Rahmawati', 'XII RPL 2', 'RPL', 1, 1],
            ['0051234509', 'Fajar Nugroho',    'XII DKV 1', 'DKV', 2, 1],
            ['0051234510', 'Putri Maharani',   'XII DKV 1', 'DKV', 2, 1],
            ['0051234511', 'Yoga Aditya',      'XII DKV 2', 'DKV', 2, 1],
            ['0051234512', 'Dimas Prakoso',    'XII TKR 2', 'TKR', 3, 1],
            ['0051234513', 'Eko Wahyudi',      'XII TKR 1', 'TKR', 3, 1],
        ];
        $ids = [];
        foreach ($siswa as [$nisn, $nama, $kelas, $jurusan, $di, $pi]) {
            $s = Siswa::create(compact('nisn', 'nama', 'kelas', 'jurusan'));
            $ids[] = $s->id;
            Penempatan::create(['siswa_id' => $s->id, 'dudi_id' => $dd[$di], 'pembimbing_id' => $pb[$pi]]);
        }

        // Presensi hari ini (variasi status); indeks tanpa data = belum presensi
        $plan = [
            0 => ['07:42:00', 'hadir', null],
            2 => ['06:30:00', 'sakit', 'Surat Dokter Diunggah'],
            3 => ['07:55:00', 'hadir', null],
            4 => ['07:30:00', 'hadir', null],
            5 => ['08:12:00', 'hadir', 'Terlambat karena macet'],
            6 => ['07:48:00', 'hadir', null],
            7 => ['07:00:00', 'izin',  'Keperluan keluarga'],
            8 => ['07:35:00', 'hadir', null],
            10 => ['07:50:00', 'hadir', null],
            11 => ['07:20:00', 'hadir', null],
        ];
        foreach ($plan as $i => [$jam, $status, $ket]) {
            Presensi::create(['siswa_id' => $ids[$i], 'tanggal' => now()->toDateString(), 'jam_masuk' => $jam, 'status' => $status, 'keterangan' => $ket]);
        }
    }
}
