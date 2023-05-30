<?php

use App\Hasil;

$hsl = new Hasil();

if (isset($_POST['btn_simpan'])) {
    $hsl->simpan();
    header("location:index.php?page=hasil");
}

if (isset($_POST['btn_update'])) {
    $hsl->update();
    header("location:index.php?page=hasil");
}
