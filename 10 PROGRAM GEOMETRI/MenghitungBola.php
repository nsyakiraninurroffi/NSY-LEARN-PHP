<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Bola - Keliling & Luas Permukaan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Hitung Bola</h2>

    <form method="post">
        <label for="jari">Jari-jari (cm)</label>
        <input type="number" step="any" name="jari" id="jari" required>

        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $r = $_POST['jari'];
        $phi = 3.14159265359;

        // Menghitung keliling lingkaran besar bola dan luas permukaan bola
        $keliling = 2 * $phi * $r;
        $luas = 4 * $phi * pow($r, 2);

        echo "<div class='hasil'>";
        echo "Keliling lingkaran besar bola: " . number_format($keliling, 2) . " cm<br>";
        echo "Luas permukaan bola: " . number_format($luas, 2) . " cm²";
        echo "</div>";
    }
    ?>

    <div class="footer">Dibuat oleh: Nesya Kirani Nurroffi</div>
</div>

</body>
</html>
