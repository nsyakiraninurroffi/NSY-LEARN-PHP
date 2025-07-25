<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Balok - Keliling & Luas Permukaan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Hitung Balok</h2>

    <form method="post">
        <label for="panjang">Panjang (cm)</label>
        <input type="number" step="any" name="panjang" id="panjang" required>

        <label for="lebar">Lebar (cm)</label>
        <input type="number" step="any" name="lebar" id="lebar" required>

        <label for="tinggi">Tinggi (cm)</label>
        <input type="number" step="any" name="tinggi" id="tinggi" required>

        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $p = $_POST['panjang'];
        $l = $_POST['lebar'];
        $t = $_POST['tinggi'];

        // Menghitung keliling dan luas permukaan balok
        $keliling = 4 * ($p + $l + $t);
        $luas = 2 * ($p * $l + $p * $t + $l * $t);

        // Menampilkan hasil
        echo "<div class='hasil'>";
        echo "Keliling balok: " . number_format($keliling, 2) . " cm<br>";
        echo "Luas permukaan balok: " . number_format($luas, 2) . " cm²";
        echo "</div>";
    }
    ?>

    <div class="footer">Dibuat oleh: Nesya Kirani Nurroffi</div>
</div>

</body>
</html>
