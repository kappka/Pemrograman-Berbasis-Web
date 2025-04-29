<?php
include 'koneksi.php';

$asal = $_POST['asal'];
$tujuan = $_POST['tujuan'];
$nama = $_POST['nama'];
$jumlah = (int) $_POST['jumlah'];

$bandara_asal = [
    "Soekarno Hatta" => 65000,
    "Husein Sastranegara" => 50000,
    "Abdul Rachman Saleh" => 40000,
    "Juanda" => 30000
];

$bandara_tujuan = [
    "Ngurah Rai" => 85000,
    "Hasanuddin" => 70000,
    "Inanwatan" => 90000,
    "Sultan Iskandar Muda" => 60000
];

$pajak = $bandara_asal[$asal] + $bandara_tujuan[$tujuan];
$harga_per_tiket = 500000; // bisa dinamis jika perlu
$total_bayar = ($harga_per_tiket + $pajak) * $jumlah;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Rincian Pembayaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Rincian Harga Tiket</h2>

<div class="container">
<table>
    <tr><td>Nama Pembeli</td><td><?= $nama ?></td></tr>
    <tr><td>Jumlah Tiket</td><td><?= $jumlah ?></td></tr>
    <tr><td>Asal</td><td><?= $asal ?></td></tr>
    <tr><td>Tujuan</td><td><?= $tujuan ?></td></tr>
    <tr><td>Harga Tiket per orang</td><td><?= number_format($harga_per_tiket) ?></td></tr>
    <tr><td>Total Pajak</td><td><?= number_format($pajak) ?></td></tr>
    <tr><td><strong>Total yang Harus Dibayar</strong></td><td><strong><?= number_format($total_bayar) ?></strong></td></tr>
</table>
</div>

<p>Silakan transfer ke rekening: <strong>1234567890 - Bank ABC (a.n. PT Penerbangan)</strong></p>

<div class="container">
<form action="konfirmasi.php" method="POST">
    <input type="hidden" name="nama" value="<?= $nama ?>">
    <input type="hidden" name="jumlah" value="<?= $jumlah ?>">
    <input type="hidden" name="asal" value="<?= $asal ?>">
    <input type="hidden" name="tujuan" value="<?= $tujuan ?>">
    <input type="hidden" name="total" value="<?= $total_bayar ?>">
    <button type="submit">Saya Sudah Transfer - Konfirmasi</button>
</form>
</div>
</body>
</html>
