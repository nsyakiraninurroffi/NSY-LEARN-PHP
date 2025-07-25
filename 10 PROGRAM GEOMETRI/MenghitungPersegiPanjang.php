<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Persegi Panjang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h2>Kalkulator Persegi Panjang</h2>
        <form method="post">
            <label for="panjang">Panjang (cm)</label>
            <input type="number" name="panjang" id="panjang" required>

            <label for="lebar">Lebar (cm)</label>
            <input type="number" name="lebar" id="lebar" required>

            <input type="submit" name="hitung" value="Hitung">
        </form>

        <?php
        if (isset($_POST['hitung'])) {
            $p = $_POST['panjang'];
            $l = $_POST['lebar'];
            $luas = $p * $l;
            $keliling = 2 * ($p + $l);

            echo "<div class='hasil'>";
            echo "<strong>Hasil Perhitungan:</strong><br>";
            echo "Luas: {$luas} cm²<br>";
            echo "Keliling: {$keliling} cm";
            echo "</div>";
        }
        ?>

        <div class="footer">Dibuat oleh: Nesya Kirani Nurroffi</div>
    </div>

</body>
</html>
