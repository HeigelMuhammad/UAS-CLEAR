<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    rel="stylesheet" href="FormData.css"
    />
    <title>Reservasi</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    </style>
</head>
<header style="font-family: 'Poppins', sans-serif;">
    <nav>
        <div class="menu-block">
            <h3 id="text-head">Wisata Sendang Growong</h3>
        <ul class="menu">
            <li><a href="page2.html">Wisata</a></li>
            <li><a href="#">Produk Unggulan</a></li>
            <li><a href="#">Berita</a></li>
            <li><a href="profil.html">Profil</a></li>
        </ul>
        </div>
    </nav>
</header>
<?php
include 'koneksi.php';

// Ambil data pemesanan terbaru
$query = "SELECT p.Jumlah_orang, p.total_harga, w.Nama, w.No_telp 
          FROM pemesanan p 
          JOIN wisatawan w ON p.Id_wisatawan = w.Id_wisatawan 
          ORDER BY p.Id_pemesanan DESC LIMIT 1";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
}

$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Pemesanan</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        .invoice-item {
            margin-bottom: 15px;
        }

        .invoice-item span {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Invoice Pemesanan</h1>
    <div class="invoice-item">
        <span>Nama:</span> <?php echo htmlspecialchars($data['Nama'], ENT_QUOTES, 'UTF-8'); ?>
    </div>
    <div class="invoice-item">
        <span>Jumlah Orang:</span> <?php echo htmlspecialchars($data['Jumlah_orang'], ENT_QUOTES, 'UTF-8'); ?>
    </div>
    <div class="invoice-item">
        <span>Nomor HP:</span> <?php echo htmlspecialchars($data['No_telp'], ENT_QUOTES, 'UTF-8'); ?>
    </div>
    <div class="invoice-item">
        <span>Total Harga:</span> Rp <?php echo number_format($data['total_harga'], 0, ',', '.'); ?>
    </div>
</body>
</html>
