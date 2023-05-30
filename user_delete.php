<?php

use App\User;

$id = $_GET['id'];

$user = new User();
$rows = $user->delete($id);

?>

Data berhasil dihapus!

<a href="index.php?page=user">Kembali</a>