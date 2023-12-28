# Website Sistem Monitoring dan Sentralisasi Data Proyek

>## Overview
Project Monitoring System - Engineering Design merupakan sebuah website intranet yang berfungsi untuk mensentralisasi pencatatan/penyimpanan dokumen dan setiap progress atau milestone dari seluruh proyek yang dilaksanakan oleh Engineering Design yang dimodelkan berdasarkan _7 Steps of Process Control Principle_. Tujuan dibuatnya aplikasi website ini adalah untuk mempermudah segala pihak yang termasuk kedalam Engineering Design untuk memantau _progress_ dari setiap proyek dan secara langsung mensentralisasi penyimpanan dokumen yang dihasilkan dari seluruh proyek yang dilaksanakan oleh Engineering Design dalam kurun waktu tertentu.

Dalam versi _Initial Release_, aplikasi sudah memiliki kemampuan untuk:

#### Fungsi Umum
1. Fungsi pendaftaran akun pengguna berdasarkan kebutuhan 4 tingkat hak akses (dilakukan oleh akun hak tingkat _Administrator_).
2. Fungsi login akun sesuai dengan tingkat hak akses.
3. Melihat detail profil pengguna.
4. Melihat seluruh akun user yang terdaftar ke website

#### Fungsi Monitoring Proyek
1. Menambahkan proyek yang akan dijalankan
2. Melakukan _assign_ proyek kepada masing-masing PIC yang akan melaksanakan proyek.
3. CRU* _progress documents_ berdasarkan _7 Steps of Process Control Principle_ dari Seksi Engineering Design.
4. Melakukan CRU* pencatatan status keuangan dari proyek yang berjalan.

#### Fungsi Sentralisasi Formulir
1. Fungsi CRUD* _Standarized Forms_ (dilakukan oleh akun hak tingkat _Supervisor_) yang nantinya formulir dapat diakses oleh seluruh akun yang terdaftar kedalam aplikasi.


*C=Create, R=Read, U=Update, D=Delete

>## Getting Started
### App Build Environment Info 
1. PHP v8.1.6 
2. [Laravel](https://laravel.com/) v9.35.1 
   * plugin-vite v0.6.1
   * laravel-mix v6.0.49
3. [VITE](https://vitejs.dev/) v3.1.7 
4. [Chart.js](https://www.chartjs.org/) v4.0.1
5. [Tailwindcss](https://www.tailwindcss.com/) v3.1.8 
   * [Flowbite](https://www.flowbite.com/) v1.5.3
6. MySQL or MariaDB 
7. [XAMPP](https://www.apachefriends.org/) v3.3.0
8. [Composer](https://getcomposer.org/) v2.4.1
9. [Node.js](https://nodejs.org/en/)v18.12.1

* Recommended Code Editor: **[Visual Studio Code](https://code.visualstudio.com/)**
* Recommended Terminal: **[Git (Use GitBash for Server Terminal)](https://git-scm.com/downloads)** or **Windows Command Prompt**
* Recommended Source Code Control: **[Github Desktop](https://desktop.github.com/)**
 

### Installation and Setup ------ GUIDE FOR FURTHER WEBSITE DEVELOPMENT

>### 1. Menyiapkan dependencies:
* ### Pastikan telah menginstall 1. [Composer](https://getcomposer.org/) 2. [XAMPP](https://www.apachefriends.org/) 3. [Node.js](https://nodejs.org/en/) pada komputer server
* Buka Directory Website
- caranya : 
    a. buka cmd
    b. Ketik 
```
C:
```
    c. Lalu alihkan ke directory website 
```
cd xampp\htdocs\12-okt-edd
```
    
1. Instalasi **Laravel** via terminal
```
composer install
```
2. Instalasi **npm** via terminal. Pastikan sudah terhubung ke internet
```
npm install
```
- Jika memakai proxy gunakan syntax berikut =  'npm --proxy http://proxy:port install'
```
npm --proxy http://172.30.25.35:2525 install
```
3. Copy File 'koneksidatabase==debug=false.env pada folder 01-other'
- lalu tempatkan file tersebut di root folder.
- Kemudian ubah nama menjadi .env

4. Aktifkan Apache dan MySql pada aplikasi Xampp.

5. Setting Config my.ini pada MySql -xampp
- Buka file my.ini
- lalu cari 'innodb_log_file_size' .Ubah menjadi berikut
```
innodb_log_file_size=512M
```
- Lalu SAVE

6. Setting Config php.ini di Apache-xampp
- Buka file php.ini
- Lalu cari 'upload_max_filesize' . Ubah Menjadi berikut
```
post_max_size=4000M
```
- Lalu Cari 'upload_max_filesize' . Ubah Menjadi berikut
```
upload_max_filesize=4000M
```
- Lalu SAVE
- Restart Ulang Xampp.

7. Setting innodb_strict_mode pada xampp. *Setiap kali database migrate ulang, harus melakukan hal ini.
- Masuk ke terminal xampp
- login database 
```
mysql -u root
```
- Lalu ketik
```
SET GLOBAL innodb_strict_mode = OFF;
```

8. Generate Database
- Buka lokasi penyimpanan website
eg: C:xampp/htdocs/12-okt-edd

- Jalankan Perintah Berikut
```
php artisan migrate
```
9. Generate Role Seeder untuk hak akses
```
php artisan db:seed --class=RoleSeeder
```
10. Membuat link folder system agar dapat dilihat oleh public
```
php artisan storage:link
```

>### 2. Menjalankan server development (Development Server Deployment Local)

>menjalankan secara komputer personal saja.
1. build dependencies yang telah diinstal
```
npm run build
```
2. Jalankan node server (berfungsi sebagai server front-end)
```
npm run dev
```
3. Jalankan server localhost Laravel
```
php artisan serve
```

>### 3. Deployment website agar dapat diakses di dalam jaringan intranet (Public Server Deployment)

1. Jalankan Fungsi Front End
```
npm run dev
```
```
ctrl+c
```
-Lalu buat terminal baru
```
npx tailwindcss -o build.css --minify
```
```
npm run build
```
2. command untuk host website pada ip komputer server
```
php artisan serve --host=alamat.ip private.komputer.server --port=gunakan port yang masih kosong
eg: php artisan serve --host=172.30.18.41 --port=5173
```
3. Jika masih erorr lakukan berulang dengan mencoba konfigurasi urutan yang berbeda. Hingga front end dapat di compile ke server public.

>### 4. Cara running di komputer client

1. Pastikan sudah terhubung dalam jaringan Komputer Server
2. Direkomendasikan menggunakan Chrome untuk browser
3. Ketik alamat IP dan Port yang telah di publis oleh Developer Manufacturing IT
eg: 172.30.18.41:5173

>### 5. Cara Mengganti Password

1. Buka https://phppasswordhash.com/ untuk membuat password 
2. Masukan passsword dan gunakan hash secara default
3. copy password yang sudah di hash
4. Buka database di phpmyadmin
5. Buka kolom user
6. Pilih user dan masukan password yang sudah di copy
7. Simpan.

>### 6. Erorr

1. Erorr 404
- Merupakan salah input link

2. Eror 500
- Jalankan ulang server website
- Terdapat kode program yang salah.
Troubleshooting: 
a. Membuka kode program dan menyalakan debug pada folder root file '.env' .
```
APP_DEBUG=true
```
b. Lakukan troubleshooting menurut debug yang muncul


>## Maintenance Guide
### What needed to do -- GUIDE FOR THIS WEBSITE MAINTENANCE
#### Backup database rutin

#### Menghapus log activity rutin

1. Untuk menghapus tabel log activity
```
php artisan migrate:rollback --step=1
```
2. Untuk membuat tabel log activity
```
php artisan migrate
```

>## Contributors

### 2022 BE INTERN _Mentee_
### [Firmando Parulian Situmorang](https://github.com/NandoSitumorang) 
(Back-End Programmer)

Please contact me through:
  * firmandos02@gmail.com
  * https://www.linkedin.com/in/firmando-parulian-situmorang/
### [Ananta Rizki Widyadana](https://github.com/anantarzk)
(Front-End Programmer)

Please contact me through:
  * arizki163@gmail.com
  * ananta.19052@student.its.ac.id
  * https://www.linkedin.com/in/anantarzk/

###  _2nd gen contributors_

_You may kindly add yourself in this section if you are contributing to continue this project_


>## Further App Development Roadmap Suggestion
* Modul Finansial diintegrasikan dengan database sistem PPMS agar selaras dengan data yang dimiliki oleh Dept.Purchasing.
* Refactor kode agar _website scripting_ tidak berat.
* Temukan metode lain untuk koneksi `id` agar dapat melakukan penyimpanan file yang tidak terbatas pada ketersediaan kolom tabel.

Best Regards, BE INTERN 2022 _Mentee_

>## License
Strictly use this app and code releases for internal (Engineering Design) only.

Bridgestone Tire Indonesia - Karawang Plant 2022
