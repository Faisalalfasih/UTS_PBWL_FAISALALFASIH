<?php

use App\Jenis as Jenis;
use App\Pegawai as Pegawai;
use App\User as User;

$jns = new Jenis;
$dataJenis = $jns->tampil();

$pgw = new Pegawai;
$dataPegawai = $pgw->tampil();

$usr = new User;
$dataUser = $usr->tampil();
?>

<h3>Tambah Jenis Sampah</h3>

<form action="index.php?page=hasil_proses" method="post">
    <table>
        <tr>
            <td>Pegawai</td>
            <td>
                <select name="hsl_id_pegawai" id="">
                    <?php
                    foreach ($dataPegawai as $row) {
                    ?>
                        <option value="<?= $row['pgw_id'] ?>"><?= $row['pgw_nama'] ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Penduduk</td>
            <td>
                <select name="hsl_id_user" id="">
                    <?php
                    foreach ($dataUser as $row) {
                    ?>
                        <option value="<?= $row['user_id'] ?>"><?= $row['user_nama'] ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Jenis Sampah</td>
            <td>
                <select name="hsl_id_jenis">
                    <?php
                    foreach ($dataJenis as $row) {
                    ?>
                        <option value=" <?= $row['jns_id'] ?>"><?= $row['jns_nama'] ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Berat(Kg)</td>
            <td><input type="number" min="0" name="hsl_berat"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>
<br>
<a href="index.php?page=jenis"><button class="btn-back">KEMBALI</button></a>