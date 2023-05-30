<?php

use App\Pegawai as Pegawai;

$pegawai = new Pegawai;
$dataPegawai = $pegawai->tampil();
?>

<h2 style="text-align: center;">Daftar Pegawai</h2>
<a href="index.php?page=pegawai_input">Tambah Pegawai</a>
<table border="1">
    <tr>
    <tr style="font-weight: bold; font-size:20px;">
        <td>ID</td>
        <td>Nama Pegawai</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <?php
    foreach ($dataPegawai as $row) {
    ?>
        <tr>
            <td><?php echo $row["pgw_id"] ?></td>
            <td><?php echo $row["pgw_nama"] ?></td>
            <td><a href="index.php?page=pegawai_edit&id=<?php echo $row['pgw_id']; ?>">Edit</a></td>
            <td><a href="index.php?page=pegawai_delete&id=<?php echo $row['pgw_id']; ?>">Delete</a></td>
        </tr>
    <?php } ?>
</table>