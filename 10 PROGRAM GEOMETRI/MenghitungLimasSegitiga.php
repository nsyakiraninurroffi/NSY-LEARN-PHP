<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Limas Segitiga - Keliling & Luas Permukaan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Hitung Limas Segitiga</h2>

        // Form untuk input data
    <form method="post">
        <label for="a">Panjang sisi a (cm)</label>
        <input type="number" step="any" name="a" required>

        <label for="b">Panjang sisi b (cm)</label>
        <input type="number" step="any" name="b" required>

        <label for="c">Panjang sisi c (cm)</label>
        <input type="number" step="any" name="c" required>

        <label for="t_alas">Tinggi alas segitiga (cm)</label>
        <input type="number" step="any" name="t_alas" required>

        <label for="t1">Tinggi sisi tegak sisi a (cm)</label>
        <input type="number" step="any" name="t1" required>

        <label for="t2">Tinggi sisi tegak sisi b (cm)</label>
        <input type="number" step="any" name="t2" required>

        <label for="t3">Tinggi sisi tegak sisi c (cm)</label>
        <input type="number" step="any" name="t3" required>

        <input type="submit" name="hitung" value="Hitung">
    </form>

        // PHP untuk menghitung keliling dan luas permukaan limas segitiga
    <?php
    if (isset($_POST['hitung'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $t_alas = $_POST['t_alas'];
        $t1 = $_POST['t1'];
        $t2 = $_POST['t2'];
        $t3 = $_POST['t3'];

        // Menghitung keliling dan luas permukaan limas segitiga
        $keliling = $a + $b + $c;
        $luas = 0.5 * $a * $t_alas + 0.5 * $a * $t1 + 0.5 * $b * $t2 + 0.5 * $c * $t3;

        echo "<div class='hasil'>";
        echo "Keliling alas limas: " . number_format($keliling, 2) . " cm<br>";
        echo "Luas permukaan limas: " . number_format($luas, 2) . " cm²";
        echo "</div>";
    }
    ?>

    <div class="footer">Dibuat oleh: Nesya Kirani Nurroffi</div>
</div>

</body>
</html>
