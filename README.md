## About this Application

Aplikasi ini merupakan aplikasi untuk pendaftaran beasiswa, Aplikasi pendaftaran beasiswa ini bisa diakses oleh pengguna yang ingin mendaftar beasiswa dengan beberapa pilihan beasiswa dan terdapat ketentuan mengajukan beasiswa dengan melihat Index Prestasi Kumulatif (IPK) terakhir yang didapat.

## Framework 

-   `Laravel` => Framework PHP
-   `Tailwind CSS` => Framework CSS untuk style

## Tools

-   `Visual Studio Code` => Code Editor
-   `Laragon` => simulasi Web Server

## Other Library

-   `ApexChart` => Library dengan JavaScript untuk grafik
-   `JQuery`

## Direktori Utama

-   `app` : Berisi kode aplikasi inti, termasuk model, controller, middleware, dan lainnya.
-   `bootstrap`: Mengandung file yang bertanggung jawab untuk memuat framework Laravel dan menginisialisasi pengaturan awal.
-   `config`: Tempat konfigurasi aplikasi, seperti file untuk pengaturan database, pengaturan cache, dan lainnya.
-   `database`: Berisi file migrasi dan seed untuk mengelola struktur database dan data awal.
-   `public`: Direktori root yang dapat diakses secara publik. File index.php yang berada di sini berfungsi sebagai titik masuk utama aplikasi.
-   `resources`: Berisi template, file penerjemahan, dan aset lainnya seperti file CSS, JavaScript, dan gambar.
-   `routes`: Tempat mendefinisikan rute aplikasi web. File web.php umumnya digunakan untuk menentukan rute-rute untuk HTTP.
-   `storage`: Menyimpan file-file yang dihasilkan oleh aplikasi, seperti file log, file cache, dan file sesi.

## File Tambahan

-   `.editorconfig` : File ini digunakan untuk mengkonfigurasi pengaturan editor kode. Ini membantu memastikan konsistensi gaya kode antara berbagai editor dan pengembang.

-   `.env` : Ini adalah file konfigurasi lingkungan yang menyimpan pengaturan khusus aplikasi seperti koneksi database, URL, dan pengaturan lingkungan lainnya. File ini tidak boleh dibagikan ke repositori karena berisi informasi rahasia.

-   `.env.example` : File contoh dari .env yang digunakan untuk memberikan petunjuk dan contoh konfigurasi. Biasanya, ini digunakan untuk memastikan bahwa pengembang dapat membuat salinan .env mereka sendiri dengan memasukkan nilai yang sesuai.

-   `.gitignore` : File ini menyatakan daftar file dan direktori yang tidak boleh disertakan dalam repositori Git. Ini sering mencakup file konfigurasi lokal, cache, dan file sementara.

-   `artisan` : Ini adalah skrip baris perintah untuk Laravel yang digunakan untuk menjalankan perintah artisan, seperti migrasi database, menghasilkan kode, dan tugas-tugas lainnya.

-   `composer.json` : File ini berisi informasi tentang proyek dan dependensinya. Ini digunakan oleh Composer, manajer paket PHP, untuk mengelola dependensi dan menginstal paket yang dibutuhkan.

-   `composer.lock` : File ini dibuat oleh Composer dan mengunci versi paket yang digunakan oleh proyek. Ini memastikan bahwa versi paket yang sama digunakan oleh semua pengembang.

-   `package-lock.json` : File ini diciptakan oleh npm dan digunakan untuk mengunci versi paket JavaScript yang digunakan oleh proyek.

-   `package.json` : File konfigurasi untuk npm (Node Package Manager), yang mengelola dependensi JavaScript, skrip, dan konfigurasi proyek lainnya.

-   `postcss.config.js` : File konfigurasi untuk PostCSS, alat pengolahan CSS yang sering digunakan dalam pengembangan web modern.

-   `readme.md` : Dokumen utama proyek yang berisi informasi umum, panduan instalasi, dan petunjuk penggunaan.

-   `tailwind.config.js` : File konfigurasi untuk Tailwind CSS, kerangka kerja desain responsif yang sering digunakan dalam proyek Laravel.

-   `vite.config.js` : File konfigurasi untuk Vite, bundler JavaScript yang cepat dan modern yang dapat digunakan untuk pengembangan frontend dalam proyek Laravel.