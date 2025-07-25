<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Trapesium - Luas & Keliling</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Hitung Luas & Keliling Trapesium</h2>

    <form method="post">
        <label>Masukkan Panjang Sisi Sejajar a (cm)</label>
        <input type="number" name="a" step="any" required>

        <label>Masukkan Panjang Sisi Sejajar b (cm)</label>
        <input type="number" name="b" step="any" required>

        <label>Masukkan Panjang Sisi c (cm)</label>
        <input type="number" name="c" step="any" required>

        <label>Masukkan Panjang Sisi d (cm)</label>
        <input type="number" name="d" step="any" required>

        <label>Masukkan Tinggi Trapesium (cm)</label>
        <input type="number" name="t" step="any" required>

        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $d = $_POST['d'];
        $t = $_POST['t'];

        $keliling = $a + $b + $c + $d;
        $luas = 0.5 * ($a + $b) * $t;

        echo "<div class='hasil'>";
        echo "Keliling Trapesium = " . number_format($keliling, 2) . " cm<br>";
        echo "Luas Trapesium = " . number_format($luas, 2) . " cm²";
        echo "</div>";
    }
    ?>

    <div class="footer">Dibuat oleh: Nesya Kirani Nurroffi</div>
</div>

</body>
</html>
