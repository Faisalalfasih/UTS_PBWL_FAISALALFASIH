<?php

namespace App;

use Inc\Koneksi as Koneksi;

class Pegawai extends Koneksi
{
    public function tampil()
    {
        $sql = "SELECT * FROM tb_pegawai";
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
        $pgw_nama = $_POST['pgw_nama'];

        $sql = "INSERT INTO tb_pegawai (pgw_nama) VALUES (:pgw_nama)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pgw_nama", $pgw_nama);
        $stmt->execute();
    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_pegawai WHERE pgw_id=:pgw_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pgw_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $pgw_nama = $_POST['pgw_nama'];
        $pgw_id = $_POST['pgw_id'];

        $sql = "UPDATE tb_pegawai SET pgw_nama=:pgw_nama WHERE pgw_id=:pgw_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pgw_nama", $pgw_nama);
        $stmt->bindParam(":pgw_id", $pgw_id);
        $stmt->execute();
    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_pegawai WHERE pgw_id=:pgw_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pgw_id", $id);
        $stmt->execute();
    }
}
