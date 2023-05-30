<?php

use App\Jenis;

$id = $_GET['id'];
$jenis = new Jenis();

$row = $jenis->edit($id);
?>


<form action="index.php?page=jenis_proses" method="post">
    <input type="hidden" name="jns_id" value="<?php echo $row['jns_id']; ?>">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="jns_nama" value="<?php echo $row['jns_nama']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>
<br>
<a href="index.php?page=jenis"><button>Kembali</button></a>