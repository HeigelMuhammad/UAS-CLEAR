<?php
include 'koneksi.php';

if (isset($_POST['form-jumlah'])) {
    $JumlahOrang = $_POST['form-jumlah'];

    // Validasi untuk memastikan jumlah tidak kosong atau nol
    if ($JumlahOrang == "" || $JumlahOrang == 0) {
        echo "<script>alert('Jumlah tidak boleh kosong atau nol');window.history.back();</script>";
        exit;
    }

    $query = "INSERT INTO pemesanan (Jumlah_orang) VALUES ('$JumlahOrang')";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    } else {
        echo "<script>alert('Pemesanan berhasil!');window.location.href='Invoice.php';</script>";
    }
}
?>
