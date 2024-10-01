<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predikat Nilai</title>
</head>
<body>
    <h2>Predikat Nilai SMKN 1 Cirebon</h2>
    <form method="post">
        <label for="mtk">Matematika: </label>
        <input type="number" id="mtk" name="mtk" required><br><br>

        <label for="bing">B. Inggris: </label>
        <input type="number" id="bing" name="bing" required><br><br>

        <label for="bindo">B. Indonesia: </label>
        <input type="number" id="bindo" name="bindo" required><br><br>

        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $mtk = $_POST['mtk'];
        $bing = $_POST['bing'];
        $bindo = $_POST['bindo'];

        $Rata_rata = ($mtk + $bing + $bindo) / 3;

        if ($Rata_rata >= 90) {
            $predikat = 'A (Sangat Baik)';
        } elseif ($Rata_rata >= 80) {
            $predikat = 'B (Baik)';
        } elseif ($Rata_rata >= 70) {
            $predikat = 'C (Mengulang)';
        } else {
            $predikat = 'D (Tidak Lulus)'; 
        }

        echo "<h3>Hasil:</h3>";
        echo "MTK: $mtk<br>";
        echo "B. Inggris: $bing<br>";
        echo "B. Indo: $bindo<br>";
        echo "<strong>Rata-rata: " . number_format($Rata_rata, 2) . "</strong><br>";
        echo "<strong>Predikat: $predikat</strong>"; // Display the predicate
    }
    ?>
</body>
</html>
