<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tabung - Luas & Volume</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Hitung Luas & Volume Tabung</h2>

    <form method="post">
        <label for="jari">Masukkan Jari-jari Alas (cm)</label>
        <input type="number" name="jari" step="any" required>

        <label for="tinggi">Masukkan Tinggi Tabung (cm)</label>
        <input type="number" name="tinggi" step="any" required>

        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $r = $_POST['jari'];
        $t = $_POST['tinggi'];
        $phi = pi();

        $luas_alas = $phi * pow($r, 2);
        $keliling_alas = 2 * $phi * $r;
        $luas_permukaan = 2 * $luas_alas + $keliling_alas * $t;
        $volume = $luas_alas * $t;

        echo "<div class='hasil'>";
        echo "Luas Permukaan Tabung = " . number_format($luas_permukaan, 2) . " cm²<br>";
        echo "Volume Tabung = " . number_format($volume, 2) . " cm³";
        echo "</div>";
    }
    ?>

    <div class="footer">Dibuat oleh: Nesya Kirani Nurroffi</div>
</div>

</body>
</html>
