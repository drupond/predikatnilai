<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penghitung Diskon dengan Nama Barang</title>
</head>
<body>

    <h2>Aplikasi Penghitung Diskon</h2>
    
    <form method="POST" action="">
        <label for="nama_barang">Nama Barang:</label>
        <input type="text" name="nama_barang" />
        <br><br>

        <label for="total_belanja">Total Belanja (Rp):</label>
        <input type="number" name="total_belanja" id="total_belanja" required>
        <br><br>

        <input type="submit" value="Hitung Diskon">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama_barang = $_POST['nama_barang'] ?? ''; 
        $total_belanja = $_POST['total_belanja'];
        $diskon = 0;

        if (isset($_POST['nama_barang'])) {
    $nama_barang = $_POST['nama_barang'];
        }else{
    $nama_barang = ''; 
        }
        if ($total_belanja > 200000) {
            $diskon = 20;
        } elseif ($total_belanja > 100000) {
            $diskon = 10;
        }

        $potongan = ($diskon / 100) * $total_belanja;
        $total_setelah_diskon = $total_belanja - $potongan ;


        echo "<h3>Detail Diskon</h3>";
        echo "Nama Barang: " . htmlspecialchars($nama_barang) . "<br>";
        echo "Total Belanja: Rp " . number_format($total_belanja, 0, ',', '.') . "<br>";
        echo "Diskon: $diskon%<br>";
        echo "Potongan Harga: Rp " . number_format($potongan, 0, ',', '.') . "<br>";
        echo "Total Setelah Diskon: Rp " . number_format($total_setelah_diskon, 0, ',', '.') . "<br>";
    }
    ?>

</body>
</html>
