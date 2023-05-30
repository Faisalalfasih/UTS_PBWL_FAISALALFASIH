<?php

use App\User;

$user = new User();

if (isset($_POST['btn_simpan'])) {
    $user->simpan();
    header("location:index.php?page=user");
}

if (isset($_POST['btn_update'])) {
    $user->update();
    header("location:index.php?page=user");
}
