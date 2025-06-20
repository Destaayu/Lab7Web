# Praktikum 1

### 1. Mengaktifkan Ekstensi di `php.ini`

Berikut adalah ekstensi PHP yang harus diaktifkan:

1. **php-json** → Diperlukan untuk bekerja dengan JSON.
2. **php-mysqlnd** → Native driver untuk MySQL.
3. **php-xml** → Diperlukan untuk bekerja dengan XML.
4. **php-intl** → Diperlukan untuk mendukung aplikasi multibahasa.
5. **libcurl** (opsional) → Diperlukan jika ingin menggunakan Curl.

Buka xampp file Config `php.ini` dan pastikan ekstensi berikut tidak dikomentari (hilangkan tanda `;` di depannya jika ada):

```ini
extension=json
extension=mysqli
extension=xml
extension=intl
extension=curl
```

![Screenshot](public/readme/1.png)

### 2. Restart Webserver

Setelah mengaktifkan ekstensi, restart webserver agar perubahan diterapkan.

## Instalasi

### 3. Instalasi CodeIgniter 4

Instalasi dengan cara manual:

1. Unduh **CodeIgniter** → (https://codeigniter.com/download)
2. Extrak file zip Codeigniter ke direktori **htdocs/Lab7Web**
3. Ubah nama direktory **framework-4.x.xx** menjadi **ci4**.

### 4. Menjalankan CLI XAMPP

1. Arahkan direktori sesuai dengan project → (xampp/htdocs/Lab7Web/ci4/)
2. Perintah yang dapat dijalankan untuk memanggil CLI Codeigniter adalah:
   `php spark serve` Meluncurkan server pengembangan bawaan, Memungkinkan melihat aplikasi di browser (http://localhost:8080).

![Screenshot](public/readme/2.png)

### 5. Mengaktifkan Mode Debugging

Fitur debugging dari CodeIgniter 4 untuk memudahkan developer untuk mengetahui
pesan error apabila terjadi kesalahan dalam membuat kode program. Mengaktifkan mode debugging dengan mengubah niai konfigurasi pada file `env`, cari variable `CI_ENVIRONMENT` ubah menjadi `development`

![Screenshot](public/readme/3.png)

Kemudian rename nama file `env → .env`

Contoh Error yang terjadi ketika menghapus `function` pada file **app/Controller/Home.php**

![Screenshot](public/readme/4.png)

### 6. Routing dan Controllers

Routing dalam CodeIgniter 4 adalah proses yang menghubungkan permintaan (request) dari pengguna ke Controller yang sesuai untuk diproses. Routing ini memungkinkan kita menentukan bagaimana URL diterjemahkan menjadi aksi dalam aplikasi, sehingga setiap permintaan dapat diarahkan dengan benar.

**Membuat Route baru (autoRoute(false)):**

Secara default fitur autoRoute sudah aktif. Untuk mengubah status autoroute
dapat mengubah nilai variabelnya. Untuk menonaktifkan ubah nilai true menjadi false. Nonaktifkan Auto Routing `($routes->setAutoRoute(false);)` ketika menjalankan di production.

tambahkan kode berikut dalam **app/Config/Routes.php**

![Screenshot](public/readme/5.png)

Untuk mengetahui route yang ditambahkan sudah benar, buka CLI dan jalankan perintah `php spark routes`:

![Screenshot](public/readme/6.png)

**Membuat Controllers:**

tambahkan code berikut dalam **app/Controllers/Page.php & Home.page**

![Screenshot](public/readme/7.png)
![Screenshot](public/readme/8.png)

**Summary:**

1. Auto Routing cocok untuk pengembangan cepat, tetapi kurang aman dan sulit dikontrol. Semua method dalam controller bisa diakses langsung dari URL, yang bisa membuka celah keamanan.

2. Manual Routing lebih aman, fleksibel, dan efisien karena hanya route yang didefinisikan secara eksplisit yang bisa diakses. Ini juga memudahkan pengelolaan middleware, otorisasi, dan optimasi aplikasi.

### 6. Membuat View

1. Buat File `app/Views/about.php` `app/Views/artikel.php` `app/Views/contact.php` `app/Views/home.php`:

   ![Screenshot](public/readme/9.png)

2. Tambahkan code pada ke 4 file diatas:

   ![Screenshot](public/readme/10.png)

### 7. Layout Web dengan CSS

1. Buat File CSS `style.css`:

   ![Screenshot](public/readme/11.png)

2. Kemudian buat folder template pada direktori `app/Views/template` kemudian buat file `header.php` dan
   `footer.php`:

   ![Screenshot](public/readme/12.png)

3. `app/Views/template/header.php`:

   ![Screenshot](public/readme/13.png)

4. `app/Views/template/footer.php`:

   ![Screenshot](public/readme/14.png)

5. Ubah file `app/Views/about.php` `app/Views/artikel.php` `app/Views/contact.php` `app/Views/home.php`:

   ![Screenshot](public/readme/15.png)

### 7. Hasil Output

1. Home

   ![Screenshot](public/readme/26.png)

2. Artikel

   ![Screenshot](public/readme/17.png)

3. About

   ![Screenshot](public/readme/18.png)

4. Contact

   ![Screenshot](public/readme/19.png)

# Paraktikum 2

### Membuat Database dan Tabel

![Screenshot](public/readme/20.png)

### Config Koneksi Database

Lakukan Config untuk menghubungkan dengan database server pada file `.env`

![Screenshot](public/readme/21.png)

### Membuat Model

Model ini menentukan hubungan antar data dan bagaimana data dapat diakses serta dimanipulasi. Membuat model untuk mengakses data artikel `app/Models`

![Screenshot](public/readme/22.png)

### Membuat Controller

Pada direktori `app/Controllers/Home.php` buat Controller pada func index

![Screenshot](public/readme/23.png)

kemudian perubahan kecil pada `Routes.php`

![Screenshot](public/readme/24.png)

Ubah `app/Views/home.php` menjadi

![Screenshot](public/readme/25.png)

Mencoba membuat artikel sementara

![Screenshot](public/readme/16.png)

### Membuat tampilan detail artikel

1. Ubah func Artikel pada `app/Controllers/Page.php`

![Screenshot](public/readme/27.png)

2. Membuat View baru di `app/Views/artikel.php` dan membuat routing baru di `app/Config/Routes.php` **$routes->get('page/artikel/(:any)', 'Page::artikel/$1');**

![Screenshot](public/readme/28.png)

3. Hasil dari detail artikel.

![Screenshot](public/readme/29.png)

### Membuat menu admin

1. Membuat method baru pada Controllers `app/Controllers/Artikel.php` dengan nama **admin_index()**

![Screenshot](public/readme/30.png)

2. Menuju direktori `app/Views/` lalu buat **admin_index.php**

![Screenshot](public/readme/31.png)

3. Tambah routes `app/Config/Routes.php` untuk menu admin

![Screenshot](public/readme/32.png)

4. Hasil output

![Screenshot](public/readme/33.png)

### Menambah data artikel

1. Menambahkan func baru pada `app/Controllers/Artikel.php` dengan nama **Add()**

![Screenshot](public/readme/34.png)

2. Buat **add.php** di `app/Views` untuk form tambah artikel

![Screenshot](public/readme/35.png)

3. Hasil Output

![Screenshot](public/readme/36.png)

### Edit Data

1. Menambahkan func baru pada `app/Controllers/Artikel.php` dengan nama **edit($id)**

![Screenshot](public/readme/37.png)

2. Buat **edit.php** di `app/Views` untuk form edit artikel

![Screenshot](public/readme/38.png)

3. Hasil Output

**Before**
![Screenshot](public/readme/39.png)

**After**
![Screenshot](public/readme/40.png)

### Menghapus data

1. Menambahkan func baru pada `app/Controllers/Artikel.php` dengan nama **delete($id)**

![Screenshot](public/readme/41.png)

2. Hasil output seletah saya delete dengan judul **Luthfi Ammar Musthofa**

![Screenshot](public/readme/42.png)

# Praktikum 3

### Membuat layout utama

1. Buat folder layout utama di `app/Views/layout` lalu buat file `main.php`

![Screenshot](public/readme/43.png)

2. Modifikasi file `app/Views` seperti **about.php, artikel.php, contact.php, home.php**
   berikut contoh modifikasi di line 1,3,23 pada **home.php**

![Screenshot](public/readme/44.png)

3. Berikut adalah tampilannya

![Screenshot](public/readme/45.png)

### Membuat class view cell

Membuat folder **Cells** di dalam `app` lalu buat file `ArtikelTerkini.php` pada `app/Cells`

![Screenshot](public/readme/46.png)

### Membuat view untuk view cell

1. Melakukan perubahan field pada database dengan menambahkan tanggal agar dapat mengambil data artikel terbaru.

![Screenshot](public/readme/47.png)

2. Buat folder components di `app/Views`

![Screenshot](public/readme/48.png)

3. kemudian buat file `artikel_terkini.php` di `app/Views/components`

![Screenshot](public/readme/49.png)

4. Modifikasi `app/Views/layout/main.php`

![Screenshot](public/readme/50.png)

5. Hasil output dengan menampilkan artikel terbaru.

![Screenshot](public/readme/51.png)
