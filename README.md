<div align="center">

<img src="busguide/login/assets/icon/icon.png" alt="Bus Guide Logo" width="120" height="120" />

# 🚌 Bus Guide

**Aplikasi panduan transportasi bus berbasis lokasi untuk memudahkan perjalanan sehari-hari.**

[![Flutter](https://img.shields.io/badge/Flutter-3.11+-02569B?style=for-the-badge&logo=flutter&logoColor=white)](https://flutter.dev)
[![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![Filament](https://img.shields.io/badge/Filament-v5-FDAE4B?style=for-the-badge&logo=laravel&logoColor=white)](https://filamentphp.com)
[![Supabase](https://img.shields.io/badge/Supabase-Auth-3ECF8E?style=for-the-badge&logo=supabase&logoColor=white)](https://supabase.com)
[![License](https://img.shields.io/badge/License-MIT-blue?style=for-the-badge)](LICENSE)

[Fitur](#-fitur) • [Teknologi](#-teknologi) • [Arsitektur](#-arsitektur) • [Instalasi](#-instalasi) • [API](#-api-endpoint) • [Screenshot](#-screenshot)

</div>

---

## 📱 Tentang Bus Guide

**Bus Guide** adalah aplikasi mobile panduan transportasi bus yang membantu pengguna menemukan rute bus terbaik, melihat halte terdekat di peta secara realtime, memeriksa jadwal keberangkatan, dan menemukan destinasi wisata yang dapat dijangkau dengan bus.

Proyek ini terdiri dari dua komponen utama:
- 📱 **Aplikasi Mobile** — dibangun dengan **Flutter**, tersedia di Android
- 🖥️ **Panel Admin + API** — dibangun dengan **Laravel 12 + Filament v5**

---

## ✨ Fitur

### 📱 Aplikasi Mobile (Flutter)

| Fitur | Deskripsi |
|-------|-----------|
| 🔐 **Autentikasi** | Login, Register, Lupa Sandi, Reset Sandi via Supabase |
| 🗺️ **Cari Rute** | Temukan rute bus dari halte asal ke halte tujuan |
| 📍 **Peta Halte** | Lihat semua halte bus di peta interaktif secara realtime |
| 🚏 **Detail Halte** | Informasi lengkap halte: fasilitas, jadwal, dan wisata terdekat |
| 🛣️ **Peta Rute** | Visualisasi rute perjalanan di atas peta |
| 📅 **Jadwal Bus** | Cek jadwal keberangkatan dan estimasi kedatangan |
| 🏖️ **Wisata Terdekat** | Temukan destinasi wisata yang dapat dijangkau dari halte |
| 🔔 **Notifikasi** | Informasi dan pengumuman terbaru seputar layanan bus |
| 📊 **Rute Populer** | Tampilan rute yang paling banyak dicari pengguna |
| 👤 **Profil** | Manajemen akun dan foto profil |

### 🖥️ Panel Admin (Laravel + Filament)

| Fitur | Deskripsi |
|-------|-----------|
| 🏢 **Manajemen Halte** | CRUD halte beserta koordinat GPS & fasilitas |
| 🛣️ **Manajemen Rute** | Kelola rute bus dan urutan pemberhentian antar halte |
| 📅 **Manajemen Jadwal** | Atur jadwal keberangkatan per rute dan hari operasi |
| 🏖️ **Manajemen Wisata** | Data destinasi wisata yang terintegrasi dengan halte |
| 📢 **Notifikasi** | Kirim pengumuman langsung ke aplikasi pengguna |
| 🗺️ **Map Picker** | Input koordinat halte secara visual langsung dari peta |
| 📈 **Analitik Rute** | Pantau rute yang paling sering dicari pengguna |
| 🔗 **REST API** | API lengkap untuk konsumsi aplikasi mobile |

---

## 🛠️ Teknologi

### Mobile App
| Komponen | Teknologi |
|----------|-----------|
| Framework | Flutter 3.11+ / Dart |
| Autentikasi | Supabase Auth (Email, Google) |
| Peta | flutter_map (OpenStreetMap) + Google Maps |
| Lokasi | geolocator |
| HTTP Client | http package |
| Penyimpanan Lokal | shared_preferences |
| Animasi | flutter_animate |
| Font | Google Fonts (Poppins) |

### Backend & Admin
| Komponen | Teknologi |
|----------|-----------|
| Framework | Laravel 12 (PHP 8.2+) |
| Panel Admin | Filament v5 |
| Database | SQLite |
| API Auth | Laravel Sanctum |
| Map Picker | dotswan/filament-map-picker |
| Routing Service | OpenRouteService |
| Build Tool | Vite |

---

## 🏗️ Arsitektur

```
busguide1/
├── busguide/
│   └── login/                  # 📱 Flutter Mobile App
│       ├── lib/
│       │   ├── controllers/    # Business logic (MVC)
│       │   │   ├── login_controller.dart
│       │   │   ├── register_controller.dart
│       │   │   ├── cari_rute_controller.dart
│       │   │   ├── peta_rute_controller.dart
│       │   │   └── ...
│       │   ├── models/         # Data models
│       │   │   ├── halte_model.dart
│       │   │   ├── jadwal_model.dart
│       │   │   ├── wisata_model.dart
│       │   │   └── ...
│       │   ├── views/          # UI Screens
│       │   │   ├── home_view.dart
│       │   │   ├── cari_rute_view.dart
│       │   │   ├── peta_halte_view.dart
│       │   │   ├── halte_view.dart
│       │   │   └── ...
│       │   └── services/
│       │       └── api_service.dart  # REST API client
│       └── assets/
│
└── busguide-admin/              # 🖥️ Laravel Backend + Admin Panel
    ├── app/
    │   ├── Filament/Resources/  # Admin panel resources
    │   │   ├── Haltes/
    │   │   ├── Jadwals/
    │   │   └── Wisatas/
    │   ├── Http/Controllers/
    │   │   └── Api/             # REST API Controllers
    │   │       ├── HalteController.php
    │   │       ├── JadwalController.php
    │   │       ├── WisataController.php
    │   │       ├── CariRuteController.php
    │   │       └── NotifikasiController.php
    │   ├── Models/              # Eloquent Models
    │   └── Services/
    │       └── OpenRouteService.php
    ├── database/
    │   └── migrations/
    └── routes/
        └── api.php
```

---

## 🗃️ Struktur Database

```
halte          — Data halte bus (nama, koordinat, alamat, fasilitas)
rute           — Data rute bus
rute_halte     — Relasi rute ↔ halte (urutan, jarak, estimasi waktu)
jadwal         — Jadwal keberangkatan per rute dan hari
wisata         — Destinasi wisata yang terhubung ke halte
cari_rute      — Log pencarian rute (untuk analitik rute populer)
notifikasi     — Pengumuman dan notifikasi untuk pengguna
admins         — Data akun admin panel
```

---

## 🚀 Instalasi

### Prasyarat
- PHP 8.2+
- Composer
- Node.js & NPM
- Flutter SDK 3.11+
- Git

---

### 1. Clone Repositori

```bash
git clone https://github.com/username/BusGuide.git
cd BusGuide
```

---

### 2. Setup Backend (Laravel Admin + API)

```bash
cd busguide-admin

# Install dependensi PHP
composer install

# Salin file environment
cp .env.example .env

# Generate application key
php artisan key:generate

# Jalankan migrasi database
php artisan migrate

# Install dependensi frontend
npm install && npm run build

# Jalankan server
php artisan serve
```

> Panel admin dapat diakses di: `http://localhost:8000/admin`

---

### 3. Setup Aplikasi Mobile (Flutter)

```bash
cd busguide/login

# Install dependensi Flutter
flutter pub get

# Jalankan aplikasi (pastikan emulator/device terhubung)
flutter run
```

---

### 4. Konfigurasi

**Backend `.env`** — Sesuaikan database dan URL:
```env
APP_URL=http://localhost:8000
DB_CONNECTION=sqlite
```

**`lib/services/api_service.dart`** — Arahkan ke URL backend:
```dart
static const String baseUrl = 'http://YOUR_SERVER_URL/api';
```

**`lib/main.dart`** — Masukkan Supabase credentials:
```dart
await Supabase.initialize(
  url: 'YOUR_SUPABASE_URL',
  anonKey: 'YOUR_SUPABASE_ANON_KEY',
);
```

---

## 🔌 API Endpoint

Base URL: `/api`

| Method | Endpoint | Deskripsi |
|--------|----------|-----------|
| `GET` | `/halte` | Daftar semua halte |
| `GET` | `/halte/{id}` | Detail satu halte |
| `GET` | `/wisata` | Daftar semua wisata |
| `GET` | `/wisata/{id}` | Detail satu wisata |
| `GET` | `/wisata/halte/{id_halte}` | Wisata berdasarkan halte |
| `GET` | `/jadwal` | Daftar semua jadwal |
| `GET` | `/jadwal/halte/{id_halte}` | Jadwal berdasarkan halte |
| `POST` | `/cari-rute` | Simpan log pencarian rute |
| `GET` | `/rute/populer` | Rute yang paling sering dicari |
| `GET` | `/notifikasi` | Daftar notifikasi |

---

## 🤝 Kontribusi

Kontribusi sangat disambut! Silakan:

1. Fork repositori ini
2. Buat branch fitur baru (`git checkout -b feature/fitur-baru`)
3. Commit perubahan (`git commit -m 'feat: tambah fitur baru'`)
4. Push ke branch (`git push origin feature/fitur-baru`)
5. Buat Pull Request

---

## 📄 Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE).

---

<div align="center">

Dibuat dengan ❤️ menggunakan Flutter & Laravel

**Bus Guide** — *Naik bus jadi lebih mudah.*

</div>
