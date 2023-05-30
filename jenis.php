<?php

use App\Jenis as Jenis;

$jenis = new Jenis;
$dataJenis = $jenis->tampil();
?>

<h2 style="text-align: center;">Daftar Jenis Sampah</h2>
<a href="index.php?page=jenis_input">Tambah Jenis Sampah</a>
<table border="1">
    <tr>
    <tr style="font-weight: bold; font-size:20px;">
        <td>id</td>
        <td>Jenis</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <?php
    foreach ($dataJenis as $row) {
    ?>
        <tr>
            <td><?php echo $row["jns_id"] ?></td>
            <td><?php echo $row["jns_nama"] ?></td>
            <td><a href="index.php?page=jenis_edit&id=<?php echo $row['jns_id']; ?>">Edit</a></td>
            <td><a href="index.php?page=jenis_delete&id=<?php echo $row['jns_id']; ?>">Delete</a></td>
        </tr>
    <?php } ?>
</table>