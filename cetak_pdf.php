<?php
require __DIR__ . '/vendor/autoload.php';
include "koneksi.php";

use Mpdf\Mpdf;

$data = mysqli_query($koneksi, "SELECT * FROM produk_besi");

$html = '
<style>
body {
    font-family: Arial;
}
h1 {
    text-align: center;
    color: #cc0066;
}
table {
    width: 100%;
    border-collapse: collapse;
}
th {
    background: #ff66b2;
    color: white;
    padding: 8px;
}
td {
    border: 1px solid #999;
    padding: 6px;
    text-align: center;
}
.footer {
    text-align: center;
    margin-top: 20px;
    color: #cc0066;
}
</style>

<h1>LAPORAN PRODUK BESI</h1>
<p>
Laporan ini berisi data produk besi seperti pedok, kursi, meja, rak, dan kanopi
yang digunakan untuk berbagai kebutuhan seperti hotel, sekolah, perkantoran,
industri, dan fasilitas umum lainnya.
</p>

<table>
<tr>
    <th>No</th>
    <th>Nama Produk</th>
    <th>Kategori</th>
    <th>Penggunaan</th>
    <th>Harga</th>
    <th>Stok</th>
</tr>
';

$no = 1;
while($row = mysqli_fetch_assoc($data)) {
    $html .= "
    <tr>
        <td>{$no}</td>
        <td>{$row['nama_produk']}</td>
        <td>{$row['kategori']}</td>
        <td>{$row['target_penggunaan']}</td>
        <td>Rp ".number_format($row['harga'])."</td>
        <td>{$row['stok']}</td>
    </tr>";
    $no++;
}

$html .= '
</table>

<div class="footer">
    <p>Laporan Produk Besi menggunakan mPDF</p>
</div>
';

$mpdf = new Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output("Laporan_Produk_Besi.pdf", "I");
