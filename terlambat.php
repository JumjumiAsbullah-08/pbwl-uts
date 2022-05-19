<?php
    require_once "inc/Koneksi.php";
    require_once "app/Terlambat.php";
    require_once "app/Siswa.php";
    require_once "app/Guru.php";
    
    $guru       = new Guru();
    $b          = $guru->tampil();
    $sis        = new Siswa();
    $r          = $sis->tampil();
    $terlambat  = new Terlambat();
    $rows       = $terlambat->tampil();
    $no         = 0;
    ?>
<br>
<br>
<br>

<!-- FUNGSI UNTUK MENAMPILKAN DATA -->
<section id="popular-courses" class="courses mt-sm-4">
      <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col">
          <div class="card mb-auto">
            <div class="card-header">
              <div>Data Siswa Terlambat<button type="button" class="btn btn-sm btn-info float-end" data-bs-toggle="modal" data-bs-target="#modaldataterlambat"><i class="fa fa-plus-circle"></i> Tambah</button></div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
              <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">Guru Piket</th>
                    <th scope="col">Tanggal Terlambat</th>
                    <th scope="col">Tanggal Masuk</th>
                    <th scope="col">Jam Terlambat</th>
                    <th scope="col">Jam Masuk</th>
                    <th scope="col">Hukuman</th>
                    <th scope="col">Alasan</th>
                    <th scope="col"> &nbsp; &nbsp;Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($rows as $row) {
                      $no++;
                      $namasiswa  = $sis->getNamasiswa($row['id_siswa']);
                      $namaguru   = $guru->getNamaguru($row['id_piket']);
                      echo "
                    <th>$no</th>
                    <td>$namasiswa[nama_siswa]</td>
                    <td>$namaguru[nama_guru]</td>
                    <td>$row[tgl_terlambat]</td>
                    <td>$row[tgl_masuk]</td>
                    <td>$row[jam_terlambat]</td>
                    <td>$row[jam_masuk]</td>
                    <td>$row[hukuman]</td>
                    <td>$row[alasan]</td>
                    <td class='align-middle'>
                      <a href='?page=terlambat_edit&id=$row[id_terlambat]' style='color:white;'><button  class='btn btn-info btn-sm ms-auto'><i class='bi bi-pencil-square'></i>  Edit</a></button>
                      <br> <br>
                      <a href='terlambat_delete.php?id=$row[id_terlambat]' style='color:white;'><button class='btn btn-danger btn-sm ms-auto'> <i class='bi bi-trash-fill'></i> Hapus</a></button>
                      <br> <br>
                      <a href='cetak.php' target='_BLANK' style='color:white;'><button class='btn btn-success btn-sm ms-auto'> <i class='bi bi-printer'></i> Cetak</a></button>
                    </td>
                    </tr>";
                    
                }
                ?>
                </tbody>
                </table>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
</section>
<!-- END TAMPIL DATA -->
<div class="modal fade" id="modaldataterlambat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="terlambat_proses.php" method="post" enctype="multipart/form-data">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Data Siswa Terlambat</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <?php
                require_once "app/Siswa.php";
                $sis        = new Siswa();
                $rows       = $sis->tampil();
            ?>
              <div class="modal-body">
                <div class="mb-3">
                    <label for="nama siswa" class="form-label">Nama Siswa</label>
                      <select class="form-select" aria-label="Default select example" name="id_siswa" id="id_siswa">
                    <option selected>-Pilih-</option>
                    <?php
                        foreach ($rows as $row){
                    ?>
                    <option>
                    <?php echo "$row[nama_siswa]"?>
                    </option>
                    <?php
                    }
                    ?>
                    </select>
                </div>
                <?php
                require_once "app/Guru.php";
                $guru        = new Guru();
                $rows        = $guru->tampil();
            ?>
                <div class="mb-3">
                    <label for="nama siswa" class="form-label">Nama Guru Piket</label>
                    <select class="form-select" aria-label="Default select example" name="id_piket" id="id_piket">
                    <option selected>-Pilih-</option>
                    <?php
                        foreach ($rows as $row){
                    ?>
                    <option>
                    <?php echo "$row[nama_guru]"?>
                    </option>
                    <?php
                    }
                    ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tgl_terlambat" class="form-label">Tanggal Terlambat</label>
                    <input type="date" class="form-control" id="tgl_terlambat" name="tgl_terlambat">
                </div>
                <div class="mb-3">
                    <label for="tgl_masuk" class="form-label">Tanggal Masuk</label>
                    <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk">
                </div>
                <div class="mb-3">
                    <label for="jam_terlambat" class="form-label">Jam Terlambat</label>
                    <input type="time" class="form-control" id="jam_terlambat" name="jam_terlambat">
                </div>
                <div class="mb-3">
                    <label for="jam_masuk" class="form-label">Jam Masuk</label>
                    <input type="time" class="form-control" id="jam_masuk" name="jam_masuk">
                </div>
                <div class="mb-3">
                    <label for="hukuman" class="form-label">Hukuman</label>
                    <input type="text" class="form-control" id="hukuman" name="hukuman">
                </div>
                <div class="mb-3">
                    <label for="alasan" class="form-label">Alasan</label>
                    <textarea class="form-control" id="alasan" name="alasan" rows="3"></textarea>
                </div>
                          <div class="modal-footer">
                            <input class="btn btn-secondary btn-sm ms-1" type="button" value="CLOSE" data-bs-dismiss="modal">
                            <input class="btn btn-primary btn-sm ms-auto" type="submit" name="btn_simpan" value="SIMPAN">
                          </div>
      </form>
    </div>
  </div>
</div>
