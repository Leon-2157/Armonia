# System Architecture & Tech Stack - WebLandingPage

Dokumentasi ini menjelaskan infrastruktur, teknologi, serta alat pengembang yang digunakan dalam proyek *landing page* **Armonia App**.

---

## Tech Stack Overview

| Kategori | Teknologi | Versi | Deskripsi |
| :--- | :--- | :--- | :--- |
| **Backend Framework** | **Laravel** | `13.34.0` | Mengelola routing, controller, konfigurasi, dan rendering template Blade. |
| **Runtime Environment** | **PHP** | `8.5.11` | Bahasa pemrograman utama server-side, berjalan di container `php:8.5-cli`. |
| **Database** | **PostgreSQL** | `16.15` | Database relasional yang berjalan secara terisolasi di container `postgres:16-alpine`. |
| **Database Driver** | **PDO PostgreSQL** | `php-pgsql` | Driver PHP untuk menjembatani komunikasi Laravel ke PostgreSQL di dalam container. |
| **CSS Framework** | **Tailwind CSS** | `v4.3.3` | Framework CSS *utility-first* berbasis `@tailwindcss/vite` untuk penataan gaya responsif. |
| **JS Framework** | **Alpine.js** | `v3.17.4` | Framework JavaScript super ringan untuk interaktivitas UI (FAQ, modal, menu mobile). |
| **Asset Bundler** | **Vite** | `v8.3.2` | Pemroses aset frontend secara *real-time* dan otomatis memuat font `Instrument Sans`. |
| **JavaScript Runtime** | **Node.js** | `v22.23.1` | Runtime JavaScript yang berjalan di container `node:22-alpine` untuk menjalankan Vite dan NPM. |
| **Package Manager** | **NPM** | `10.9.8` | Manajer paket untuk mengelola dependensi frontend. |

---

## DevOps & Development Tools

* **Podman Compose**: *Containerization* orkestrasi untuk menjalankan service App (PHP), Frontend (Node), dan Database (PostgreSQL) secara terisolasi dan terintegrasi.
* **DBeaver**: Database Manager untuk mengelola, memantau, dan memvisualisasikan isi database PostgreSQL.
* **Fedora Linux**: Sistem operasi lokal sebagai *host* yang mengeksekusi Podman.

---

## Service & Port Configuration

| Service | Host | Port | Keterangan |
| :--- | :--- | :--- | :--- |
| **Laravel App (Backend)** | `127.0.0.1` | `8000` | Endpoint utama aplikasi. |
| **Vite Server (Frontend)**| `127.0.0.1` | `5173` | Server hot-reload untuk aset. |
| **PostgreSQL (Database)** | `127.0.0.1` | `5432` | Kredensial diatur melalui file `.env`. |

---
