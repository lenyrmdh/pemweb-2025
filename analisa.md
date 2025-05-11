# 📘 Sistem Informasi Data Karyawan – PT. DigitalEdu Indonesia
**Bidang Usaha:** Pendidikan dan Teknologi  
**Tanggal:** 5 Mei 2025  

---

## 📄 Abstrak
PT. DigitalEdu Indonesia adalah perusahaan yang bergerak di bidang penyediaan layanan pendidikan berbasis digital, termasuk kursus online, Learning Management System (LMS), dan pelatihan korporat. Seiring pertumbuhan pesat perusahaan dan bertambahnya jumlah karyawan, manajemen data karyawan menjadi tantangan penting.

Maka dari itu, dibutuhkan Sistem Informasi Data Karyawan berbasis website yang dapat membantu divisi Human Resource Management (HRM) dalam mencatat, mengelola, dan memantau informasi karyawan secara efektif dan efisien. Sistem ini dirancang menggunakan framework **Laravel** dan **MySQL database**.
---

## 📚 Pendahuluan
PT. DigitalEdu Indonesia memiliki struktur organisasi yang terdiri dari berbagai divisi, seperti pengembangan produk, pemasaran, keuangan, akademik, dan teknologi informasi. Mengelola informasi personal, absensi, jabatan, dan aktivitas tiap karyawan secara manual menimbulkan risiko data yang tidak akurat dan sulit dipantau.

Dengan perkembangan teknologi digital, perusahaan memutuskan untuk mengembangkan sistem informasi berbasis web yang berfungsi sebagai pusat pengelolaan data karyawan.

---

## 🧩 Latar Belakang
Seiring peningkatan jumlah karyawan dan kompleksitas proyek, proses administrasi yang dilakukan secara konvensional sudah tidak lagi efektif. Tim HR seringkali mengalami kesulitan dalam:

- Melacak kehadiran harian karyawan  
- Meninjau performa tim proyek (Analisis, Dokumentasi, Coding)  
- Menyusun laporan log book harian/mingguan  
- Mengelola data mutasi, promosi, atau pengunduran diri karyawan  

Untuk itu, sistem digital yang terintegrasi diperlukan agar proses pengelolaan menjadi lebih akurat, cepat, dan terpusat.

---

## 🎯 Tujuan
- Meningkatkan efisiensi pengelolaan data karyawan melalui digitalisasi sistem HR  
- Mempermudah proses absensi dan pelaporan log book setiap tim dalam proyek  
- Mendukung monitoring kinerja tim secara terstruktur oleh manajer proyek atau HRD  
- Mengurangi kesalahan administratif akibat pengolahan data secara manual  
- Menjadi pondasi sistem SDM terpadu yang dapat dikembangkan ke modul payroll atau evaluasi kinerja  

---

## 🧠 I. Rumusan Masalah dan Analisis Solusi

### 1. Pengelolaan Data Karyawan yang Tidak Terstruktur
- **Analisis:** Data disimpan dalam spreadsheet tanpa backup dan hak akses yang jelas  
- **Solusi:** Modul CRUD Laravel + sistem log perubahan  

### 2. Monitoring Kinerja Tim Proyek Kurang Efektif
- **Analisis:** Tidak ada platform untuk merekam aktivitas harian  
- **Solusi:** Fitur log book harian per tim dan histori kegiatan  

### 3. Absensi Tidak Terdokumentasi Secara Real-time
- **Analisis:** Absensi masih manual atau via Google Form  
- **Solusi:** Fitur absensi harian berbasis jam login, database-based  

### 4. Basis Data Terpusat dan Aman
**Solusi Teknis:**
- Database MySQL  
- Role-based access (Admin, Karyawan, Manager)  
- Backup otomatis mingguan  
- Enkripsi data sensitif  

---

### 5. Fitur Sistem Utama

#### 👨‍💼 Admin

### 5. Fitur Sistem Utama

#### 👨‍💼 Admin

##### ✅ 1. Fitur dari Model Employee
**Fungsi:** Mewakili data karyawan  
**Field:**
- `name`: Nama karyawan  
- `email`: Email unik karyawan  
- `position`: Posisi/jabatan  
- `division`: Divisi/departemen  
- `joined_at`: Tanggal mulai kerja  

**Fitur:**
- Menyimpan data karyawan secara lengkap  
- Form tambah/edit karyawan (admin panel)  
- Menampilkan riwayat absensi per karyawan  
- **Karyawan dapat melihat data profil miliknya sendiri melalui panel admin (akses terbatas berdasarkan akun login masing-masing)**  

##### ✅ 2. Fitur dari Model Attendance
**Fungsi:** Mewakili data absensi per karyawan  
**Field:**
- `employee_id`: ID karyawan (relasi)  
- `date`: Tanggal absen  
- `check_in`: Jam masuk  
- `check_out`: Jam pulang  

**Fitur:**
- Menyimpan data absensi harian  
- Input jam masuk/pulang  
- Relasi `belongsTo(Employee::class)` untuk mengidentifikasi karyawan yang melakukan absensi  
- **Karyawan hanya dapat melihat riwayat absensinya sendiri berdasarkan akun yang sedang login**

#### 🔁 Relasi yang Dibangun
**Employee ↔ Attendance**
- 1 karyawan bisa memiliki banyak absensi  
- 1 absensi hanya dimiliki oleh 1 karyawan  

#### 🎯 Kesimpulan Fiturnya
Dari dua model ini, sistem mendukung:
- Manajemen data karyawan  
- Riwayat absensi per karyawan  
- Menampilkan, memfilter, dan menginput data absensi  
- **Karyawan memiliki akses terbatas untuk melihat data pribadinya sendiri secara mandiri, termasuk profil dan riwayat kehadiran**

---

## ❓ II. 5W1H

| Pertanyaan | Jawaban |
|-----------|---------|
| **What**  | Membangun sistem informasi digital berbasis Laravel untuk mengelola data karyawan dan aktivitas tim proyek |
| **Who**   | Tim HR, Manager Proyek, Karyawan, Admin Sistem |
| **Where** | Server internal perusahaan, akses melalui LAN dan/atau internet |
| **When**  | Pengembangan Q1 2025, Pengujian Q2, Implementasi akhir Q2 |
| **Why**   | Meningkatkan efisiensi manajemen SDM dan mengurangi risiko kesalahan data |
| **How**   | Laravel + MySQL, dengan autentikasi role-based dan sistem modul HR |

---

## 🧭 III. SWOT

| Faktor         | Analisis |
|----------------|----------|
| **Strengths**  | Mudah digunakan, terintegrasi, hemat biaya jangka panjang |
| **Weaknesses** | Ketergantungan internet & resistensi pengguna awal |
| **Opportunities** | Pengembangan ke sistem payroll, e-learning internal, evaluasi otomatis |
| **Threats**    | Keamanan siber, kehilangan data, bug jika tidak ada QA memadai |

---

## 👥 IV. Stakeholder yang Dibutuhkan

### Stakeholder Langsung:
- HRD – Pemilik proses bisnis  
- Tim IT Developer – Pengembang sistem Laravel  
- Manager Proyek – Pemantau performa tim  
- Karyawan – Pengguna aktif sistem    

---
