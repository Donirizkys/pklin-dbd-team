@extends('layouts.app')
@section('title', 'Dashboard Admin')

@php
    $menu = [
        ['dashboard', 'dashboard', 'Dashboard', 'admin.dashboard'],
        ['kelola', 'edit', 'Kelola Data', null],
        ['penempatan', 'building', 'Penempatan PKL', null],
        ['monitoring', 'pin', 'Monitoring Presensi Global', null],
        ['laporan', 'chart', 'Laporan & Rekap', null],
        ['koordinasi', 'handshake', 'Koordinasi Mitra Industri', null],
        ['penilaian', 'star', 'Penilaian Siswa PKL', null],
    ];
    $tabs = [
        'siswa'      => ['Data Siswa (NISN)', $stats['totalSiswa'], 'graduation'],
        'pembimbing' => ['Data Pembimbing', $stats['totalPb'], 'user-check'],
        'dudi'       => ['Mitra DUDI', $stats['totalDudi'], 'building'],
    ];
@endphp

@section('body')
<div class="app">
  <aside class="sidebar">
    <div class="brand"><x-icon name="user" :size="28" /><span>Presensi<br>PKL</span></div>
    <div class="side-label">ADMINISTRASI</div>
    <nav class="side-nav">
      @foreach ($menu as [$key, $ico, $label, $route])
        @if ($route)
          <a href="{{ route($route) }}" class="{{ $key === 'dashboard' ? 'active' : '' }}"><x-icon :name="$ico" :size="17" /><span>{{ $label }}</span></a>
        @else
          <a href="#" data-soon><x-icon :name="$ico" :size="17" /><span>{{ $label }}</span></a>
        @endif
      @endforeach
    </nav>
    <div class="side-bottom">
      <a href="#" data-soon><x-icon name="settings" :size="17" /><span>Pengaturan Sistem</span></a>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="linklike"><x-icon name="logout" :size="20" /><span>Logout</span></button>
      </form>
    </div>
  </aside>

  <div class="main">
    <header class="topbar">
      <form method="GET" action="{{ route('admin.dashboard') }}" class="search">
        <x-icon name="search" :size="16" />
        <input type="search" name="q" value="{{ $q }}" placeholder="Cari Siswa, NISN, Pembimbing, Mitra...">
        @foreach (request()->except(['q', 'page']) as $k => $v)
          @if (! is_array($v))<input type="hidden" name="{{ $k }}" value="{{ $v }}">@endif
        @endforeach
      </form>
      <div class="ta-chip"><x-icon name="graduation" :size="16" /><span>{{ config('pklin.tahun_ajaran') }}</span></div>
    </header>

    <main class="content">
      <section class="welcome-admin">
        <div class="welcome-row">
          <h1>Selamat Datang, {{ auth()->user()->name }}</h1>
          <div class="clock-chip"><x-icon name="clock" :size="16" /><span>Hari ini, <b id="clock">--:--:--</b> WIB</span>
            <button type="button" class="refresh" data-refresh aria-label="Muat ulang"><x-icon name="refresh" :size="15" /></button></div>
        </div>
        <div class="stats stats-4">
          <div class="card stat"><div class="stat-top"><span class="mono lbl">TOTAL SISWA</span><span class="ico-sm blue"><x-icon name="users" :size="15" /></span></div>
            <div class="stat-val"><b>{{ $stats['totalSiswa'] }}</b><span class="mono">Siswa Terdaftar</span></div></div>
          <div class="card stat"><div class="stat-top"><span class="mono lbl">PEMBIMBING AKTIF</span><span class="ico-sm"><x-icon name="user-check" :size="15" /></span></div>
            <div class="stat-val"><b>{{ $stats['totalPb'] }}</b><span class="mono">Guru Sekolah</span></div></div>
          <div class="card stat"><div class="stat-top"><span class="mono lbl">MITRA DUDI</span><span class="ico-sm"><x-icon name="building" :size="15" /></span></div>
            <div class="stat-val"><b>{{ $stats['totalDudi'] }}</b><span class="mono">Perusahaan</span></div></div>
          <div class="card stat"><div class="stat-top"><span class="mono lbl">PRESENSI HARI INI</span><span class="ico-sm green"><x-icon name="user-check" :size="15" /></span></div>
            <div class="stat-val"><b class="green">{{ $stats['hadir'] }}</b><span class="mono">/ {{ $stats['totalSiswa'] }} Hadir</span></div>
            <div class="mono mini"><span class="c-blue">{{ $stats['izin'] }} Izin</span> &bull; <span class="c-red">{{ $stats['alpha'] }} Alpha/Libur</span></div></div>
        </div>
      </section>

      <section class="card panel">
        <div class="tabs-row">
          <div class="tabs">
            @foreach ($tabs as $key => [$label, $count, $ico])
              <a href="{{ request()->fullUrlWithQuery(['tab' => $key, 'page' => null]) }}" class="tab {{ $key === $tab ? 'active' : '' }}">
                <x-icon :name="$ico" :size="14" /> {{ $label }} <span class="count">{{ $count }}</span>
              </a>
            @endforeach
          </div>
          @if ($tab === 'siswa')
            <form method="GET" action="{{ route('admin.dashboard') }}" class="pill-select filter">
              <x-icon name="filter" :size="14" />
              @foreach (request()->except(['jurusan', 'page']) as $k => $v)
                @if (! is_array($v))<input type="hidden" name="{{ $k }}" value="{{ $v }}">@endif
              @endforeach
              <select name="jurusan" onchange="this.form.submit()">
                <option value="">Filter: Semua Jurusan</option>
                @foreach ($jurusanList as $j)<option value="{{ $j }}" @selected($j === $jur)>{{ $j }}</option>@endforeach
              </select>
            </form>
          @endif
        </div>

        <div class="table-wrap">
          <table class="tbl center">
            <thead>
              @if ($tab === 'siswa')
                <tr><th>NISN &amp; Siswa</th><th>Kelas / Jurusan</th><th>Lokasi Mitra PKL</th><th>Pembimbing Sekolah</th></tr>
              @elseif ($tab === 'pembimbing')
                <tr><th>Nama &amp; NIP</th><th>Email</th><th>No. Telp</th><th>Siswa Bimbingan</th></tr>
              @else
                <tr><th>Nama Perusahaan</th><th>Alamat</th><th>No. Telp</th><th>Siswa Magang</th></tr>
              @endif
            </thead>
            <tbody>
              @forelse ($rows as $x)
                <tr>
                  @if ($tab === 'siswa')
                    <td><div class="person"><span class="avatar"><x-icon name="user" :size="20" /></span><div><b>{{ $x->nama }}</b><small>NISN: {{ $x->nisn }}</small></div></div></td>
                    <td class="strong">{{ $x->kelas }}</td>
                    <td class="strong left">{{ $x->nama_perusahaan ?? '-' }}</td>
                    <td>{{ $x->pembimbing ?? '-' }}</td>
                  @elseif ($tab === 'pembimbing')
                    <td><div class="person"><span class="avatar"><x-icon name="user" :size="20" /></span><div><b>{{ $x->nama }}</b><small>NIP: {{ $x->nip }}</small></div></div></td>
                    <td>{{ $x->email }}</td>
                    <td class="mono">{{ $x->telp }}</td>
                    <td class="strong">{{ $x->jml }} siswa</td>
                  @else
                    <td class="strong">{{ $x->nama_perusahaan }}</td>
                    <td>{{ $x->alamat }}</td>
                    <td class="mono">{{ $x->telp }}</td>
                    <td class="strong">{{ $x->jml }} siswa</td>
                  @endif
                </tr>
              @empty
                <tr><td colspan="4" class="empty">Data tidak ditemukan.</td></tr>
              @endforelse
            </tbody>
          </table>
        </div>
        @include('admin._pagination')
      </section>
    </main>
  </div>
</div>
@endsection
