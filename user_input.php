<h3>Tambah User</h3>

<form action="index.php?page=user_proses" method="post">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="user_nama" required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="user_alamat"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>
<br>
<a href="index.php?page=user"><button class="btn-back">KEMBALI</button></a>