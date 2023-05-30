<?php

use App\Hasil as Hasil;

$hasil = new Hasil;
$dataHasil = $hasil->tampil();
?>

<h2 style="text-align: center;">Hasil Laporan</h2>
<a href="index.php?page=hasil_input">Tambah Hasil</a>
<table border="1">
    <tr style="font-weight: bold; font-size:20px;">
        <td>ID</td>
        <td>Nama Pegawai</td>
        <td>Nama Pelanggan</td>
        <td>Alamat</td>
        <td>Jenis Sampah</td>
        <td>Berat Sampah</td>
    </tr>
    <?php
    foreach ($dataHasil as $row) {
    ?>
        <tr>
            <td><?php echo $row["hsl_id"] ?></td>
            <td><?php echo $row["pgw_nama"] ?></td>
            <td><?php echo $row["user_nama"] ?></td>
            <td><?php echo $row["user_alamat"] ?></td>
            <td><?php echo $row["jns_nama"] ?></td>
            <td><?php echo $row["hsl_berat"] ?> Kg</td>
        </tr>
    <?php } ?>
</table>