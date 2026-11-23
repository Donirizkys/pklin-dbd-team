<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dudi;
use App\Models\Pembimbing;
use App\Models\Presensi;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __invoke(Request $request): View
    {
        // ---------- Statistik ----------
        $totalSiswa = Siswa::count();
        $totalPb    = Pembimbing::whereHas('user', fn ($q) => $q->where('aktif', true))->count();
        $totalDudi  = Dudi::count();

        $pr = Presensi::whereDate('tanggal', now()->toDateString())
            ->selectRaw("SUM(status = 'hadir') AS hadir, SUM(status IN ('izin','sakit')) AS izin")
            ->first();
        $hadir = (int) ($pr->hadir ?? 0);
        $izin  = (int) ($pr->izin ?? 0);
        $alpha = max(0, $totalSiswa - $hadir - $izin);

        // ---------- Tab, pencarian, filter ----------
        $tab = in_array($request->query('tab'), ['siswa', 'pembimbing', 'dudi'], true) ? $request->query('tab') : 'siswa';
        $q   = trim((string) $request->query('q', ''));
        $jur = trim((string) $request->query('jurusan', ''));
        $per = in_array((int) $request->query('per', 5), [5, 10, 25, 50], true) ? (int) $request->query('per', 5) : 5;
        $like = '%' . $q . '%';

        if ($tab === 'siswa') {
            $query = DB::table('siswa as s')
                ->leftJoin('penempatan as pn', 'pn.siswa_id', '=', 's.id')
                ->leftJoin('dudi as d', 'd.id', '=', 'pn.dudi_id')
                ->leftJoin('pembimbing as pb', 'pb.id', '=', 'pn.pembimbing_id')
                ->leftJoin('users as u', 'u.id', '=', 'pb.user_id')
                ->select('s.nisn', 's.nama', 's.kelas', 'd.nama_perusahaan', 'u.name as pembimbing')
                ->orderBy('s.nama');
            if ($q !== '') {
                $query->where(fn ($w) => $w->where('s.nama', 'like', $like)->orWhere('s.nisn', 'like', $like)
                    ->orWhere('s.kelas', 'like', $like)->orWhere('d.nama_perusahaan', 'like', $like)->orWhere('u.name', 'like', $like));
            }
            if ($jur !== '') {
                $query->where('s.jurusan', $jur);
            }
        } elseif ($tab === 'pembimbing') {
            $query = DB::table('pembimbing as pb')
                ->join('users as u', 'u.id', '=', 'pb.user_id')
                ->select('u.name as nama', 'pb.nip', 'pb.email', 'pb.telp',
                    DB::raw('(SELECT COUNT(*) FROM penempatan x WHERE x.pembimbing_id = pb.id) AS jml'))
                ->orderBy('u.name');
            if ($q !== '') {
                $query->where(fn ($w) => $w->where('u.name', 'like', $like)->orWhere('pb.nip', 'like', $like)->orWhere('pb.email', 'like', $like));
            }
        } else {
            $query = DB::table('dudi as d')
                ->select('d.nama_perusahaan', 'd.alamat', 'd.telp',
                    DB::raw('(SELECT COUNT(*) FROM penempatan x WHERE x.dudi_id = d.id) AS jml'))
                ->orderBy('d.nama_perusahaan');
            if ($q !== '') {
                $query->where(fn ($w) => $w->where('d.nama_perusahaan', 'like', $like)->orWhere('d.alamat', 'like', $like)->orWhere('d.telp', 'like', $like));
            }
        }

        return view('admin.dashboard', [
            'tab'         => $tab,
            'q'           => $q,
            'jur'         => $jur,
            'rows'        => $query->paginate($per)->withQueryString(),
            'jurusanList' => Siswa::query()->distinct()->orderBy('jurusan')->pluck('jurusan'),
            'stats'       => compact('totalSiswa', 'totalPb', 'totalDudi', 'hadir', 'izin', 'alpha'),
        ]);
    }
}
