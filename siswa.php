<?php
    require_once "inc/Koneksi.php";
    require_once "app/Siswa.php";
   
    $sis        = new Siswa();
    $rows       = $sis->tampil();
    $no         = 0;
    ?>
<br>
<br>
<br>
<section id="popular-courses" class="courses mt-sm-4">
      <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-16">
          <div class="card mb-auto">
            <div class="card-header">
              <div>Data Siswa<button type="button" class="btn btn-sm btn-info float-end" data-bs-toggle="modal" data-bs-target="#modalTambahData"><i class="fa fa-plus"></i> Tambah</button></div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
              <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($rows as $row) { $no++; ?>
                    <tr>
                    <th><?php echo $no ?></th>
                    <td><?php echo $row['nama_siswa']; ?></td>
                    <td><?php echo $row['alamat']; ?></td>
                    <td><?php echo $row['jenis_kelamin']; ?></td>
                    <td><?php echo $row['kelas']; ?></td>
                    <td><?php echo $row['jurusan']; ?></td>
                    <td class="align-middle">
                      <a href="?page=siswa_edit&id=<?php echo $row['id_siswa'];?>" style="color:white;"><button  class="btn btn-info btn-sm ms-auto"><i class="fa fa-paper-plane"></i>  Edit</a></button>
                      <a href="siswa_delete.php?id=<?php echo $row['id_siswa'];?>" style="color:white;"><button class="btn btn-danger btn-sm ms-auto"> <i class='fa fa-trash'></i> Hapus</a></button>
                    </td>
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
</section>

<div class="modal fade" id="modalTambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="siswa_proses.php" method="post" enctype="multipart/form-data">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Data Siswa</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
              <div class="modal-body">
                <div class="mb-3">
                    <label for="nama siswa" class="form-label">Nama Siswa</label>
                      <input type="text" class="form-control" id="nama_siswa" name="nama_siswa">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" aria-label="Default select example" name="jenis_kelamin" id="jenis_kelamin">
                      <option selected>-Pilih-</option>
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas</label>
                    <select class="form-select" aria-label="Default select example" name="kelas" id="kelas">
                      <option selected>-Pilih-</option>
                      <option value="X-1">X-1</option>
                      <option value="X-2">X-2</option>
                      <option value="X-3">X-3</option>
                      <option value="X-4">X-4</option>
                      <option value="X-5">X-5</option>
                      <option value="XI-IPA1">XI-IPA1</option>
                      <option value="XI-IPA2">XI-IPA2</option>
                      <option value="XI-IPA3">XI-IPA3</option>
                      <option value="XI-IPS1">XI-IPS1</option>
                      <option value="XI-IPS2">XI-IPS2</option>
                      <option value="XII-IPA1">XII-IPA1</option>
                      <option value="XII-IPA2">XII-IPA2</option>
                      <option value="XII-IPA3">XII-IPA3</option>
                      <option value="XII-IPS1">XII-IPS1</option>
                      <option value="XII-IPS2">XII-IPS2</option>
                      <option value="XII-IPS3">XII-IPS3</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <select class="form-select" aria-label="Default select example" name="jurusan" id="jurusan">
                      <option selected>-Pilih-</option>
                      <option value="IPA">IPA</option>
                      <option value="IPS">IPS</option>
                    </select>
                </div>
                          <div class="modal-footer">
                            <input class="btn btn-secondary btn-sm ms-1" type="button" value="CLOSE" data-bs-dismiss="modal">
                            <input class="btn btn-primary btn-sm ms-auto" type="submit" name="btn_simpan" value="SIMPAN">
                          </div>
      </form>
    </div>
  </div>
</div>