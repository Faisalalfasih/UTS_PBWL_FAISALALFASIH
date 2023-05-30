<?php

use App\Pegawai;

$pegawai = new Pegawai();

if (isset($_POST['btn_simpan'])) {
    $pegawai->simpan();
    header("location:index.php?page=pegawai");
}

if (isset($_POST['btn_update'])) {
    $pegawai->update();
    header("location:index.php?page=pegawai");
}
