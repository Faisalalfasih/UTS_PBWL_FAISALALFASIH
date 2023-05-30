<?php

use App\Pegawai;

$id = $_GET['id'];
$pegawai = new Pegawai();

$row = $pegawai->edit($id);
?>

<h3>Edit Pegawai</h3>

<form action="index.php?page=pegawai_proses" method="post">
    <input type="hidden" name="pgw_id" value="<?php echo $row['pgw_id']; ?>">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="pgw_nama" value="<?php echo $row['pgw_nama']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>
<br>
<a href="index.php?page=pegawai"><button>Kembali</button></a>