Deskripsi Aplikasi :
Aplikasi ini dibuat untuk melakukan pendataan secara tepat jumlah anak pengindap stunting dan menampilkan data stunting secara keseluruhan tujuannya adalah terciptanya transparansi data stunting di indramayu agar penyaluran bantuan yang diberikan bisa merata dan sesuai target, aplikasi ini juga dibuat untuk mencegah adanya redudansi data antara dinas kesehatan indramayu dengan opd opd lain yang ada di indramayu dikarenakan data yang sering kali tercecer ataupun hilang dikarenakan data yang masih menggunkan kertas.
Digiposyandu adalah sebuah aplikasi yang bernaung pada Dinas Kesehatan Indramayu yang sedang menangani masalah stunting pada balita. Memiliki 4 role yaitu Super Admin, Admin Puskesmas, Kader, dan Bidan

Cara install :
1. Download/Clone project github melalui link yang sudah dikirim
2. Jika mendownload file dalam bentuk zip silahkan extract folder nya terlebih dahulu, jika di clone maka anda dapat membukanya langsung melalui text editor seperti VS code
3. Buka terminal dan jalankan script 'composer update'
4. Untuk database, silahkan impor dengan cara buka XAMPP kalian, lalu nyalakan Apache dan MySql.
5. Lalu tekan admin dan anda akan diarahkan ke sebuah alamat http://localhost:8080/phpmyadmin/index.php
6. Buat database baru dengan klik "baru", lalu beri nama database nya (saran: digi_posyandu)
7. Setelah dibuat, klik kolom impor, lalu klik 'choose file/pilih file'. Lalu pilih file digi_posyandu.sql, file berada pada folder laravel yang baru kalian download/clone
8. Setelah impor, kembali ke text editor kalian, lalu pilih file '.env.example' kemudian rename menjadi '.env'
9. Ubah isi variabel DB_DATABASE pada file .env dengan nama database yang baru kalian buat sebelumnya
10. Buka Terminal kembali lalu tuliskan script 'php artisan serve', lalu copy link address dan jalankan pada web browser
11. Aplikasi sudah dapat digunakan

Username dan Password akun :
Super Admin = superAdmin, Password = password
Admin Puskesmas = adminPuskesmas@gmail.com, Password = password
Kader = kader@gmail.com, Password = password
Bidan = bidan@gmail.com, Password = password

Spesifikasi Aplikasi:
Laravel 9
PHP 8.1
XAMPP 3.3.0

No. Penanggung jawab : 083824648361 (Dimas)