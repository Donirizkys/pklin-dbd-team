# Dokumentasi Minggu 1 — Desain UI, Arsitektur Sistem, dan Desain Database PKLin

**Proyek:** PKLin — Aplikasi Presensi PKL
**Mata Kuliah:** Software Development, Teknik Informatika, Universitas Nusantara PGRI Kediri
**Studi kasus:** SMK Muhammadiyah 1 Ngadiluwih
**Alat perancangan:** Figma
**Berkas desain:** `Desain_UI.rar` (folder `Desain_UI/`)

---

## 1. Tujuan

Pada minggu pertama dilakukan perancangan antarmuka (UI) PKLin sebagai acuan pengembangan tahap berikutnya. Desain disusun berdasarkan kebutuhan fungsional pada proposal (Bab 4) dan wireframe awal pada subbab 5.3 proposal, kemudian disempurnakan menjadi desain visual di Figma.

Selain UI, pada minggu ini juga disusun **arsitektur sistem** dan **desain database (ERD)** sebagai landasan implementasi back-end. Desain UI dibagi menjadi dua bagian sesuai arsitektur sistem:

1. **Aplikasi mobile (Flutter)** untuk siswa PKL.
2. **Dashboard web (Laravel)** untuk administrator, DUDI, dan guru pembimbing.

## 2. Daftar Berkas Desain

| No | Berkas | Platform | Pengguna | Keterangan |
|---|---|---|---|---|
| 1 | `Login Siswa.png` | Mobile | Siswa PKL | Halaman login aplikasi mobile |
| 2 | `Dashboard Siswa.png` | Mobile | Siswa PKL | Beranda siswa |
| 3 | `Kamera Presensi.png` | Mobile | Siswa PKL | Pengambilan foto diri saat presensi |
| 4 | `Konfirmasi Presensi Detail.png` | Mobile | Siswa PKL | Konfirmasi dan detail presensi sebelum dikirim |
| 5 | `Riwayat Presensi.png` | Mobile | Siswa PKL | Daftar riwayat presensi dan status kehadiran |
| 6 | `Login Dashboard.png` | Web | Admin, DUDI, Guru | Halaman login dashboard web |
| 7 | `Dashboard Admin.png` | Web | Administrator | Dashboard administrator |
| 8 | `Dashboard DuDi.png` | Web | DUDI | Dashboard mitra DUDI |
| 9 | `Dashboard Pembimbing.png` | Web | Guru Pembimbing | Dashboard pembimbing sekolah |
| 10 | `DesainSofDev.png` | Mobile dan Web | Semua | Gabungan keseluruhan desain |

## 3. Langkah Pembuatan UI

1. **Menentukan kebutuhan tampilan.** Daftar layar diturunkan dari kebutuhan fungsional proposal, yaitu login (KF-01), presensi masuk dan pulang (KF-02, KF-03), foto diri (KF-04), GPS dan validasi jarak (KF-05, KF-06), riwayat presensi (KF-07), pemantauan dan rekap presensi (KF-09, KF-10), pengelolaan data (KF-11, KF-12), dan input nilai (KF-14).
2. **Memisahkan tampilan per peran.** Siswa memakai aplikasi mobile, sedangkan administrator, DUDI, dan guru pembimbing memakai dashboard web dengan menu yang dibatasi sesuai hak akses (KNF-03).
3. **Menyusun wireframe.** Tata letak dasar setiap halaman dibuat lebih dulu (lihat subbab 5.3 proposal) agar alur dan penempatan elemen disepakati sebelum desain visual dibuat.
4. **Membuat desain visual di Figma.** Wireframe dikembangkan menjadi desain visual dengan komponen yang konsisten (tombol, kolom input, kartu ringkasan, tabel, dan menu samping), sesuai kebutuhan kemudahan penggunaan (KNF-07).
5. **Mengekspor desain.** Setiap halaman diekspor ke PNG dan dikumpulkan dalam folder `Desain_UI`.

## 4. Desain Aplikasi Mobile (Siswa PKL)

Alur utama siswa: **Login → Beranda → Kamera Presensi → Konfirmasi Presensi → Riwayat Presensi**.

### 4.1 Login Siswa

![Login Siswa](Desain_UI/Login%20Siswa.png)

Halaman untuk masuk ke aplikasi menggunakan username dan password (KF-01). Token autentikasi yang diterima dari back-end dipakai pada setiap permintaan berikutnya (KNF-01).

### 4.2 Dashboard Siswa

![Dashboard Siswa](Desain_UI/Dashboard%20Siswa.png)

Beranda yang menjadi pusat navigasi. Berdasarkan wireframe, halaman ini menampilkan identitas siswa, ringkasan kehadiran (Hadir, Izin, Libur), daftar kegiatan PKL, serta menu navigasi bawah berisi riwayat, tombol presensi (kamera), dan bantuan.

### 4.3 Kamera Presensi

![Kamera Presensi](Desain_UI/Kamera%20Presensi.png)

Halaman untuk mengambil foto diri sebagai bukti kehadiran (KF-04). Elemen yang ada pada desain:

- **Tombol kembali** di kiri atas untuk kembali ke halaman sebelumnya.
- **Area pratinjau kamera** yang memenuhi sebagian besar layar.
- **Tombol flash** di bagian bawah kiri.
- **Tombol rana (shutter)** berbentuk lingkaran besar di tengah untuk mengambil foto.
- **Tombol ganti kamera** (depan/belakang) di bagian bawah kanan.

Foto yang diambil kemudian diteruskan ke halaman konfirmasi.

### 4.4 Konfirmasi Presensi Detail

![Konfirmasi Presensi Detail](Desain_UI/Konfirmasi%20Presensi%20Detail.png)

Halaman untuk memeriksa hasil foto dan data presensi sebelum dikirim. Pada tahap ini aplikasi mengirim foto dan koordinat GPS ke back-end, yang kemudian memvalidasi jarak terhadap lokasi PKL (KF-05, KF-06). Hasil validasi (diterima atau ditolak disertai pesan) ditampilkan kepada siswa. Pada wireframe awal, halaman ini memuat informasi lokasi, status kehadiran (Hadir, Izin, Sakit), dan kolom catatan.

### 4.5 Riwayat Presensi

![Riwayat Presensi](Desain_UI/Riwayat%20Presensi.png)

Halaman daftar presensi yang menampilkan tanggal, jam, dan status kehadiran (KF-07). Wireframe awal juga memuat ringkasan total hadir pada bulan berjalan.

## 5. Desain Dashboard Web

Dashboard web dipakai oleh tiga peran dan diakses melalui peramban (KNF-08). Setiap peran memiliki menu yang berbeda sesuai hak aksesnya.

### 5.1 Login Dashboard

![Login Dashboard](Desain_UI/Login%20Dashboard.png)

Halaman login bersama untuk administrator, DUDI, dan guru pembimbing (KF-01). Setelah login, sistem menampilkan dashboard sesuai peran.

### 5.2 Dashboard Administrator

![Dashboard Administrator](Desain_UI/Dashboard%20Admin.png)

Berdasarkan wireframe, dashboard administrator memuat:

- **Menu samping:** Dashboard, Kelola Data, Penempatan PKL, Monitoring Presensi Global, Laporan & Rekap, Koordinasi Mitra Industri, Penilaian Siswa PKL, Pengaturan Sistem, dan Logout.
- **Kartu ringkasan:** total siswa, pembimbing aktif, mitra aktif, dan presensi hari ini.
- **Tabel data** siswa, pembimbing, dan mitra DUDI, lengkap dengan aksi ubah dan hapus serta tombol tambah pengguna baru (KF-11, KF-12).

### 5.3 Dashboard DUDI

![Dashboard DUDI](Desain_UI/Dashboard%20DuDi.png)

Dashboard untuk mitra DUDI yang berisi:

- **Menu samping:** Dashboard, Monitoring Presensi, dan Penilaian Siswa PKL.
- **Kartu ringkasan:** total bimbingan dan jumlah siswa yang hadir hari ini.
- **Tabel presensi harian** siswa di instansinya, berisi waktu masuk, status presensi, dan tombol detail (KF-09).
- Akses ke input nilai siswa PKL (KF-14).

### 5.4 Dashboard Pembimbing

![Dashboard Pembimbing](Desain_UI/Dashboard%20Pembimbing.png)

Dashboard untuk guru pembimbing sekolah yang berisi:

- **Menu samping:** Dashboard, Monitoring Presensi, dan Koordinasi Mitra Industri.
- **Kartu ringkasan:** total bimbingan, hadir hari ini, dan jumlah mitra DUDI.
- **Tabel presensi harian** siswa bimbingan beserta filter status dan ekspor rekap (KF-09, KF-10).

## 6. Desain Gabungan

![Desain Gabungan](Desain_UI/DesainSofDev.png)

Berkas ini menyatukan seluruh halaman mobile dan web dalam satu tampilan sehingga alur dan konsistensi antarhalaman dapat dilihat sekaligus.

## 7. Arsitektur Sistem

PKLin memakai arsitektur client-server tiga lapisan: pengguna, logika aplikasi, dan data. Aplikasi mobile dan dashboard web tidak mengakses database secara langsung, tetapi selalu melalui satu back-end Laravel.

![Arsitektur Sistem PKLin](gambar/arsitektur_sistem.png)

| Lapisan | Komponen | Fungsi |
|---|---|---|
| Pengguna | Aplikasi Mobile (Flutter) | Antarmuka siswa PKL: login, foto diri, pembacaan GPS, presensi, jurnal, dan riwayat. |
| Pengguna | Dashboard Web | Antarmuka admin, guru pembimbing, dan DUDI untuk pemantauan, rekap, penilaian, dan pengelolaan data. |
| Logika aplikasi | Back-end Laravel (REST API) | Autentikasi, validasi jarak, presensi, jurnal, penilaian, dan rekap. |
| Data | Database PostgreSQL | Data akun, siswa, guru, DUDI, presensi, jurnal, dan nilai. |
| Data | Penyimpanan File | Menyimpan foto presensi; database hanya menyimpan path berkas. |

**Alur komunikasi pada diagram:**

1. Aplikasi mobile dan dashboard web berkomunikasi dengan back-end melalui **HTTPS / REST API** (KNF-02).
2. Back-end membaca dan menulis data ke database PostgreSQL (**Query / Data**).
3. Back-end menyimpan dan mengambil foto presensi di penyimpanan file (**Simpan / Ambil File**).

**Alur presensi:** siswa login dan menerima token JWT → mengambil foto dan koordinat GPS → data dikirim ke back-end dengan token → back-end menghitung jarak ke lokasi PKL dan membandingkannya dengan radius → jika sesuai dan belum ada presensi ganda, foto dan data (waktu server, koordinat, jarak) disimpan; jika tidak, presensi ditolak disertai pesan → hasil dikirim dalam JSON dan dapat dilihat di dashboard web.

## 8. Desain Database (ERD)

Database dirancang pada PostgreSQL dengan 13 tabel. Hubungan antartabel ditunjukkan pada ERD berikut.

![ERD PKLin](gambar/ERD_PKLin.png)

### 8.1 Struktur Tabel

| Tabel | Fungsi | Atribut utama |
|---|---|---|
| `users` | Akun login semua pengguna | id_user, username (unik), password (hash), role, status |
| `siswa` | Profil siswa PKL | id_siswa, id_user (FK, unik), nis (unik), nama, no_telp, email, kelas, alamat |
| `guru` | Profil guru pembimbing | id_guru, id_user (FK, unik), nip (unik), nama, email, no_telp |
| `mitra` | Data DUDI dan koordinat lokasi PKL | id_mitra, id_user (FK, unik), nama_instansi, nama_pembimbing, alamat, longitude, latitude, no_telp |
| `periode` | Periode PKL per tahun ajaran | id_periode, tahun_ajaran (unik), dan kolom lain (tersembunyi pada ERD) |
| `penempatan` | Menghubungkan siswa, guru, mitra, dan periode | id_penempatan, id_siswa (FK, unik), id_guru (FK), id_mitra (FK), id_periode (FK), tanggal_mulai, tanggal_selesai, status |
| `presensi` | Data presensi masuk dan pulang | id_presensi, id_penempatan (FK), tanggal, waktu_masuk, waktu_pulang, latitude/longitude masuk dan pulang, jarak_masuk_meter, jarak_pulang_meter, foto_masuk, foto_pulang, foto_bukti, status_kehadiran, catatan |
| `kegiatan` | Jurnal kegiatan harian | id_kegiatan, id_penempatan (FK), tanggal, isi_kegiatan |
| `penilaian` | Nilai akhir PKL | id_penilaian, id_penempatan (FK, unik), nilai_akhir, predikat, catatan, status |
| `aspek_penilaian` | Aspek dan bobot penilaian | id_aspek, nama_aspek, bobot |
| `detail_penilaian` | Nilai dan catatan per aspek | id_detail, id_penilaian (FK), id_aspek (FK), nilai, catatan |
| `aturan` | Aturan presensi tiap DUDI | id_aturan, id_mitra (FK), jam_masuk, jam_pulang, radius_gps |
| `hari_libur` | Tanggal libur tiap DUDI | id_hari_libur, id_mitra (FK), tanggal, keterangan |

### 8.2 Relasi Antartabel

| Relasi | Kardinalitas | Keterangan |
|---|---|---|
| `users` — `siswa` / `guru` / `mitra` | 1:1 | Setiap akun hanya memiliki satu profil sesuai perannya. |
| `siswa` — `penempatan` | 1:1 | Satu siswa hanya memiliki satu penempatan. |
| `guru` — `penempatan` | 1:N | Satu guru dapat membimbing banyak penempatan. |
| `mitra` — `penempatan` | 1:N | Satu DUDI dapat menerima banyak siswa. |
| `periode` — `penempatan` | 1:N | Satu periode memuat banyak penempatan. |
| `penempatan` — `presensi` | 1:N | Satu penempatan memiliki banyak data presensi. |
| `penempatan` — `kegiatan` | 1:N | Satu penempatan memiliki banyak jurnal harian. |
| `penempatan` — `penilaian` | 1:1 | Satu penempatan hanya memiliki satu nilai akhir. |
| `penilaian` — `detail_penilaian` | 1:N | Satu penilaian terdiri atas banyak nilai per aspek. |
| `aspek_penilaian` — `detail_penilaian` | 1:N | Satu aspek dipakai pada banyak detail penilaian. |
| `mitra` — `aturan` | 1:N | Satu DUDI dapat memiliki banyak aturan presensi. |
| `mitra` — `hari_libur` | 1:N | Satu DUDI dapat memiliki banyak hari libur. |

### 8.3 Catatan Rancangan

- Koordinat lokasi PKL disimpan pada tabel `mitra` dan radius presensi pada tabel `aturan`, sehingga validasi jarak (KF-06) dapat dihitung per DUDI.
- Tabel `presensi` menyimpan koordinat dan jarak (dalam meter) bersama setiap presensi, sesuai KNF-05.
- Foto disimpan sebagai path berkas (`foto_masuk`, `foto_pulang`), sedangkan berkas fotonya berada di penyimpanan file.
- Dibandingkan tabel pada proposal, ERD ini memuat kolom tambahan, yaitu `foto_bukti` dan `catatan` pada `presensi`, serta `catatan` dan `status` pada `penilaian`.
- Kolom bertipe enum pada ERD adalah `role` dan `status` (users), `status` (penempatan), `status_kehadiran` (presensi), dan `status` (penilaian).

## 9. Hasil Minggu 1

- Desain UI aplikasi mobile siswa PKL untuk alur login hingga riwayat presensi.
- Desain UI dashboard web untuk administrator, DUDI, dan guru pembimbing.
- Berkas desain diekspor dalam format PNG pada folder `Desain_UI`.
- Diagram arsitektur sistem tiga lapisan (Flutter, Laravel REST API, PostgreSQL, dan penyimpanan file).
- Diagram ERD dengan 13 tabel beserta relasinya.

## 10. Rencana Selanjutnya

- Menyempurnakan desain menjadi prototipe interaktif di Figma.
- Mengimplementasikan database PostgreSQL berdasarkan ERD dan membangun REST API Laravel.
- Mulai mengimplementasikan UI ke Flutter (mobile) dan dashboard web pada tahap implementasi.