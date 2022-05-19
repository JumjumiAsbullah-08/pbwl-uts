<?php 
  
  class Siswa extends Koneksi {

    public function tampil()
    {
        $sql    = "SELECT * FROM tbl_siswa";
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
      
      $sql    = "SELECT * FROM tbl_siswa WHERE id_siswa=:id_siswa";
      $stmt   = $this->db->prepare($sql);
      $stmt->bindParam(":id_siswa", $id);
      $stmt->execute();

      $row = $stmt->fetch();

      return $row;
    }
    public function getNamasiswa($id){
        $sql    = "SELECT nama_siswa FROM tbl_siswa WHERE id_siswa=:id_siswa";
        $stmt   = $this->db->prepare($sql);
        $stmt->bindParam(":id_siswa", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }
    public function simpan()
    {
        $nama_siswa     = $_POST['nama_siswa'];
        $alamat         = $_POST['alamat'];
        $jenis_kelamin  = $_POST['jenis_kelamin'];
        $kelas          = $_POST['kelas'];
        $jurusan        = $_POST['jurusan'];
      
        $sql    = "INSERT INTO tbl_siswa (nama_siswa, alamat, jenis_kelamin, kelas, jurusan) VALUES (:nama_siswa, :alamat, :jenis_kelamin, :kelas, :jurusan)";
        $stmt   = $this->db->prepare($sql);
        $stmt->bindParam(":nama_siswa", $nama_siswa);
        $stmt->bindParam(":alamat", $alamat);
        $stmt->bindParam(":jenis_kelamin", $jenis_kelamin);
        $stmt->bindParam(":kelas", $kelas);
        $stmt->bindParam(":jurusan", $jurusan);
        $stmt->execute();

    }
    public function update()
    {
        $nama_siswa     = $_POST['nama_siswa'];
        $alamat         = $_POST['alamat'];
        $jenis_kelamin  = $_POST['jenis_kelamin'];
        $kelas          = $_POST['kelas'];
        $jurusan        = $_POST['jurusan'];
        $id_siswa       = $_POST['id_siswa'];

        $sql    = "UPDATE tbl_siswa SET nama_siswa=:nama_siswa, alamat=:alamat, jenis_kelamin=:jenis_kelamin, kelas=:kelas, jurusan=:jurusan WHERE id_siswa=:id_siswa";
        $stmt   = $this->db->prepare($sql);
        $stmt->bindParam(":nama_siswa", $nama_siswa);
        $stmt->bindParam(":alamat", $alamat);
        $stmt->bindParam(":jenis_kelamin", $jenis_kelamin);
        $stmt->bindParam(":kelas", $kelas);
        $stmt->bindParam(":jurusan", $jurusan);
        $stmt->bindParam(":id_siswa", $id_siswa);
        $stmt->execute();

    }

    public function delete($id)
    {
        
        $sql    = "DELETE FROM tbl_siswa WHERE id_siswa=:id_siswa";
        $stmt   = $this->db->prepare($sql);
        $stmt->bindParam(":id_siswa", $id);
        $stmt->execute();

    }

}