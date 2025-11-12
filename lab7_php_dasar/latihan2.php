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