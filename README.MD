<div align="center">

# PKLin

### Aplikasi Presensi & Pelaporan Kegiatan PKL

Presensi berfoto, tervalidasi lokasi GPS, dan terpantau real-time untuk Praktik Kerja Lapangan siswa SMK.

![Flutter](https://img.shields.io/badge/Flutter-02569B?style=for-the-badge&logo=flutter&logoColor=white)
![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PostgreSQL](https://img.shields.io/badge/PostgreSQL-4169E1?style=for-the-badge&logo=postgresql&logoColor=white)
![Figma](https://img.shields.io/badge/Figma-F24E1E?style=for-the-badge&logo=figma&logoColor=white)

</div>

---

## Information

| | |
|---|---|
| **Kelompok** | Kelompok 1 |
| **Mata Kuliah** | Software Development |
| **Program Studi** | Teknik Informatika, Universitas Nusantara PGRI Kediri |
| **Studi Kasus** | SMK Muhammadiyah 1 Ngadiluwih |
| **Deskripsi** | Repository tema DBD |

| Nama | NPM | Peran |
|---|---|---|
| Doni Rizki Styawan | 2413020064 | Project Manager |
| Afrizal Bima Chever Pragata | 2413020067 | Backend Developer |
| Muhammad Destha Prastyo | 2413020086 | Frontend Developer |

---

## Tentang PKLin

Selama PKL, siswa tersebar di berbagai industri dan instansi sehingga sekolah tidak bisa memantau kehadiran mereka setiap hari. Presensi manual rawan **titip absen** dan salah catat, sedangkan sistem RFID hanya memastikan kartu yang dipindai, bukan lokasi pemiliknya.

PKLin menjawab masalah tersebut dengan aplikasi mobile untuk siswa dan dashboard web untuk guru pembimbing, DUDI, dan administrator. Presensi dilakukan dengan **foto diri** dan **koordinat GPS**, dan hanya sah jika siswa berada dalam **radius lokasi PKL** yang terdaftar.

---

## Fitur Utama

**Aplikasi Mobile (Siswa PKL)**

- Login dan logout
- Presensi masuk dan pulang dengan foto diri
- Pencatatan koordinat GPS dan waktu presensi
- Validasi jarak terhadap lokasi PKL
- Jurnal kegiatan harian
- Riwayat presensi dan status kehadiran

**Dashboard Web**

| Peran | Kemampuan |
|---|---|
| Guru Pembimbing | Memantau presensi siswa bimbingan (waktu, foto, koordinat, jarak), melihat jurnal, dan rekap presensi |
| DUDI | Memantau siswa di instansinya dan menginput nilai siswa PKL |
| Administrator | Mengelola akun, data lokasi PKL beserta radius, penempatan siswa, dan rekap presensi seluruh siswa |

---

## Arsitektur Sistem

Aplikasi mobile dan dashboard web tidak mengakses database langsung, melainkan melalui satu back-end Laravel (REST API dengan autentikasi JWT melalui HTTPS).

![Arsitektur Sistem PKLin](gambar/arsitektur_sistem.png)

---

## Tech Stack

| Komponen | Teknologi |
|---|---|
| Aplikasi mobile | Flutter (Android) |
| Back-end & REST API | Laravel |
| Autentikasi | JSON Web Token (JWT) |
| Database | PostgreSQL |
| Desain UI/UX | Figma |

---

<div align="center">

Kelompok 1 · Software Development · Teknik Informatika
Universitas Nusantara PGRI Kediri · 2026 / 2027

</div>