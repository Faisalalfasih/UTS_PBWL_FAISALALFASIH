<?php 
    namespace App;

    use Inc\Koneksi as Koneksi;

    class User extends Koneksi {
    public function tampil()
    {
        $sql = "SELECT * FROM tb_users";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $user_nama = $_POST['user_nama'];
        $user_alamat = $_POST['user_alamat'];

        $sql = "INSERT INTO tb_users (user_nama, user_alamat) VALUES (:user_nama, :user_alamat)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":user_nama", $user_nama);
        $stmt->bindParam(":user_alamat", $user_alamat);
        $stmt->execute();
    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_users WHERE user_id=:user_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":user_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $user_nama = $_POST['user_nama'];
        $user_alamat = $_POST['user_alamat'];
        $user_id = $_POST['user_id'];

        $sql = "UPDATE tb_users SET user_nama=:user_nama, user_alamat=:user_alamat WHERE user_id=:user_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":user_nama", $user_nama);
        $stmt->bindParam(":user_alamat", $user_alamat);
        $stmt->bindParam(":user_id", $user_id);
        $stmt->execute();
    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_users WHERE user_id=:user_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":user_id", $id);
        $stmt->execute();
    }
}
