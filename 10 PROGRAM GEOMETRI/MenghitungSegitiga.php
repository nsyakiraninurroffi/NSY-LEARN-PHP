<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Segitiga - Luas & Keliling</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Hitung Segitiga</h2>

    <form method="post">
        <label for="alas">Masukkan Alas (cm)</label>
        <input type="number" name="alas" step="any" required>

        <label for="tinggi">Masukkan Tinggi (cm)</label>
        <input type="number" name="tinggi" step="any" required>

        <label for="lebar">Masukkan Panjang Sisi Miring (cm)</label>
        <input type="number" name="lebar" step="any" required>

        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];
        $lebar = $_POST['lebar'];

        $luas = 0.5 * $alas * $tinggi;
        $keliling = $alas + $tinggi + $lebar;

        echo "<div class='hasil'>";
        echo "Luas Segitiga = " . number_format($luas, 2) . " cm²<br>";
        echo "Keliling Segitiga = " . number_format($keliling, 2) . " cm";
        echo "</div>";
    }
    ?>

    <div class="footer">Dibuat oleh: Nesya Kirani Nurroffi</div>
</div>

</body>
</html>
