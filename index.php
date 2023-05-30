<?php require_once "vendor/autoload.php";
require_once "inc/Koneksi.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEDULI SAMPAH</title>

    <link rel="shortcut icon" href="layouts/assets/img/sampahicon.png" type="image/x-icon">
    <link rel="stylesheet" href="layouts/assets/css/style.css">

<body>
    <main>
        <header>
            <img src="./assets/images/headeraku.jpeg" alt="">
        </header>

        <nav>
            <ul>
                <li><a href="index.php?page=hasil">HASIL</a></li>
                <li><a href="index.php?page=jenis">JENIS</a></li>
                <li><a href="index.php?page=user">USER</a></li>
                <li><a href="index.php?page=pegawai">PEGAWAI</a></li>
                <li><a href="index.php">HOME</a></li>
            </ul>
        </nav>

        <section>
            <?php
            if (isset($_GET['page'])) {
                include $_GET['page'] . ".php";
            } else {
                include "main.php";
            }

            ?>
        </section>

        <footer>
            Copyright &copy; 2023. Designed By Faisal Al Fasih
        </footer>

    </main>

</body>

</html>