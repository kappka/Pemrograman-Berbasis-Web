<!DOCTYPE html>
<html>
<head>
    <title>Pembelian Tiket Penerbangan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Form Pembelian Tiket</h2>

<div class="container">
    <form action="proses.php" method="POST">
        <div>
            <label>Nama Pembeli:</label>
            <input type="text" name="nama" required>
        </div>

        <div>
            <label>Jumlah Tiket:</label>
            <input type="number" name="jumlah" min="1" required>
        </div>

        <div>
            <label>Bandara Asal:</label>
            <select name="asal" required>
                <?php
                $bandara_asal = [
                    "Soekarno Hatta" => 65000,
                    "Husein Sastranegara" => 50000,
                    "Abdul Rachman Saleh" => 40000,
                    "Juanda" => 30000
                ];
                ksort($bandara_asal);
                foreach ($bandara_asal as $nama => $pajak) {
                    echo "<option value=\"$nama\">$nama</option>";
                }
                ?>
            </select>
        </div>

        <div>
            <label>Bandara Tujuan:</label>
            <select name="tujuan" required>
                <?php
                $bandara_tujuan = [
                    "Ngurah Rai" => 85000,
                    "Hasanuddin" => 70000,
                    "Inanwatan" => 90000,
                    "Sultan Iskandar Muda" => 60000
                ];
                ksort($bandara_tujuan);
                foreach ($bandara_tujuan as $nama => $pajak) {
                    echo "<option value=\"$nama\">$nama</option>";
                }
                ?>
            </select>
        </div>

        <button type="submit">Cek Harga</button>
    </form>
</div>


</body>
</html>
