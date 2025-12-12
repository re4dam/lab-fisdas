# Panduan Penggunaan

Ini catatan penting sehingga tidak perlu bolak balik mencari tahu

## Pertama Kali Setup Project

Jalankan perintah ini untuk membuat file `.env` dari file `.env.example`:

```
cp .env.example .env
```

Setelah itu generate `APP_KEY` dengan perintah:

```
php artisan key:generate
```

## Mendeploy pada Localhost

1. Untuk ngejalanin aplikasi, jalankan perintah ini di terminal:

    ```
    php artisan serve
    ```

2. Buka browser dan akses `http://localhost:8000` untuk melihat aplikasi berjalan.

## Mengintegrasikan Database dengan MySQL

Jalankan perintah ini di terminal:

```
php artisan migrate
```

Kalau databasenya udah ada, bisa pakai perintah ini untuk menghapus dan membuat ulang tabel:

```
php artisan migrate:fresh
```
