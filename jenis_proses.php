<?php

use App\Jenis;

$jenis = new Jenis();

if (isset($_POST['btn_simpan'])) {
    $jenis->simpan();
    header("location:index.php?page=jenis");
}

if (isset($_POST['btn_update'])) {
    $jenis->update();
    header("location:index.php?page=jenis");
}
