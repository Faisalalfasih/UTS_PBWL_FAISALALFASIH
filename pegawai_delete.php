<?php

use App\Pegawai;

$id = $_GET['id'];

$pegawai = new Pegawai();
$rows = $pegawai->delete($id);

?>

Data berhasil dihapus!

<a href="index.php?page=pegawai">Kembali</a>