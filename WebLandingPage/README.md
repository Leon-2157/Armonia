# Armonia Web Landing Page

Proyek Landing Page untuk Armonia App. Proyek ini berjalan sepenuhnya di dalam container (Podman/Docker) sehingga tidak perlu menginstal PHP, Node.js, atau PostgreSQL secara lokal di OS host Anda.

## Kebutuhan Sistem
- **Podman** (disarankan untuk Fedora/RHEL) atau **Docker**
- `podman-compose` atau `docker-compose`

## Panduan Menjalankan Proyek (Development)

Langkah-langkah berikut akan mengatur seluruh environment secara otomatis.

**Langkah 1: Salin file konfigurasi**
```bash
cp .env.example .env
```
*(Sesuaikan isi `.env` jika diperlukan, khususnya bagian kredensial database).*

**Langkah 2: Bangun dan nyalakan semua container**
```bash
podman compose up -d --build
```
*Perintah ini akan secara otomatis mengunduh image, menjalankan `composer install` (backend), dan `npm install` (frontend) di latar belakang.*

**Langkah 3: Jalankan Database Migration**
Setelah proses di atas selesai (tunggu sekitar 1-2 menit pada run pertama), jalankan perintah berikut untuk membuat tabel-tabel di database:
```bash
podman compose exec app php artisan migrate
```

## Akses Aplikasi
- **Aplikasi Laravel (Backend):** [http://localhost:8000](http://localhost:8000)
- **Vite Server (Frontend Asset):** [http://localhost:5173](http://localhost:5173)

Untuk dokumentasi lebih lengkap mengenai arsitektur dan instruksi deployment ke server, silakan baca folder `docs/`.