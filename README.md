# LAB7 - Pratikum 7 PHP Dasar

Nama : Afnan Dika Ramadhan

NIM : 312410518

Kelas : TI24.A5

MataKuliah : Pemrograman Web

1.Aktifkan Xampp terlebih dahulu

![foto](https://github.com/nanafnan09/LAB7/blob/d2f5ffc4c39493436edf357cc9eb388749f9c6db/LAB%207%20Image/On%20XAMPP.png)

2. Lalu buka browser setelah itu search "localhost/lab7_php_dasar"

![foto](https://github.com/nanafnan09/LAB7/blob/d2f5ffc4c39493436edf357cc9eb388749f9c6db/LAB%207%20Image/1.png)

3.Buatlah file yang bernama`phpdasar.php`lalu tambahkan kode dibawah ini dan simpan ke dalam folder lab7_php_dasar

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
        echo "Hello World";
    ?>

    <h2>Menggunakan Variable</h2>
    <?php
        $nim = "312410518";
        $nama = 'Afnan Dika Ramadhan';
        echo "NIM : " . $nim . "<br>"; 
        echo "Nama: " . $nama;
    ?>
</body>
</html>
```

![foto](https://github.com/nanafnan09/LAB7/blob/d2f5ffc4c39493436edf357cc9eb388749f9c6db/LAB%207%20Image/output%20phpdasar.png)

Tujuan: Mengenalkan dasar-dasar sintaks PHP, mencetak teks, dan menggunakan variabel.

Isi:

Mencetak teks "Hello World" menggunakan echo.

Mendefinisikan dua variabel, $nim dengan nilai string "312410518" dan $nama dengan nilai string 'Afnan Dika Ramadhan'.

Mencetak nilai dari kedua variabel tersebut ke layar, menggabungkannya dengan teks lain menggunakan operator titik (.) untuk konkatenasi (penggabungan string)

4. Buat file baru `latihan2.php`

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h2>Predefine Variable $_GET</h2>
    <?php
        if (isset($_GET['nama'])) {
            echo 'Selamat Datang ' . htmlspecialchars($_GET['nama']);
        } else {
            echo 'Selamat Datang. Silakan masukkan parameter "nama" di URL.';
        }
    ?>
</body>
</html>
```

![foto](https://github.com/nanafnan09/LAB7/blob/d2f5ffc4c39493436edf357cc9eb388749f9c6db/LAB%207%20Image/output%20latihan2.png)

Tujuan: Menunjukkan cara kerja variabel predefined $_GET untuk mengambil data dari URL (query string).

Isi:

Menggunakan fungsi isset() untuk mengecek apakah ada parameter bernama nama di URL (misalnya: latihan2.php?nama=Gemini).

Jika parameter nama ada (isset bernilai true): Akan menampilkan pesan "Selamat Datang" diikuti nilai dari parameter tersebut (menggunakan $_GET['nama']). Data di-sanitize dengan htmlspecialchars() untuk keamanan.

Jika parameter nama tidak ada (isset bernilai false): Akan menampilkan pesan instruksi untuk memasukkan parameter nama di URL.

5. Buatlah file yang bernama `form_post.php`

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar - Form POST</title>
</head>
<body>
    <h2>Form Input</h2>
    <form method="post">
        <label>Nama: </label>
        <input type="text" name="nama">
        <input type="submit" value="Kirim">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo 'Selamat Datang ' . $_POST['nama'];
    }
    ?>
</body>
</html>
```

![foto](https://github.com/nanafnan09/LAB7/blob/d2f5ffc4c39493436edf357cc9eb388749f9c6db/LAB%207%20Image/output%20form%20dasar.png)

Tujuan: Menunjukkan cara mengirim data dari form HTML dan mengambilnya di sisi server menggunakan variabel predefined $_POST.

Isi:

Membuat form HTML dengan satu input teks bernama nama dan tombol submit. Karena atribut method di-set ke post, data akan dikirim menggunakan metode POST.

Blok kode PHP mengecek apakah request yang masuk adalah hasil dari pengiriman form ($_SERVER["REQUEST_METHOD"] == "POST").

Jika request adalah POST: Akan menampilkan pesan "Selamat Datang" diikuti data yang dikirimkan dari form (input dengan name="nama") melalui $_POST['nama'].

6.Buatlah file baru yang bernama `struktur_kontrol.php`

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Struktur Kontrol PHP</title>
</head>
<body>
    
    <h2>Operator Aritmatika</h2>
    <?php
        $gaji = 1000000;
        $pajak = 0.1;
        $thp = $gaji - ($gaji * $pajak);
        echo "Gaji sebelum pajak Rp. " . number_format($gaji) . " <br>";
        echo "Gaji yang dibawa pulang Rp. " . number_format($thp);
    ?>
    <hr>

    <h2>Kondisi IF</h2>
    <?php
        $nama_hari = date("l"); // Mengambil nama hari dalam bahasa Inggris (e.g., Sunday, Monday)
        if ($nama_hari == "Sunday") {
            echo "Hari ini adalah **Minggu**";
        } elseif ($nama_hari == "Monday") {
            echo "Hari ini adalah **Senin**";
        } else {
            echo "Hari ini adalah **" . $nama_hari . "**";
        }
    ?>
    <hr>

    <h2>Kondisi SWITCH</h2>
    <?php
        $nama_hari = date("l");
        switch ($nama_hari) {
            case "Sunday":
                echo "Minggu";
                break;
            case "Monday":
                echo "Senin";
                break;
            default:
                echo "Hari Lain";
        }
    ?>
    <hr>

    <h2>Perulangan FOR (1-10)</h2>
    <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "Perulangan ke: " . $i . '<br />';
        }
    ?>
    <hr>

    <h2>Perulangan WHILE (1-10)</h2>
    <?php
        $i = 1;
        while ($i <= 10) {
            echo "Perulangan ke: " . $i . " <br />";
            $i++;
        }
    ?>
    <hr>

    <h2>Perulangan DO-WHILE (1-10)</h2>
    <?php
        $i = 1;
        do {
            echo "Perulangan ke: " . $i . '<br />';
            $i++;
        } while ($i <= 10);
    ?>
    
</body>
</html>
```

![foto](https://github.com/nanafnan09/LAB7/blob/d2f5ffc4c39493436edf357cc9eb388749f9c6db/LAB%207%20Image/output%20struktur%20kontrol.png)

Tujuan: Mendemonstrasikan penggunaan Operator Aritmatika dan berbagai macam Struktur Kontrol (kondisi dan perulangan) dalam PHP.

Isi:

Operator Aritmatika: Menghitung Gaji yang Dibawa Pulang ($thp) dengan mengurangi Gaji ($gaji) dengan Pajak ($gaji * $pajak).

Kondisi IF-ELSEIF-ELSE: Mengecek nama hari saat ini (date("l")) dan mencetak nama hari yang sesuai.

Kondisi SWITCH: Melakukan pengecekan nama hari saat ini dan mencetak hasil berdasarkan case yang cocok.

Perulangan FOR: Mencetak angka 1 sampai 10 secara berurutan.

Perulangan WHILE: Mencetak angka 1 sampai 10 secara berurutan, menggunakan increment ($i++) di dalam blok perulangan.

Perulangan DO-WHILE: Mencetak angka 1 sampai 10 secara berurutan, memastikan blok kode di dalam do dijalankan minimal satu kali sebelum kondisi di while dicek.


# Pertanyaan dan Tugas

Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan
nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung
umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang
berbeda-beda sesuai pilihan pekerjaan.

# Jawaban

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tugas-Data Karyawan</title>
</head>
<body>
    <h2>Form Data Karyawan</h2>
    <form method="post">
        <label>Nama:</label><input type="text" name="nama" required><br><br>
        <label>Tanggal Lahir:</label><input type="date" name="tgl_lahir" required><br><br>
        <label>Pekerjaan:</label>
        <select name="pekerjaan" required>
            <option value="">-- Pilih Pekerjaan --</option>
            <option value="programmer">Programmer</option>
            <option value="desainer">Desainer Grafis</option>
            <option value="akuntan">IT Support</option>
        </select><br><br>
        <input type="submit" value="Tampilkan Hasil">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $pekerjaan = $_POST['pekerjaan'];

        $tanggal_lahir = new DateTime($tgl_lahir);
        $sekarang = new DateTime();
        $umur = $sekarang->diff($tanggal_lahir)->y;

        $gaji = 0;
        $nama_pekerjaan = '';
        switch ($pekerjaan) {
            case 'programmer':
                $gaji = 8000000;
                $nama_pekerjaan = 'Programmer';
                break;
            case 'desainer':
                $gaji = 6000000;
                $nama_pekerjaan = 'Desainer Grafis';
                break;
            case 'akuntan':
                $gaji = 7000000;
                $nama_pekerjaan = 'IT Support';
                break;
        }

        echo "<hr>";
        echo "<h2>Hasil Data Karyawan</h2>";
        echo "Nama: **" . htmlspecialchars($nama) . "**<br>";
        echo "Umur: **" . $umur . " tahun**<br>";
        echo "Pekerjaan: **" . $nama_pekerjaan . "**<br>";
        echo "Gaji Bulanan: **Rp " . number_format($gaji, 0, ',', '.') . "**<br>";
    }
    ?>
</body>
</html>
```
Hasil output 1 

![foto](https://github.com/nanafnan09/LAB7/blob/416fef773dfe9b0a9a84d138102af3da51e826a4/LAB%207%20Image/tugas-1.png)

Hasil Output 2

![foto](https://github.com/nanafnan09/LAB7/blob/416fef773dfe9b0a9a84d138102af3da51e826a4/LAB%207%20Image/Tugas-2.png)

Hasil Output 3

![foto](https://github.com/nanafnan09/LAB7/blob/416fef773dfe9b0a9a84d138102af3da51e826a4/LAB%207%20Image/Tugas-3.png)

Hasil ketiga foto tersebut menghitung Gaji dari sesuai jenis pekerjaannya dan juga terdapat kolom mengisi nama,tambah tanggal lahir




