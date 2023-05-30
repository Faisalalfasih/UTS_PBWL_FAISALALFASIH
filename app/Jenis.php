<?php

namespace App;

use Inc\Koneksi as Koneksi;

class Jenis extends Koneksi
{
    public function tampil()
    {
        $sql = "SELECT * FROM tb_jenis";
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
        $jns_nama = $_POST['jns_nama'];

        $sql = "INSERT INTO tb_jenis (jns_nama) VALUES (:jns_nama)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":jns_nama", $jns_nama);
        $stmt->execute();
    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_jenis WHERE jns_id=:jns_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":jns_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $jns_nama = $_POST['jns_nama'];
        $jns_id = $_POST['jns_id'];

        $sql = "UPDATE tb_jenis SET jns_nama=:jns_nama WHERE jns_id=:jns_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":jns_nama", $jns_nama);
        $stmt->bindParam(":jns_id", $jns_id);
        $stmt->execute();
    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_jenis WHERE jns_id=:jns_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":jns_id", $id);
        $stmt->execute();
    }
}
