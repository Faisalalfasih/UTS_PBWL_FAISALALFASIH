<?php

use App\User as User;

$user = new User;
$dataUser = $user->tampil();
?>

<h2 style="text-align: center;">Daftar User</h2>
<a href="index.php?page=user_input">Tambah User</a>
<table border="1">
    <tr style="font-weight: bold; font-size:20px;">
        <td>ID</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <?php
    foreach ($dataUser as $row) {
    ?>
        <tr>
            <td><?php echo $row["user_id"] ?></td>
            <td><?php echo $row["user_nama"] ?></td>
            <td><?php echo $row["user_alamat"] ?></td>
            <td><a href="index.php?page=user_edit&id=<?php echo $row['user_id']; ?>">Edit</a></td>
            <td><a href="index.php?page=user_delete&id=<?php echo $row['user_id']; ?>">Delete</a></td>
        </tr>
    <?php } ?>
</table>