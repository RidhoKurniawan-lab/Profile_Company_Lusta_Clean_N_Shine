# Lusta - Company Profile Web App 🌟

Lusta adalah sebuah aplikasi web *company profile* yang dikembangkan dari awal menggunakan **PHP Native** dengan menerapkan pola arsitektur **MVC (Model-View-Controller)** murni. 

Proyek ini dibangun khusus sebagai portofolio untuk merepresentasikan pemahaman mendalam tentang bagaimana sebuah kerangka kerja (*framework*) PHP bekerja di bawah kap (*under the hood*), penerapan kode yang bersih (*clean code*), serta pemisahan logika aplikasi dari tampilan.

## 🎯 Tujuan Proyek

Proyek ini difokuskan sebagai wadah pembelajaran dan pembuktian konsep (*proof of concept*) dari:
- **Penguasaan PHP Native:** Tidak bergantung pada *framework* pihak ketiga (seperti Laravel atau CodeIgniter) untuk memahami fundamental core PHP.
- **Implementasi MVC dari Nol:** Membangun struktur *router* dinamis, abstraksi *controller base*, dan *database wrapper* (PDO) secara mandiri.
- **Pemisahan Konsep (*Separation of Concerns*):** Modul dipisahkan secara tegas antara sistem routing (`App`), logika bisnis (`Controller`), manipulasi data (`Model`), dan presentasi antarmuka (`View`).

## ✨ Fitur Utama

- **Custom MVC Router:** Router sederhana yang menerjemahkan URL dari *frontend* menjadi instansiasi Controller dan pemanggilan Method secara dinamis.
- **PDO Database Wrapper:** Class koneksi database abstraction yang aman untuk mencegah *SQL Injection* dengan memanfaatkan teknik *prepared statements/binding*.
- **Admin Dashboard & Autentikasi:** Panel administrator sederhana untuk mengelola data produk dan membaca pesan masuk dari *contact form*.
- **Public Website:** Laman depan website company profile dengan halaman Home, About, Product (katalog), dan Contact.
- **Keamanan Struktur Direktori:** Memisahkan folder core aplikasi (`App/`) dari public *entry point* (`Public/`) yang mana hanya folder `Public` saja yang dibiarkan terekspos ke klien.

## 📂 Struktur Direktori (Implementasi MVC)

```text
Lusta/
├── App/                  # Core Aplikasi (Logika backend dirahasiakan dari publik)
│   ├── controllers/      # Logika pengontrol alur kerja (AdminController, UserController)
│   ├── cores/            # Mesin utama framework (App.php untuk Routing, Controller.php, Database.php)
│   ├── models/           # Pengolah data & interaksi query ke DB (user_Model, product_Model, contact_Model)
│   └── views/            # Tampilan web (User Interface) dipisah berdasarkan modul (Admin, Users, Layout)
│
├── Public/               # Document Root (Web root yang diakses publik)
│   ├── index.php         # Entry point tunggal dari aplikasi (Front Controller)
│   ├── .htaccess         # URL Rewriting untuk mempercantik routing URL
│   ├── css/              # File Styling CSS
│   ├── img/              # Aset media dan gambar
│   └── js/               # File JavaScript 
│
└── config.php            # File pusat konfigurasi (Database, Environment)
```

## 🧠 Konsep MVC yang Diterapkan di Proyek Ini

1. **Model (`App/models/`):** Bertugas menangani komunikasi dengan database melalui kelas abstraksi PDO (`Database.php`). Semua eksekusi *query* MySQL seperti *Select*, *Insert*, *Update*, *Delete* dibungkus rapi dalam *method* spesifik.
2. **View (`App/views/`):** File PHP murni yang hanya bertugas me-*render* tampilan HTML berserta antarmuka data yang dikirimkan oleh *Controller*. Tampilan di sini memanfaatkan teknik *templating/layouting* sederhana agar tidak terjadi duplikasi elemen HTML seperti Header/Footer.
3. **Controller (`App/controllers/`):** Berperan sebagai jembatan aplikasi. *Controller* bertugas merespons *request* pengguna, mengambil informasi dari *Model* yang bersesuaian, menyatukannya dengan data presentasi, dan mengirim hasil akhirnya ke *View*.
4. **Router System (`App/cores/App.php`):** Otak atau pengatur lalu-lintas (*traffic controller*) web ini. Router akan menangkap parameter URL (contoh: `website.com/user/about`), yang mana router akan segera menjalankan instance kelas `UserController` dan mengeksekusi metode `about()`.

## 🛠️ Prasyarat & Instalasi

Untuk menjalankan aplikasi ini secara lokal di PC Anda, diperlukan spesifikasi:
- Web Server local (Misal: XAMPP, Laragon) dengan dukungan PHP 7.x atau 8.x.
- MySQL Database Engine (MariaDB / MySQL).

### 🚀 Cara Menjalankan Proyek:
1. **Clone repository ini** ke folder direktori *document root* web server lokal Anda (misal: folder `htdocs` untuk XAMPP atau folder `www` untuk sistem Laragon).
   ```sh
   git clone <repo-url> Lusta
   ```
2. **Atur Web Server / Virtual Host:** 
   Disarankan mengarahkan *Document Root* dari Virtual Host langsung menuju ke dalam folder `Lusta/Public`. Jika Anda tidak menggunakan fitur Virtual Host, aplikasi bisa diakses melalui URL normal via browser di `http://localhost/Lusta/Public/`.
3. **Konfigurasi Database Utama:**
   - Buat sebuah database kosong di phpMyAdmin atau DBMS CLI Anda.
   - Buka dan *edit* file konfigurasi utama di `Lusta/config.php`.
   - Sesuaikan kredensial koneksi `DB_HOST`, `DB_USER`, `DB_PASS`, dan terutama nama database (konstanta `DB_NAME`) dengan milik Anda.
   - Sesuaikan struktur pembuatan tabel (*schema*) MySQL Anda dengan mengacu pada fungsi form yang ada di folder Model (`App/models/`).

## 📄 Lisensi

Proyek aplikasi belajar ini dikembangkan di bawah lisensi *MIT License*. Sangat terbuka untuk dipelajari, disalin, atau dikembangkan lebih lanjut.
