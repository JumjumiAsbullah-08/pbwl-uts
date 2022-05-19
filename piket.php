<?php
    require_once "inc/Koneksi.php";
    require_once "app/Guru.php";
   
    $guru        = new Guru();
    $rows       = $guru->tampil();
    $no         = 0;
    ?>
<br>
<br>
<br>
<section id="popular-courses" class="courses mt-sm-4">
      <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-8">
          <div class="card mb-auto">
            <div class="card-header">
              <div>Data Guru Piket<button type="button" class="btn btn-sm btn-info float-end" data-bs-toggle="modal" data-bs-target="#modalTambahGuru"><i class="fa fa-plus-circle"></i> Tambah</button></div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
              <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Guru Piket</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($rows as $row) { $no++; ?>
                    <tr>
                    <th><?php echo $no ?></th>
                    <td><?php echo $row['nama_guru']; ?></td>
                    <td><?php echo $row['jenis_kelamin']; ?></td>
                    <td class="align-middle">
                      <a href="?page=piket_edit&id=<?php echo $row['id_piket'];?>" style="color:white;"><button  class="btn btn-info btn-sm ms-auto"><i class="fa fa-paper-plane"></i>  Edit</a></button>
                      <a href="piket_delete.php?id=<?php echo $row['id_piket'];?>" style="color:white;"><button class="btn btn-danger btn-sm ms-auto"> <i class='fa fa-trash'></i> Hapus</a></button>
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

<div class="modal fade" id="modalTambahGuru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="piket_proses.php" method="post" enctype="multipart/form-data">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Data Guru Piket</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
              <div class="modal-body">
                <div class="mb-3">
                    <label for="nama_guru" class="form-label">Nama Guru</label>
                      <input type="text" class="form-control" id="nama_guru" name="nama_guru">
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" aria-label="Default select example" name="jenis_kelamin" id="jenis_kelamin">
                      <option selected>-Pilih-</option>
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
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