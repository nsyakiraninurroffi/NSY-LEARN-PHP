<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Lingkaran - Luas & Keliling</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Hitung Lingkaran</h2>

    <form method="post">
        <label for="jari">Masukkan jari-jari lingkaran (cm)</label>
        <input type="number" step="any" name="jari" required>

        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $r = $_POST['jari'];
        $phi = 3.14;
        $luas = $phi * $r * $r;
        $keliling = 2 * $phi * $r;

        echo "<div class='hasil'>";
        echo "Luas Lingkaran = " . number_format($luas, 2) . " cm²<br>";
        echo "Keliling Lingkaran = " . number_format($keliling, 2) . " cm";
        echo "</div>";
    }
    ?>

    <div class="footer">Dibuat oleh: Nesya Kirani Nurroffi</div>
</div>

</body>
</html>
