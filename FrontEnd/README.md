# PKLin (Presensi PKL) - Laravel

Tahap saat ini: **Login** dan **Dashboard Admin** (tab Data Siswa, Data Pembimbing, Mitra DUDI).
Dashboard DUDI, Pembimbing, dan Siswa menyusul.

## Kebutuhan
- XAMPP (Apache + MySQL), PHP 8.2+, Composer, Laravel 11 atau lebih baru

## Instalasi
```bash
composer create-project laravel/laravel pklin
cd pklin
# salin semua isi paket ini ke dalam folder pklin (timpa file yang sama)
```
Atur `.env`:
```
APP_NAME=PKLin
APP_TIMEZONE=Asia/Jakarta
APP_LOCALE=id
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pklin
DB_USERNAME=root
DB_PASSWORD=
```
Buat database kosong `pklin` lewat phpMyAdmin (http://localhost/phpmyadmin), lalu:
```bash
php artisan key:generate
php artisan migrate --seed
php artisan serve
```
Buka http://127.0.0.1:8000 dan masuk dengan `admin` / `admin123`.

Ulang dari awal: `php artisan migrate:fresh --seed`

## Isi paket
- `routes/web.php`, `config/pklin.php`
- `app/Http/Controllers/Auth/LoginController.php`, `app/Http/Controllers/Admin/DashboardController.php`
- `app/Http/Middleware/RoleMiddleware.php`, `app/Models/*`
- `database/migrations/*`, `database/seeders/*`
- `resources/views/*`, `public/css/pklin.css`, `public/js/pklin.js`

Menu lain dan tombol aksi masih placeholder. Ganti password contoh sebelum dipakai sungguhan.
