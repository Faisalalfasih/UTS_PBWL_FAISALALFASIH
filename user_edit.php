<?php

use App\User;

$id = $_GET['id'];
$user = new User();

$row = $user->edit($id);
?>


<form action="index.php?page=user_proses" method="post">
    <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="user_nama" value="<?php echo $row['user_nama']; ?>" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="user_alamat" value="<?php echo $row['user_alamat']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>
<br>
<a href="index.php?page=user"><button>Kembali</button></a>