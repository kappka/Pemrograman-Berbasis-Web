<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$asal = $_POST['asal'];
$tujuan = $_POST['tujuan'];
$total = $_POST['total'];
$tanggal = date("Y-m-d");

mysqli_query($koneksi, "INSERT INTO rute (maskapai, asal, tujuan, harga, pajak, total, tanggal)
VALUES ('$nama', '$asal', '$tujuan', 0, 0, $total, '$tanggal')");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Konfirmasi Berhasil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Konfirmasi Pembayaran Berhasil</h2>
<p>Terima kasih <?= htmlspecialchars($nama) ?>. Pembayaran sebesar <strong>Rp <?= number_format($total) ?></strong> telah dikonfirmasi.</p>
<a href="index.php">Kembali ke Pemesanan</a>
</body>
</html>
