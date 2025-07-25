<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kerucut - Keliling & Luas Permukaan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Hitung Kerucut</h2>

    <form method="post">
        <label for="jari">Jari-jari alas (cm)</label>
        <input type="number" step="any" name="jari" id="jari" required>

        <label for="pelukis">Garis Pelukis (cm)</label>
        <input type="number" step="any" name="pelukis" id="pelukis" required>

        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $r = $_POST['jari'];
        $s = $_POST['pelukis'];
        $phi = 3.14159265359;

        // Menghitung keliling alas dan luas permukaan kerucut
        $keliling = 2 * $phi * $r;
        $luas = $phi * $r * ($r + $s);

        echo "<div class='hasil'>";
        echo "Keliling alas kerucut: " . number_format($keliling, 2) . " cm<br>";
        echo "Luas permukaan kerucut: " . number_format($luas, 2) . " cm²";
        echo "</div>";
    }
    ?>

    <div class="footer">Dibuat oleh: Nesya Kirani Nurroffi</div>
</div>

</body>
</html>
