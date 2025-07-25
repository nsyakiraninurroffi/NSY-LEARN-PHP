<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Jajar Genjang - Keliling & Luas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Hitung Jajar Genjang</h2>

    <form method="post">
        <label for="alas">Panjang Alas (cm)</label>
        <input type="number" step="any" name="alas" id="alas" required>

        <label for="sisi">Panjang Sisi Miring (cm)</label>
        <input type="number" step="any" name="sisi" id="sisi" required>

        <label for="tinggi">Tinggi (cm)</label>
        <input type="number" step="any" name="tinggi" id="tinggi" required>

        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $a = $_POST['alas'];
        $b = $_POST['sisi'];
        $t = $_POST['tinggi'];

        // Menghitung keliling dan luas jajar genjang
        $keliling = 2 * ($a + $b);
        $luas = $a * $t;

        echo "<div class='hasil'>";
        echo "Keliling jajar genjang: " . number_format($keliling, 2) . " cm<br>";
        echo "Luas jajar genjang: " . number_format($luas, 2) . " cm²";
        echo "</div>";
    }
    ?>

    <div class="footer">Dibuat oleh: Nesya Kirani Nurroffi</div>
</div>

</body>
</html>
