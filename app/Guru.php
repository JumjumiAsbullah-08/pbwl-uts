<?php 
  
  class Guru extends Koneksi {

    public function tampil()
    {
        $sql    = "SELECT * FROM tbl_piket";
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
      
      $sql    = "SELECT * FROM tbl_piket WHERE id_piket=:id_piket";
      $stmt   = $this->db->prepare($sql);
      $stmt->bindParam(":id_piket", $id);
      $stmt->execute();

      $row = $stmt->fetch();

      return $row;
    }
    public function getNamaguru($id){
        $sql    = "SELECT nama_guru FROM tbl_piket WHERE id_piket=:id_piket";
        $stmt   = $this->db->prepare($sql);
        $stmt->bindParam(":id_piket", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }
    public function simpan()
    {
        $nama_guru      = $_POST['nama_guru'];
        $jenis_kelamin  = $_POST['jenis_kelamin'];
      
        $sql    = "INSERT INTO tbl_piket (nama_guru, jenis_kelamin) VALUES (:nama_guru, :jenis_kelamin)";
        $stmt   = $this->db->prepare($sql);
        $stmt->bindParam(":nama_guru", $nama_guru);
        $stmt->bindParam(":jenis_kelamin", $jenis_kelamin);
        $stmt->execute();

    }
    public function update()
    {
        $nama_guru      = $_POST['nama_guru'];
        $jenis_kelamin  = $_POST['jenis_kelamin'];
        $id_piket       = $_POST['id_piket'];

        $sql    = "UPDATE tbl_piket SET nama_guru=:nama_guru, jenis_kelamin=:jenis_kelamin WHERE id_piket=:id_piket";
        $stmt   = $this->db->prepare($sql);
        $stmt->bindParam(":nama_guru", $nama_guru);
        $stmt->bindParam(":jenis_kelamin", $jenis_kelamin);
        $stmt->bindParam(":id_piket", $id_piket);
        $stmt->execute();

    }

    public function delete($id)
    {
        
        $sql    = "DELETE FROM tbl_piket WHERE id_piket=:id_piket";
        $stmt   = $this->db->prepare($sql);
        $stmt->bindParam(":id_piket", $id);
        $stmt->execute();

    }

}
