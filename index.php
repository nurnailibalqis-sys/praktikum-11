<?php
include "koneksi.php";
$data = mysqli_query($koneksi, "SELECT * FROM produk_besi");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Produk Besi</title>
    <style>
        body {
            font-family: Arial;
            background: #ffe6f0;
        }
        h2 {
            text-align: center;
            color: #cc0066;
        }
        table {
            border-collapse: collapse;
            width: 90%;
            margin: auto;
            background: #fff;
        }
        th {
            background: #ff66b2;
            color: white;
            padding: 10px;
        }
        td {
            padding: 8px;
            text-align: center;
        }
        a {
            display: block;
            width: 200px;
            margin: 20px auto;
            text-align: center;
            padding: 10px;
            background: #cc0066;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }
    </style>
</head>
<body>

<h2>Daftar Produk Besi</h2>

<table border="1">
<tr>
    <th>No</th>
    <th>Nama Produk</th>
    <th>Kategori</th>
    <th>Penggunaan</th>
    <th>Harga</th>
    <th>Stok</th>
</tr>

<?php $no=1; while($row = mysqli_fetch_assoc($data)) { ?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= $row['nama_produk'] ?></td>
    <td><?= $row['kategori'] ?></td>
    <td><?= $row['target_penggunaan'] ?></td>
    <td>Rp <?= number_format($row['harga']) ?></td>
    <td><?= $row['stok'] ?></td>
</tr>
<?php } ?>

</table>

<a href="cetak_pdf.php" target="_blank">Cetak Laporan PDF</a>

</body>
</html>
