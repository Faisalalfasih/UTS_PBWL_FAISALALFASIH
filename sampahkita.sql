CREATE TABLE tb_users(
      user_id INT(11) AUTO_INCREMENT,
      user_nama VARCHAR(100) NOT NULL,
      user_alamat TEXT NOT NULL,
      PRIMARY KEY(user_id)
);

CREATE TABLE tb_jenis(
      jns_id INT(11) AUTO_INCREMENT,
      jns_nama VARCHAR(100) NOT NULL,
      PRIMARY KEY (jns_id),
      UNIQUE KEY (jns_nama)
);

CREATE TABLE tb_pegawai(
      pgw_id INT(11) AUTO_INCREMENT,
      pgw_nama VARCHAR(100) NOT NULL,
      PRIMARY KEY(pgw_id)
);

CREATE TABLE tb_hasil(
      hsl_id INT(11) AUTO_INCREMENT,
      hsl_id_pegawai INT(11) NOT NULL,
      hsl_id_user INT(11) NOT NULL,
      hsl_id_jenis INT(11) NOT NULL,
      hsl_berat VARCHAR(50) NOT NULL,
      PRIMARY KEY (hsl_id),
      FOREIGN KEY(hsl_id_pegawai) REFERENCES tb_pegawai (pgw_id) ON UPDATE CASCADE ON DELETE RESTRICT,
      FOREIGN KEY(hsl_id_user) REFERENCES tb_users (user_id) ON UPDATE CASCADE ON DELETE RESTRICT,
      FOREIGN KEY(hsl_id_jenis) REFERENCES tb_jenis (jns_id) ON UPDATE CASCADE ON DELETE RESTRICT
);