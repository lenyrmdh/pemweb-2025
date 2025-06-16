
### Langkah-langkah:

1. #### **Setup Proyek dengan Docker dan Composer**


   * Kembali ke terminal, jalankan perintah:
     ```bash
     docker exec -it pemweb bash
     ```
   * Di dalam container, buat project Laravel Fila Starter:
     ```bash
     composer create-project --prefer-dist raugadh/fila-starter .
     ```
   * Jika koneksi gagal:
     ```bash
     rm -rf *
     rm -rf .*  # untuk menghapus file tersembunyi kecuali "." dan ".."
     ```
   * Ubah hak akses folder:
     ```bash
     chown -R www-data storage/*
     ```
2. #### **Edit Konfigurasi Environment**


   * Buka file `.env` di folder `src`, lalu ubah konfigurasi berikut:
     * `APP_NAME=pemweb`
     * `APP_TIMEZONE=Asia/Jakarta`
     * `APP_URL=http://localhost`
     * `DB_CONNECTION=mysql`
     * `DB_DATABASE=db_pemweb`
     * `DB_USERNAME=root`
     * `DB_PASSWORD=p455w0rd`
3. #### **Menjalankan Migrasi dan Seeder**

   Jalankan perintah berikut secara berurutan di terminal (dalam container Docker):


   ```bash
   php artisan migrate:fresh
   php artisan db:seed --force
   php artisan shield:generate --all
   php artisan project:init
   chmod 777 -R storage/* && chmod 777 -R bootstrap/*
   ```
4. #### **Menambahkan Folder dan File Livewire**


   * Di folder `app`, buat folder `Livewire`, lalu buat file `ShowHomePage.php` di dalamnya.
   * Di folder `resources`, buat struktur sebagai berikut:
     * `views/components/layouts/app.blade.php`
     * `views/livewire/show-home-page.blade.php`
   * Ubah file `web.php` yang ada di folder `routes` untuk mengarahkan ke komponen Livewire `ShowHomePage`.
5. #### **Akses Navicat**


   * Buka Navicat dan buat koneksi baru dengan pengaturan berikut:
     * **Connection Name:** wsl-localhost
     * **Host:** localhost
     * **Port:** 13306
     * **User:** root
     * **Password:** p455w0rd
   * Klik "Test Connection". Jika berhasil, klik OK.
6. #### **Akses Proyek**


   * Buka browser dan akses `http://localhost` untuk melihat hasil proyek Laravel dengan starter Fila yang sudah di-setup.
7. #### **Menambah Fitur dalam Localhost**

* Kembali ke terminal dan jalankan perintah untuk membuat komponen Livewire baru:
  ```bash
  php artisan make:livewire ShowProfile
  ```
* Buka Visual Studio Code dan ubah kode di file `app.blade.php`, serta sesuaikan `web.php` untuk menambahkan route menuju halaman `ShowProfile`.

8. #### **STRUKTUR RINGKASAN MODEL** 

```bash
app/Model             => class
app/Http/Controller   => control
app/Filament          => admin panel
app/Livewire          => mounted render view
public/               => css, image
storage/              => folder penyimpanan
database/Migrations   => membuat struktur DB
database/Seeders      => data dummy DB
resources/views       => tampilan
routes/web.php        => routing/link
```
 
 9. #### **CARA**

```bash
docker exec -it pemweb bash
php artisan make:model PageConfig -ms
php artisan make:model Logo -ms
php artisan make:model Footer -ms
php artisan migrate
php artisan shield:generate --all
php artisan db:seed

php artisan make:filament-resource Product --generate
php artisan make:livewire ShowProfile
php artisan make:livewire ShowAbout
```

10. #### **Cara Clone**
```bash
composer install
mv .env.example .env
php artisan key:generate
php artisan migrate
php artisan storage:link
chown -R www-data:www-data storage/*
chmod 777 -R storage/* && chmod 777 -R bootstrap/*
php artisan project:init
```
11. #### **Cara Buat Api**
```bash
docker compose up -d --build
docker exec -it pemweb bash
composer create-project --prefer-dist raugadh/fila-starter .
ubah .env di folder src
php artisan key:generate
php artisan storage:link
php artisan migrate
php artisan project:init
chown -R www-data:www-data storage/*
chown -R www-data:www-data bootstrap/*
ubah database di migrations
php artisan make:controller
ubah di app models di client dan product
ke app/http ke controllers folder api isi productapicontroller 
ke terminal php artisan make:middleware ClientAuth
lalu ke app/http/ middleware dan isi file clientauth
ke folder route bikin file api.php dan isi
ke bootsraps ke app.php dan isi filenya
ke terminal dan  php artisan route:list
selanjutnya ke folder app/resources dan isi file clientresource dna productresource.
php artisan make:filament-resource Client --generate 
php artisan make:filament-resource Products --generate
php artisan migrate
jika udah isi juga di folder clientresources/pages dan edit file editclient
buka ke chrome dan buka localhost/admin
isi di client dan products
jika sudah dibuat buka postman buat new collection Pemrograman Web dan add folder Products setelah itu add request 
tulis di get http://localhost/api/products dan auth typenya bearer token dan copy token yang ada di localhost dibagian client lalu send
```