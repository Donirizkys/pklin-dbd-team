# PROPOSAL PROYEK
## MATA KULIAH SOFTWARE DEVELOPMENT

### APLIKASI PRESENSI PKL

### PKLin

*(Logo Universitas Nusantara PGRI Kediri)*

**Disusun oleh:**

| Nama | NPM | Peran |
|---|---|---|
| Doni Rizki Styawan | 2413020064 | Project Manager |
| Afrizal Bima Chever Pragata | 2413020067 | Backend Developer |
| Muhammad Destha Prastyo | 2413020086 | Frontend Developer |

Software Development
Teknik Informatika
Fakultas Teknik dan Ilmu Komputer
Universitas Nusantara PGRI Kediri
2026 / 2027

---

## 1. Pendahuluan

### 1.1 Latar Belakang

Perkembangan teknologi informasi mendorong lembaga pendidikan untuk menerapkan sistem digital dalam mendukung kegiatan akademik dan administrasi sekolah. Namun, masih terdapat berbagai permasalahan dalam pengelolaan sistem pendidikan, antara lain presensi siswa yang belum terintegrasi, pengelolaan pembelajaran melalui e-learning, proses Penerimaan Peserta Didik Baru (PPDB) berbasis web, serta pelaksanaan ujian secara digital.

Salah satu permasalahan yang cukup penting adalah sistem presensi siswa, baik dalam kegiatan belajar mengajar di sekolah maupun saat Praktik Kerja Lapangan (PKL). Presensi konvensional menggunakan tanda tangan atau lembar absensi berisiko menimbulkan kesalahan pencatatan dan manipulasi kehadiran. Sistem absensi berbasis RFID dapat menjadi alternatif, tetapi membutuhkan kartu identitas dan perangkat pembaca khusus, serta memiliki keterbatasan dalam memastikan bahwa siswa benar-benar berada di lokasi yang seharusnya.

Dari berbagai permasalahan tersebut, kelompok kami memilih untuk berfokus pada absensi PKL karena kehadiran siswa selama PKL merupakan salah satu aspek penting dalam menilai kedisiplinan dan tanggung jawab siswa di dunia kerja. Berbeda dengan absensi di sekolah, kegiatan PKL dilaksanakan di lokasi industri atau instansi yang berbeda-beda, sehingga pihak sekolah tidak dapat memantau kehadiran siswa secara langsung setiap hari. Apabila absensi masih dilakukan secara manual, terdapat risiko titip absen, ketidaksesuaian data kehadiran, kesulitan memverifikasi lokasi siswa, serta keterlambatan pencatatan dan pelaporan kegiatan PKL. Padahal, data presensi menjadi dasar bagi sekolah untuk memantau kedisiplinan, mengevaluasi pelaksanaan PKL, dan memastikan siswa mengikuti kegiatan sesuai ketentuan. Di sisi lain, pihak Dunia Usaha dan Dunia Industri (DUDI) sebagai tempat siswa melaksanakan PKL merupakan pihak yang paling mengetahui kinerja siswa sehari-hari, sehingga perlu dilibatkan dalam pemantauan siswa dan penginputan nilai PKL.

Oleh karena itu, diperlukan solusi digital yang mampu meningkatkan akurasi, efisiensi, dan transparansi proses presensi. Pengembangan sistem presensi berbasis aplikasi mobile dengan fitur foto diri, pencatatan lokasi secara real-time, dan pelaporan kegiatan PKL dapat menjadi alternatif untuk mengatasi permasalahan tersebut. Sistem ini diharapkan dapat membantu sekolah, khususnya SMK Muhammadiyah 1 Ngadiluwih, dalam memantau kehadiran siswa dan mengelola kegiatan PKL secara lebih praktis, terstruktur, dan akuntabel.

### 1.2 Rumusan Masalah

Berdasarkan latar belakang tersebut, rumusan masalah yang ingin diselesaikan melalui pengembangan aplikasi PKLin adalah sebagai berikut.

1. Bagaimana mengatasi risiko titip absen, kesalahan pencatatan, dan kesulitan memverifikasi lokasi siswa pada proses absensi PKL di SMK Muhammadiyah 1 Ngadiluwih?
2. Bagaimana merancang sistem presensi berbasis aplikasi mobile yang dilengkapi foto diri dan verifikasi lokasi secara real-time agar presensi dilakukan oleh siswa yang bersangkutan di lokasi PKL yang sesuai?
3. Bagaimana menyediakan fitur pelaporan kegiatan harian serta dashboard pemantauan dan rekap presensi agar guru pembimbing dan DUDI dapat memantau kehadiran dan kedisiplinan siswa PKL serta DUDI dapat menginput nilai siswa di instansinya secara lebih mudah, akurat, dan transparan?

### 1.3 Tujuan Pengembangan Aplikasi

Tujuan pengembangan aplikasi PKLin adalah membangun sistem presensi siswa PKL berbasis aplikasi mobile dan dashboard web yang membantu SMK Muhammadiyah 1 Ngadiluwih memantau kehadiran serta kegiatan siswa secara lebih praktis, terstruktur, dan akuntabel. Secara khusus, tujuan pengembangan aplikasi ini adalah sebagai berikut.

1. Menyediakan fitur presensi masuk dan pulang secara digital yang dilengkapi pengambilan foto diri melalui kamera serta pencatatan koordinat GPS dan waktu presensi, sehingga risiko titip absen dan kesalahan pencatatan dapat dikurangi.
2. Menerapkan validasi jarak siswa terhadap lokasi PKL yang terdaftar, sehingga presensi hanya sah apabila siswa berada di lokasi PKL yang sesuai.
3. Menyediakan fitur pengisian jurnal kegiatan harian, riwayat presensi dan status kehadiran, serta dashboard pemantauan dan rekap presensi yang dapat diakses oleh guru pembimbing, DUDI, dan administrator, serta fitur input nilai siswa PKL oleh DUDI.

---

## 2. Tinjauan Pustaka (Review Artikel Jurnal)

Tinjauan pustaka berikut memuat review tiga artikel jurnal ilmiah yang relevan dengan teknologi yang digunakan pada aplikasi PKLin, yaitu Flutter untuk aplikasi mobile dan Laravel sebagai back-end. Artikel yang direview membahas presensi atlet mahasiswa berbasis Flutter dan Laravel dengan JSON Web Token dan geo-tagging, sistem presensi pegawai berbasis Flutter dan Laravel dengan face recognition dan geolocation, serta sistem tiketing wisata berbasis Flutter dan Laravel dengan dashboard analitik.

### 2.1 Artikel Jurnal 1

| | |
|---|---|
| **Judul Artikel** | Implementasi Fitur Keamanan dengan JSON Web Token dan Fitur Geotagging pada Aplikasi Web Service Training From Home |
| **Penulis** | Aal Hibsy dan Arief Wibowo |
| **Tahun** | 2020 |
| **Jurnal** | Jurnal RESTI (Rekayasa Sistem dan Teknologi Informasi), Vol. 4, No. 4, 2020, hlm. 618–626. |
| **Ringkasan Penelitian** | Penelitian ini membangun layanan web (web service) RESTful berbasis Laravel dan aplikasi mobile Android berbasis Flutter untuk presensi atlet mahasiswa yang berlatih dari rumah selama pandemi Covid-19 (Training From Home). Keamanan autentikasi menggunakan JSON Web Token (JWT) dengan algoritma HS256, sehingga setiap permintaan ke server harus membawa token yang diperoleh saat login dan berlaku selama 24 jam. Pada aplikasi, presensi (check-in) dilakukan dengan mengambil foto dan mengirim koordinat lokasi melalui fitur geo-tagging yang memanfaatkan package geolocator, geocoder, dan Google Maps API. Pengujian dengan metode black box melibatkan sebelas atlet di lokasi yang berbeda. Seluruh layanan web service berfungsi dengan waktu respons rata-rata 44,8 ms, permintaan dengan token tidak valid ditolak, dan akurasi geo-tagging mencapai 90,9% (10 dari 11 lokasi sesuai dengan Google Maps). Satu titik bergeser sekitar 50 meter yang diduga akibat gangguan sinyal perangkat. |

### 2.2 Artikel Jurnal 2

| | |
|---|---|
| **Judul Artikel** | Pengembangan Sistem Presensi Digital Berbasis Face Recognition dan Geolocation untuk Meningkatkan Efisiensi Kehadiran Pegawai |
| **Penulis** | Nadiza Lediwara, Sembada Denrineksa Bimorogo, Aulia Khamas Heikmakhtiar, Alvin Reychan Perdana Putra, Yoga Sunami, Muhammad Firdaus Assalaam, dan Adam Mardamsyah |
| **Tahun** | 2025 |
| **Jurnal** | Jurnal Algoritma, Vol. 22, No. 2, November 2025, hlm. 277–286. DOI: 10.33364/algoritma/v.22-2.2518 |
| **Ringkasan Penelitian** | Penelitian ini merancang dan membangun sistem presensi personel berbasis web dan mobile pada Instansi ABC untuk menggantikan pencatatan manual yang lambat dan rawan kesalahan. Aplikasi mobile dikembangkan dengan Flutter, sedangkan aplikasi web untuk admin dikembangkan dengan Laravel (Laravel Filament). Presensi masuk dan keluar dilakukan dengan validasi wajah (face recognition), dan hanya dapat dikirim apabila pengguna berada dalam radius lokasi kantor yang ditetapkan admin (geolocation). Sistem juga dilengkapi pengajuan dan persetujuan izin serta pengelolaan peran pengguna. Pengembangan menggunakan metode Development Research dengan pemodelan UML, diuji dengan black box testing, dan dievaluasi dengan kerangka PIECES. Hasilnya, seluruh fitur berjalan sesuai rancangan, potensi kecurangan dapat diminimalkan, dan rekap kehadiran dapat dipercepat dari hitungan hari menjadi kurang dari satu jam. Penulis menyarankan pengujian pada skala pengguna yang lebih besar, penambahan notifikasi otomatis, serta alternatif validasi berbasis NFC. |

### 2.3 Artikel Jurnal 3

| | |
|---|---|
| **Judul Artikel** | Implementasi Tiketing Wisata Berbasis Flutter dan Laravel dengan Fitur Dashboard Analitik Pengunjung |
| **Penulis** | Bibit Raikhan Azzaki, Pungkas Subarkah, dan Nandang Hermanto |
| **Tahun** | 2026 |
| **Jurnal** | Jurnal Algoritma, Vol. 23, No. 1, Mei 2026, hlm. 318–328. DOI: 10.33364/algoritma/v.23-1.3229 |
| **Ringkasan Penelitian** | Penelitian ini mengembangkan sistem tiketing digital pada objek wisata Curug Pinang untuk menggantikan karcis sobek dan pencatatan konvensional yang berpotensi menimbulkan kesalahan data pengunjung dan transaksi serta menyulitkan rekapitulasi laporan. Sistem terdiri atas aplikasi kasir loket berbasis mobile yang dibangun dengan Flutter, serta Laravel sebagai back-end yang terhubung dengan basis data dan dashboard analitik berbasis web. Pengembangan menggunakan model Waterfall dan pengujian dilakukan dengan Black Box Testing. Hasilnya, sistem mampu menggantikan pencatatan manual, mengurangi kesalahan pencatatan transaksi, dan mempermudah rekapitulasi data pengunjung dan pendapatan secara otomatis. |

### 2.4 Analisis Hasil Review

Hasil review menunjukkan bahwa Flutter sebagai aplikasi mobile dan Laravel sebagai back-end telah digunakan pada tiga penelitian dengan konteks yang berbeda, yaitu presensi atlet mahasiswa (Hibsy dan Wibowo, 2020), presensi pegawai instansi (Lediwara dkk., 2025), dan tiketing wisata (Azzaki dkk., 2026). Pola arsitekturnya sama: aplikasi Flutter berkomunikasi dengan Laravel melalui web service atau REST API, sedangkan Laravel juga menyediakan antarmuka web untuk pengelolaan dan rekap data. Pola ini sejalan dengan arsitektur PKLin, yaitu aplikasi mobile untuk siswa dan dashboard web untuk guru pembimbing, DUDI, dan administrator. Ketiga penelitian juga diuji dengan black box testing.

Dari sisi fitur, Hibsy dan Wibowo (2020) paling relevan dengan inti presensi PKLin karena presensi dilakukan dari lokasi masing-masing pengguna dengan foto dan koordinat GPS, serta diamankan dengan JSON Web Token. Penelitian tersebut juga memberi gambaran akurasi geo-tagging (90,9%) dan mencatat gangguan sinyal sebagai penyebab selisih posisi. Lediwara dkk. (2025) menambahkan validasi radius lokasi yang ditetapkan admin dan verifikasi wajah, sedangkan Azzaki dkk. (2026) menunjukkan penggunaan dashboard web untuk rekap data secara otomatis. Di sisi lain, tidak ada artikel yang ditujukan untuk PKL siswa SMK. Sistem Hibsy dan Wibowo (2020) mencatat lokasi tanpa membandingkannya dengan lokasi tujuan tertentu, sistem Lediwara dkk. (2025) dibuat untuk pegawai instansi dan belum memuat pelaporan kegiatan harian, dan penelitian Azzaki dkk. (2026) berfokus pada tiket wisata.

**Tabel 2.1 Perbandingan hasil review artikel dengan aplikasi PKLin**

| Aspek | Hibsy & Wibowo (2020) | Lediwara dkk. (2025) | Azzaki dkk. (2026) | PKLin (usulan) |
|---|---|---|---|---|
| Konteks | Presensi atlet mahasiswa (latihan dari rumah) | Presensi pegawai instansi | Tiketing objek wisata | Presensi dan kegiatan PKL siswa SMK |
| Aplikasi mobile | Flutter (Android) | Flutter | Flutter (kasir mobile) | Flutter |
| Back-end dan web | Laravel (REST web service) | Laravel (Filament) untuk web admin | Laravel dan dashboard web | Laravel dan dashboard web |
| Lokasi (GPS) | Ya (geo-tagging lokasi atlet) | Ya (validasi radius dari admin) | Tidak disebutkan | Ya (validasi jarak terhadap lokasi PKL terdaftar) |
| Foto / wajah | Ya (foto saat presensi) | Ya (face recognition) | Tidak disebutkan | Ya (foto diri melalui kamera) |
| Pencatatan kegiatan | Sebagian (materi latihan dicatat saat presensi) | Tidak disebutkan | Tidak disebutkan | Ya (jurnal kegiatan harian) |
| Rekap / dashboard | Riwayat dan detail presensi di aplikasi | Ya (daftar presensi pada web admin) | Ya (dashboard analitik) | Ya (dashboard rekap presensi) |

Berdasarkan perbandingan tersebut, pemilihan Flutter untuk aplikasi mobile serta Laravel untuk back-end dan dashboard web pada PKLin didukung oleh penelitian terdahulu yang menggunakan kombinasi teknologi yang sama. Kontribusi PKLin terletak pada penerapannya untuk presensi PKL siswa SMK, dengan menggabungkan presensi masuk dan pulang berfoto diri, validasi jarak terhadap lokasi PKL yang terdaftar, jurnal kegiatan harian, dashboard pemantauan dan rekap bagi guru pembimbing, DUDI, dan administrator, serta input nilai siswa PKL oleh DUDI. Masukan dari artikel yang direview, seperti autentikasi berbasis token (JWT) untuk mengamankan komunikasi aplikasi dengan API, penetapan radius lokasi oleh admin, dan antisipasi gangguan sinyal GPS, akan dipertimbangkan pada tahap analisis kebutuhan dan perancangan sistem.

---

## 3. Deskripsi Aplikasi yang Akan Dikembangkan

PKLin adalah aplikasi presensi dan pelaporan kegiatan Praktik Kerja Lapangan (PKL) yang dikembangkan untuk SMK Muhammadiyah 1 Ngadiluwih. Aplikasi ini terdiri atas dua bagian, yaitu aplikasi mobile yang digunakan siswa PKL untuk melakukan presensi dan mengisi jurnal kegiatan, serta dashboard web yang digunakan guru pembimbing, DUDI, dan administrator untuk memantau kehadiran, menginput nilai, dan mengelola data.

Presensi masuk dan pulang dilakukan dengan mengambil foto diri melalui kamera, kemudian sistem mencatat koordinat GPS dan waktu presensi. Koordinat tersebut dibandingkan dengan lokasi PKL siswa yang telah terdaftar, sehingga presensi hanya sah apabila siswa berada dalam jarak yang ditetapkan dari lokasi PKL. Selain presensi, siswa mengisi jurnal kegiatan harian dan dapat melihat riwayat presensi beserta status kehadirannya.

Seluruh data presensi dan jurnal kegiatan tersimpan secara digital di server sehingga guru pembimbing dapat memantau siswa melalui dashboard tanpa harus mendatangi setiap lokasi PKL. Aplikasi mobile dikembangkan untuk platform Android menggunakan Flutter, back-end dan REST API menggunakan Laravel, basis data menggunakan PostgreSQL, serta perancangan antarmuka menggunakan Figma.

Pengguna utama aplikasi PKLin terdiri atas empat peran, yaitu siswa PKL, guru pembimbing, Dunia Usaha dan Dunia Industri (DUDI), dan administrator. Peran dan hak akses masing-masing pengguna ditunjukkan pada Tabel 3.1.

**Tabel 3.1 Pengguna aplikasi PKLin**

| Pengguna | Platform | Peran dan hak akses |
|---|---|---|
| Siswa PKL | Aplikasi mobile | Login dan logout, melakukan presensi masuk dan pulang dengan foto diri dan GPS, mengisi jurnal kegiatan harian, melihat riwayat presensi dan status kehadiran. |
| Guru Pembimbing | Dashboard web | Login dan logout, memantau presensi siswa bimbingan (waktu, foto, koordinat, dan jarak), melihat jurnal kegiatan siswa, melihat rekap presensi. |
| DUDI | Dashboard web | Login dan logout, menginput nilai siswa PKL di instansinya, memantau siswa PKL yang ditempatkan di instansinya (presensi, jurnal kegiatan, dan rekap kehadiran). |
| Administrator | Dashboard web | Login dan logout, mengelola akun siswa dan guru pembimbing; mengelola data lokasi PKL beserta batas jarak (radius), menghubungkan siswa dengan guru pembimbing dan lokasi PKL, melihat rekap presensi seluruh siswa. |

---

## 4. Analisis Kebutuhan Sistem

### 4.1 Permasalahan yang Ingin Diselesaikan

Permasalahan utama yang ingin diselesaikan adalah sulitnya sekolah memastikan dan memantau kehadiran serta kegiatan siswa selama PKL. Siswa melaksanakan PKL di lokasi industri atau instansi yang berbeda-beda, sehingga guru pembimbing tidak dapat mengawasi kehadiran setiap hari secara langsung. Permasalahan tersebut dapat dirinci sebagai berikut.

1. **Risiko titip absen dan manipulasi kehadiran.** Presensi manual dengan tanda tangan atau lembar absensi memungkinkan siswa menitipkan absen kepada orang lain dan sulit dibuktikan kebenarannya.
2. **Kesulitan memverifikasi lokasi siswa.** Sekolah tidak dapat memastikan bahwa siswa benar-benar berada di lokasi PKL saat presensi. Sistem berbasis RFID juga hanya memastikan kartu yang dipindai, bukan lokasi pemiliknya.
3. **Kesalahan dan keterlambatan pencatatan serta pelaporan.** Data kehadiran dan laporan kegiatan yang ditulis secara manual berisiko tidak sesuai, hilang, atau terlambat dikumpulkan.
4. **Keterbatasan pemantauan oleh guru pembimbing.** Guru belum memiliki rekap kehadiran dan kegiatan siswa yang terpusat, sehingga evaluasi kedisiplinan siswa memerlukan waktu dan tenaga yang besar.

### 4.2 Kebutuhan Fungsional

Kebutuhan fungsional PKLin disusun berdasarkan fitur yang dirancang untuk menjawab permasalahan pada subbab 4.1. Setiap kebutuhan menjelaskan fungsi yang dapat dilakukan sistem bagi pengguna, sebagaimana ditunjukkan pada Tabel 4.1.

**Tabel 4.1 Kebutuhan fungsional aplikasi PKLin**

| Kode | Kebutuhan | Deskripsi | Pengguna |
|---|---|---|---|
| KF-01 | Login dan logout berdasarkan peran | Sistem memverifikasi akun pengguna dan menampilkan fitur sesuai perannya (siswa, guru pembimbing, DUDI, atau administrator). Logout mengakhiri sesi pengguna. | Semua pengguna |
| KF-02 | Presensi masuk | Siswa melakukan presensi masuk pada hari PKL dan sistem mencatat waktu presensi. | Siswa PKL |
| KF-03 | Presensi pulang | Siswa melakukan presensi pulang setelah presensi masuk tercatat pada hari yang sama. | Siswa PKL |
| KF-04 | Pengambilan foto diri | Siswa mengambil foto diri melalui kamera saat presensi masuk dan pulang sebagai bukti kehadiran. | Siswa PKL |
| KF-05 | Pengambilan koordinat GPS dan waktu | Sistem mengambil koordinat GPS perangkat dan mencatat waktu setiap presensi. | Siswa PKL |
| KF-06 | Validasi jarak terhadap lokasi PKL | Sistem menghitung jarak koordinat siswa terhadap lokasi PKL yang terdaftar. Presensi diterima hanya jika jarak berada dalam radius yang ditetapkan; jika tidak, presensi ditolak disertai pesan. | Siswa PKL |
| KF-07 | Riwayat presensi dan status kehadiran | Siswa melihat daftar presensi beserta jam masuk, jam pulang, dan status kehadiran (Hadir, Belum Pulang, atau Tidak Hadir). | Siswa PKL |
| KF-08 | Pengisian jurnal kegiatan harian | Siswa mengisi dan menyimpan jurnal kegiatan PKL setiap hari, serta melihat jurnal yang sudah diisi. | Siswa PKL |
| KF-09 | Pemantauan presensi | Guru dan DUDI melihat data presensi siswa bimbingan, meliputi waktu, foto, koordinat, dan jarak dari lokasi PKL. | Guru pembimbing, DUDI |
| KF-10 | Rekap presensi | Sistem menampilkan rekap presensi yang dapat disaring berdasarkan tanggal, siswa, dan tempat PKL. | Guru pembimbing, administrator |
| KF-11 | Pengelolaan data pengguna | Administrator menambah, mengubah, dan menonaktifkan akun siswa dan guru pembimbing, serta menetapkan guru pembimbing dan lokasi PKL setiap siswa. | Administrator |
| KF-12 | Pengelolaan lokasi PKL | Administrator mengelola data tempat PKL, yaitu nama, alamat, koordinat, dan radius presensi yang diperbolehkan. | Administrator |
| KF-14 | Input nilai siswa PKL | DUDI menginput nilai siswa PKL yang ditempatkan di instansinya dan dapat melihat kembali nilai yang telah diinput. | DUDI |

### 4.3 Kebutuhan Non-Fungsional

Kebutuhan non-fungsional menjelaskan kualitas yang harus dipenuhi PKLin agar dapat digunakan dengan baik. Kebutuhan tersebut disusun dengan mempertimbangkan hasil review artikel pada Bab 2, antara lain autentikasi berbasis token dan antisipasi gangguan sinyal GPS. Kebutuhan non-fungsional ditunjukkan pada Tabel 4.2.

**Tabel 4.2 Kebutuhan non-fungsional aplikasi PKLin**

| Kode | Aspek | Kebutuhan |
|---|---|---|
| KNF-01 | Keamanan autentikasi | Setiap permintaan ke API harus membawa token (JSON Web Token) yang diperoleh saat login dan memiliki masa berlaku. Permintaan tanpa token atau dengan token tidak valid ditolak. Kata sandi disimpan dalam bentuk hash. |
| KNF-02 | Keamanan komunikasi | Pertukaran data antara aplikasi mobile, dashboard web, dan server menggunakan HTTPS. |
| KNF-03 | Hak akses | Fitur dan data dibatasi menurut peran: siswa hanya mengakses data miliknya, guru pembimbing hanya data siswa bimbingannya, DUDI hanya data siswa PKL di instansinya, dan administrator mengakses seluruh data. |
| KNF-04 | Kinerja | Proses utama (login, pengiriman presensi, dan tampilan riwayat) ditargetkan selesai kurang dari 3 detik pada kondisi jaringan seluler yang normal. |
| KNF-05 | Keakuratan data presensi | Waktu presensi dicatat oleh server, bukan oleh perangkat siswa, agar jam tidak dapat dimanipulasi. Koordinat dan jarak dari lokasi PKL disimpan bersama setiap data presensi. |
| KNF-06 | Keandalan | Presensi masuk dan pulang tidak boleh tercatat ganda pada hari yang sama. Aplikasi menampilkan pesan yang jelas apabila GPS nonaktif, sinyal lemah, atau koneksi terputus, sehingga siswa dapat mengulang presensi. Data pada database dicadangkan secara berkala. |
| KNF-07 | Kemudahan penggunaan | Antarmuka sederhana dan konsisten sehingga siswa dapat melakukan presensi dengan sedikit langkah dan dapat memahami status presensi (misalnya jarak dari lokasi PKL) tanpa bantuan. |
| KNF-08 | Kompatibilitas | Aplikasi mobile berjalan pada perangkat Android. Dashboard web dapat diakses melalui peramban modern (Chrome, Edge, atau Firefox) pada komputer atau laptop. |
| KNF-09 | Privasi data | Foto diri dan koordinat lokasi hanya dapat dilihat oleh pengguna yang berwenang (guru pembimbing, DUDI untuk siswa di instansinya, dan administrator) dan hanya digunakan untuk keperluan pemantauan PKL. |
| KNF-10 | Kemudahan pemeliharaan | Aplikasi mobile dan dashboard web dipisahkan dari logika bisnis melalui REST API Laravel, sehingga perubahan pada tampilan atau aturan presensi dapat dilakukan secara terpisah. |

---

## 5. Perancangan Sistem

Perancangan sistem PKLin disusun berdasarkan kebutuhan yang telah dianalisis pada Bab 4. Bagian ini menjelaskan rancangan teknis aplikasi yang mencakup arsitektur sistem, desain database, dan desain antarmuka pengguna. Aplikasi dikembangkan dengan Flutter untuk aplikasi mobile, Laravel untuk back-end, PostgreSQL untuk database, dan Figma untuk perancangan UI/UX.

### 5.1 Arsitektur Sistem

PKLin menggunakan arsitektur client-server yang terdiri atas tiga lapisan, yaitu lapisan pengguna, lapisan logika aplikasi, dan lapisan data. Aplikasi mobile dan dashboard web tidak mengakses database secara langsung, melainkan melalui back-end Laravel yang sama menggunakan HTTPS dan REST API. Rancangan arsitektur ditunjukkan pada Gambar 5.1.

*(Gambar 5.1 — Diagram arsitektur: Aplikasi Mobile Flutter (Siswa) dan Dashboard Web (Admin, Guru Pembimbing, DUDI) berkomunikasi melalui HTTPS / REST API dengan Back-end Laravel (Autentikasi, Presensi, Jurnal, Penilaian, Rekap); Back-end terhubung ke Database PostgreSQL (query / data) dan Penyimpanan File Foto Presensi (simpan / ambil file).)*

**Gambar 5.1 Arsitektur sistem PKLin**

Komponen-komponen utama pada arsitektur tersebut dijelaskan pada Tabel 5.1.

**Tabel 5.1 Komponen arsitektur sistem**

| Lapisan | Komponen | Fungsi |
|---|---|---|
| **Pengguna** | Aplikasi mobile (Flutter) | Antarmuka bagi siswa PKL untuk login, mengambil foto diri, membaca koordinat GPS, melakukan presensi, mengisi jurnal, dan melihat riwayat. Aplikasi mengirim permintaan ke API dan menampilkan hasilnya. |
| **Pengguna** | Dashboard web | Antarmuka bagi guru pembimbing, DUDI, dan administrator untuk memantau presensi, memeriksa jurnal, melihat rekap, menginput nilai siswa PKL (DUDI), serta mengelola data pengguna dan lokasi PKL. |
| **Logika aplikasi** | Back-end Laravel (REST API) | Memproses autentikasi dan hak akses (JWT), memvalidasi data, menerapkan aturan presensi (jarak terhadap lokasi PKL, waktu, dan presensi tidak ganda), mengelola jurnal kegiatan dan nilai PKL, serta menyusun laporan dan rekap. |
| **Data** | Database PostgreSQL | Menyimpan data akun, profil siswa, guru pembimbing, dan DUDI, lokasi PKL, presensi, jurnal kegiatan, dan nilai PKL. |
| **Data** | Penyimpanan file | Menyimpan berkas foto diri hasil presensi masuk dan pulang. Database hanya menyimpan lokasi (path) berkas foto. |

Alur komunikasi antarkomponen dapat dijelaskan melalui proses presensi sebagai berikut.

1. Siswa login pada aplikasi mobile. Back-end memverifikasi akun dan mengembalikan token JWT.
2. Siswa membuka menu presensi, mengambil foto diri, dan aplikasi membaca koordinat GPS perangkat.
3. Aplikasi mengirim foto dan koordinat ke back-end melalui HTTPS REST API dengan menyertakan token.
4. Back-end memeriksa token, mengambil data lokasi PKL siswa dari database, lalu menghitung jarak antara koordinat siswa dan lokasi PKL serta membandingkannya dengan radius yang ditetapkan.
5. Jika jarak berada dalam radius dan siswa belum melakukan presensi yang sama pada hari itu, back-end menyimpan foto, lalu menyimpan data presensi (waktu server, koordinat, dan jarak) ke database. Jika tidak, presensi ditolak disertai pesan.
6. Back-end mengirim hasil dalam format JSON dan aplikasi menampilkannya kepada siswa. Data yang sama kemudian dapat dilihat guru pembimbing, DUDI, dan administrator pada dashboard web.

### 5.2 Desain Database

Data yang dikelola PKLin meliputi akun pengguna, profil siswa, guru pembimbing, dan DUDI, lokasi PKL, data presensi, jurnal kegiatan, nilai PKL. Data tersebut disimpan pada database relasional PostgreSQL, dengan hubungan antartabel ditunjukkan pada diagram relasi data (ERD) pada Gambar 5.2.

*(Gambar 5.2 — Diagram ERD PKLin; lihat berkas PDF asli untuk gambar.)*

**Gambar 5.2 Diagram relasi data (ERD) PKLin**

**Tabel 5.2 Struktur data pada database**

| Tabel | Fungsi | Atribut utama |
|---|---|---|
| users | Menyimpan akun untuk login semua pengguna | id, username, password (hash), role (siswa, guru, dudi, atau admin), status_akun (aktif, nonaktif) |
| siswa | Menyimpan profil siswa PKL | id, id user, nis, nama, kelas, email, no telp, alamat |
| guru | Menyimpan profil guru pembimbing PKL | id, id user, nama, nip, email, no telp |
| mitra | Menyimpan data DUDI, pembimbing dan koordinat lokasi | id, id_user, nama instansi, nama pembimbing, alamat, longtitude, latitude, no_telp |
| periode | Menyimpan periode pelakasanaan PKL berdasarkan tahun ajaran | id, tahun ajaran, semester, tanggal mulai, tanggal berakhir, status (berjalan, berakhir) |
| penempatan | Menhubungkan siswa dengan guru pembimbing, mitra dan periode PKL | id, id_siswa, id_guru, id_mitra, id_periode, tanggal mulai, tanggal selesai. |
| presensi | Menyimpan waktu, koordinat, jarak, foto, dan status kehadiran | id, id_penempatan, tanggal, waktu masuk, waktu pulang, koordinat masuk, koordinat pulang, jarak masuk, jarak pulang, foto masuk, foto pulang, status kehadiran |
| kegiatan | Menyimpan jurnal kegiatan harian siswa PKL | id, id_penempatan, tanggal, isi kegiatan |
| aturan | Menyimpan aturan presensi untuk tiap DuDI | id, id_mitra, jam_masuk, jam_pulang, radius_gps |
| hari_libur | Menyimpan tanggal libur untuk tiap DuDI | id, id_mitra, tanggal, keterangan |
| Penilaian | Menyimpan nilai akhir PKL siswa | id, id_penempatan, nilai akhir, predikat |
| aspek_penilaian | Menyimpan aspek dan bobot yang digunakan dalam penilaian | Id, nama aspek, bobot |
| detail_penilaian | Menyimpan nilai dan catatan untuk tiap aspek | id, id_penilaian, id_aspek, nilai, catatan |

Hubungan antardata pada database dirancang sebagai berikut.

- Setiap akun hanya memiliki satu profil sesuai rolenya (siswa, guru pembimbing, dudi).
- Satu siswa hanya punya satu penempatan, sedangkan guru pembimbing dan dudi dapat memiliki banyak penempatan.
- Satu penempatan memiliki banyak data presensi dan data kegiatan.
- Siswa hanya boleh memiliki satu penempatan dalam satu periode.
- Satu penempatan hanya punya satu penilaian nilai akhir.
- Penilaian terdiri dari banyak aspek dan bobot yang bermacam.
- Mitra dapat memiliki banyak data aturan, dan hari libur.

Berkas foto presensi disimpan pada penyimpanan file di server, sedangkan database hanya menyimpan lokasi berkas pada kolom foto_masuk dan foto_pulang.

### 5.3 Desain Antarmuka (UI)

Desain antarmuka menggambarkan tampilan yang akan digunakan pengguna untuk berinteraksi dengan PKLin. Pada tahap proposal ini, rancangan berupa wireframe awal yang akan disempurnakan menjadi prototipe menggunakan Figma. Rancangan dibagi menjadi tampilan aplikasi mobile untuk siswa PKL dan tampilan dashboard web untuk guru pembimbing, DUDI, dan administrator.

**Aplikasi mobile.** Tampilan utama aplikasi mobile terdiri atas halaman login, beranda, presensi, dan riwayat presensi. Rancangan desain untuk tampilannya sebagai berikut.

1. **Desain Tampilan Mobile untuk Siswa PKL**

   *(Wireframe: halaman login, beranda dengan ringkasan Hadir/Izin/Libur dan daftar kegiatan PKL, riwayat presensi bulanan, serta halaman presensi dengan lokasi, status kehadiran Hadir/Izin/Sakit, dan catatan.)*

2. **Desain Tampilan Dashboard untuk Administrator**

   *(Wireframe: sidebar menu — Kelola Data, Penempatan PKL, Monitoring Presensi Global, Laporan & Rekap, Koordinasi Mitra Industri, Penilaian Siswa PKL, Pengaturan Sistem, Logout; ringkasan total siswa, pembimbing aktif, mitra aktif, dan presensi hari ini; tabel data siswa, pembimbing, dan mitra DUDI.)*

3. **Desain Tampilan Dashboard untuk Mitra DUDI**

   *(Wireframe: sidebar menu — Dashboard, Monitoring Presensi, Penilaian Siswa PKL; ringkasan total bimbingan dan hadir hari ini; tabel presensi harian siswa bimbingan.)*

4. **Desain Tampilan Dashboard untuk Pembimbing Sekolah**

   *(Wireframe: sidebar menu — Dashboard, Monitoring Presensi, Koordinasi Mitra Industri; ringkasan total bimbingan, hadir hari ini, dan mitra DUDI; tabel presensi harian siswa bimbingan.)*

---

## 6. Pembagian Tugas Kelompok

Pengembangan PKLin dilaksanakan oleh satu kelompok yang terdiri atas tiga anggota dengan peran masing-masing, yaitu Project Manager, Front-End Developer, dan Back-End Developer. Pembagian tugas bertujuan agar setiap anggota memiliki tanggung jawab yang jelas, namun seluruh anggota tetap bekerja sama pada tahap yang membutuhkan kontribusi bersama. Tanggung jawab utama setiap peran adalah sebagai berikut.

- **Project Manager:** mengoordinasikan jadwal dan pembagian pekerjaan, menyusun studi literatur, analisis kebutuhan, arsitektur sistem, integrasi sistem, dan dokumentasi proyek.
- **Front-End Developer:** merancang antarmuka (wireframe dan prototipe Figma) serta mengembangkan aplikasi mobile Flutter dan tampilan dashboard web.
- **Back-End Developer:** merancang database PostgreSQL, mengembangkan REST API Laravel (autentikasi, validasi jarak, presensi, jurnal, dan rekap), serta menyiapkan deployment.

Rincian pekerjaan setiap tahap proyek ditunjukkan pada Work Breakdown Structure (WBS) pada Tabel 6.1.

**Tabel 6.1 Work Breakdown Structure (WBS) proyek PKLin**

| No | Tahapan Proyek | Deskripsi Pekerjaan | Penanggung Jawab | Output yang Dihasilkan |
|---|---|---|---|---|
| 1 | Studi Literatur | Mereview tiga artikel jurnal tentang presensi berbasis Flutter dan Laravel, geo-tagging, dan dashboard rekap | Project Manager | Ringkasan artikel dan analisis jurnal |
| 2 | Analisis Kebutuhan | Mengidentifikasi permasalahan absensi PKL serta menyusun kebutuhan fungsional dan non-fungsional | Project Manager | Dokumen analisis kebutuhan |
| 3 | Perancangan Sistem | Menyusun arsitektur sistem dan alur presensi (aplikasi mobile, REST API Laravel, dan database) | Project Manager | Diagram arsitektur sistem |
| 4 | Desain Database | Merancang tabel users, siswa, guru_pembimbing, dudi, tempat_pkl, presensi, jurnal_kegiatan, dan nilai_pkl beserta relasinya | Back-End Developer | Diagram ERD dan desain data |
| 5 | Desain Antarmuka | Merancang wireframe dan mockup aplikasi mobile serta dashboard web di Figma | Front-End Developer | Desain UI |
| 6 | Implementasi Frontend | Mengembangkan aplikasi Flutter (login, presensi dengan kamera dan GPS, jurnal, riwayat) dan tampilan dashboard | Front-End Developer | Modul antarmuka aplikasi |
| 7 | Implementasi Backend | Mengembangkan REST API Laravel: autentikasi JWT, validasi jarak, pengelolaan presensi dan jurnal, serta rekap | Back-End Developer | Modul logika aplikasi |
| 8 | Integrasi Sistem | Menghubungkan aplikasi mobile dan dashboard web dengan REST API agar sistem berjalan utuh | Project Manager | Sistem terintegrasi |
| 9 | Pengujian Sistem | Menguji fungsi presensi, validasi jarak, jurnal, dan rekap dengan black box testing | Semua Anggota | Laporan pengujian |
| 10 | Dokumentasi Proyek | Menyusun dokumentasi penggunaan dan pengembangan aplikasi | Project Manager | Dokumentasi proyek |
| 11 | Deployment Sistem | Menyiapkan server, database, dan aplikasi agar dapat didemonstrasikan | Back-End Developer | Aplikasi siap digunakan |
| 12 | Presentasi Proyek | Mempresentasikan dan mendemonstrasikan PKLin kepada dosen | Semua Anggota | Presentasi proyek |

---

## 7. Rencana Pengembangan Proyek

Pengembangan PKLin direncanakan berlangsung selama delapan minggu, mulai dari studi literatur hingga penyempurnaan dan dokumentasi. Tahap-tahap pengerjaan mengikuti urutan WBS pada Tabel 6.1, dengan pengembangan fitur dibagi menjadi dua tahap implementasi. Rencana pengembangan ditunjukkan pada Tabel 7.1.

**Tabel 7.1 Rencana pengembangan proyek PKLin**

| No | Tahapan Pengembangan | Aktivitas Utama | Penanggung Jawab | Estimasi Waktu |
|---|---|---|---|---|
| 1 | Studi Literatur | Mereview tiga artikel jurnal yang relevan dan menentukan kontribusi PKLin | Project Manager | Minggu 1 |
| 2 | Analisis Kebutuhan | Menyusun permasalahan serta kebutuhan fungsional dan non-fungsional | Project Manager | Minggu 2 |
| 3 | Perancangan Sistem | Menyusun arsitektur sistem dan alur presensi | Semua Anggota | Minggu 3 |
| 4 | Desain Database & UI | Merancang ERD dan wireframe/mockup Figma | Frontend & Backend | Minggu 4 |
| 5 | Implementasi Tahap 1 | Membangun struktur dasar, login berbasis peran, dan fitur presensi masuk dan pulang (foto, GPS, validasi jarak) | Frontend & Backend | Minggu 5 |
| 6 | Implementasi Tahap 2 | Membangun jurnal kegiatan, riwayat presensi, dan dashboard rekap serta integrasi antarkomponen | Frontend & Backend | Minggu 6 |
| 7 | Integrasi & Pengujian | Mengintegrasikan seluruh komponen dan menguji fungsi aplikasi dengan black box testing | Semua Anggota | Minggu 7 |
| 8 | Penyempurnaan & Dokumentasi | Memperbaiki sistem, deployment, menyusun dokumentasi dan presentasi | Semua Anggota | Minggu 8 |

--

## 8. Daftar Pustaka

Azzaki, B. R., Subarkah, P., & Hermanto, N. (2026). Implementasi tiketing wisata berbasis Flutter dan Laravel dengan fitur dashboard analitik pengunjung. *Jurnal Algoritma, 23*(1), 318–328. https://doi.org/10.33364/algoritma/v.23-1.3229

Hibsy, A., & Wibowo, A. (2020). Implementasi fitur keamanan dengan JSON Web Token dan fitur geo-tagging pada aplikasi web service Training From Home. *Jurnal RESTI (Rekayasa Sistem dan Teknologi Informasi), 4*(4), 618–626.

Lediwara, N., Bimorogo, S. D., Heikmakhtiar, A. K., Putra, A. R. P., Sunami, Y., Assalaam, M. F., & Mardamsyah, A. (2025). Pengembangan sistem presensi digital berbasis face recognition dan geolocation untuk meningkatkan efisiensi kehadiran pegawai. *Jurnal Algoritma, 22*(2), 277–286. https://doi.org/10.33364/algoritma/v.22-2.2518
