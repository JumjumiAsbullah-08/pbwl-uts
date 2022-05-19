<?php 
  
  class Terlambat extends Koneksi {

    public function tampil()
    {
        $sql    = "SELECT * FROM tbl_terlambat";
        $stmt   = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }
    public function edit($id)
    {
      
      $sql    = "SELECT * FROM tbl_terlambat WHERE id_terlambat=:id_terlambat";
      $stmt   = $this->db->prepare($sql);
      $stmt->bindParam(":id_terlambat", $id);
      $stmt->execute();

      $row = $stmt->fetch();

      return $row;
    }
    public function simpan()
    {
        $id_siswa       = $_POST['id_siswa'];
        $id_piket       = $_POST['id_piket'];
        $tgl_terlambat  = $_POST['tgl_terlambat'];
        $tgl_masuk      = $_POST['tgl_masuk'];
        $jam_terlambat  = $_POST['jam_terlambat'];
        $jam_masuk      = $_POST['jam_masuk'];
        $hukuman        = $_POST['hukuman'];
        $alasan         = $_POST['alasan'];

        $sql    = "INSERT INTO tbl_terlambat (id_siswa, id_piket, tgl_terlambat, tgl_masuk, jam_terlambat, jam_masuk, hukuman, alasan) VALUES (:id_siswa, :id_piket, :tgl_terlambat, :tgl_masuk, :jam_terlambat, :jam_masuk, :hukuman, :alasan)";
        $stmt   = $this->db->prepare($sql);
        $stmt->bindParam(":id_siswa", $id_siswa);
        $stmt->bindParam(":id_piket", $id_piket);
        $stmt->bindParam(":tgl_terlambat", $tgl_terlambat);
        $stmt->bindParam(":tgl_masuk", $tgl_masuk);
        $stmt->bindParam(":jam_terlambat", $jam_terlambat);
        $stmt->bindParam(":jam_masuk", $jam_masuk);
        $stmt->bindParam(":hukuman", $hukuman);
        $stmt->bindParam(":alasan", $alasan);
        $stmt->execute();

    }
    public function update()
    {
        $id_siswa       = $_POST['id_siswa'];
        $id_piket       = $_POST['id_piket'];
        $tgl_terlambat  = $_POST['tgl_terlambat'];
        $tgl_masuk      = $_POST['tgl_masuk'];
        $jam_terlambat  = $_POST['jam_terlambat'];
        $jam_masuk      = $_POST['jam_masuk'];
        $hukuman        = $_POST['hukuman'];
        $alasan         = $_POST['alasan'];
        $id_terlambat   = $_POST['id_terlambat'];

        $sql    = "UPDATE tbl_terlambat SET id_siswa=:id_siswa, id_piket=:id_piket, tgl_terlambat=:tgl_terlambat, tgl_masuk=:tgl_masuk, jam_terlambat=:jam_terlambat, jam_masuk=:jam_masuk, hukuman=:hukuman, alasan=:alasan WHERE id_terlambat=:id_terlambat";
        $stmt   = $this->db->prepare($sql);
        $stmt->bindParam(":id_siswa", $id_siswa);
        $stmt->bindParam(":id_piket", $id_piket);
        $stmt->bindParam(":tgl_terlambat", $tgl_terlambat);
        $stmt->bindParam(":tgl_masuk", $tgl_masuk);
        $stmt->bindParam(":jam_terlambat", $jam_terlambat);
        $stmt->bindParam(":jam_masuk", $jam_masuk);
        $stmt->bindParam(":hukuman", $hukuman);
        $stmt->bindParam(":alasan", $alasan);
        $stmt->bindParam(":id_terlambat", $id_terlambat);
        $stmt->execute();

    }

    public function delete($id)
    {
        
        $sql    = "DELETE FROM tbl_terlambat WHERE id_terlambat=:id_terlambat";
        $stmt   = $this->db->prepare($sql);
        $stmt->bindParam(":id_terlambat", $id);
        $stmt->execute();

    }

}