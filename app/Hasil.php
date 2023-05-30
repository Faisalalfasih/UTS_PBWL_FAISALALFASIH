<?php

namespace App;

use Inc\Koneksi as Koneksi;

class Hasil extends Koneksi
{
    public function tampil()
    {
        $sql = "SELECT * FROM tb_hasil as hasil JOIN tb_pegawai as pegawai ON hasil.hsl_id_pegawai=pegawai.pgw_id JOIN tb_users as users ON hasil.hsl_id_user=users.user_id JOIN tb_jenis as jenis ON hasil.hsl_id_jenis=jenis.jns_id";
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
        $hsl_id_pegawai = $_POST['hsl_id_pegawai'];
        $hsl_id_jenis = $_POST['hsl_id_jenis'];
        $hsl_id_user = $_POST['hsl_id_user'];
        $hsl_berat = $_POST['hsl_berat'];


        $sql = "INSERT INTO tb_hasil (hsl_id_pegawai, hsl_id_jenis, hsl_id_user, hsl_berat) VALUES (:hsl_id_pegawai, :hsl_id_jenis, :hsl_id_user, :hsl_berat)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":hsl_id_pegawai", $hsl_id_pegawai);
        $stmt->bindParam(":hsl_id_jenis", $hsl_id_jenis);
        $stmt->bindParam(":hsl_id_user", $hsl_id_user);
        $stmt->bindParam(":hsl_berat", $hsl_berat);
        $stmt->execute();
    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_hasil WHERE hsl_id=:hsl_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":hsl_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $hsl_id_pegawai = $_POST['hsl_id_pegawai'];
        $hsl_id_jenis = $_POST['hsl_id_jenis'];
        $hsl_id_berat = $_POST['hsl_id_berat'];

        $sql = "UPDATE tb_hasil SET hsl_id_pegawai=:hsl_id_pegawai, hsl_id_jenis=:hsl_id_jenis WHERE hsl_id_berat=:hsl_id_berat";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":hsl_id_pegawai", $hsl_id_pegawai);
        $stmt->bindParam(":hsl_id_jenis", $hsl_id_jenis);
        $stmt->bindParam(":hsl_id_berat", $hsl_id_berat);
        $stmt->execute();
    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_hasil WHERE hsl_id=:hsl_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":hsl_id", $id);
        $stmt->execute();
    }
}
