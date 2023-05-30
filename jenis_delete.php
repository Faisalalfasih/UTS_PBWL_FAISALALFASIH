<?php

use App\Jenis;

$id = $_GET['id'];

$jenis = new Jenis();
$rows = $jenis->delete($id);

?>

Data berhasil dihapus!

<a href="index.php?page=jenis">Kembali</a>