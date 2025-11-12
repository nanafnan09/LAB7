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