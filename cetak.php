<br>
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
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="assets/css/cetak.css" rel="stylesheet">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<div class="card">
  <h5 class="card-header">Siswa Terlambat</h5>
  <div class="card-body">
  <h4><center> <b> REKAP DATA KETERLAMBATAN SISWA SMAN 1 HALONGONAN</b></center></h4>
  <img style="width:60px; margin-top:-45px; margin-left:150px;" src="data:image/png;base64,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" alt="" srcset="">
  <hr>  
  <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-auto">
          <div class="card mb-auto">
            <div class="card-header">
              <div>Data Siswa Terlambat</div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
              <table class="table-print">
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
      <br> 
      <span style="padding: 100px"> Mengetahui </span> <br>
        <span style="padding: 100px"> Kepala Sekolah SMAN 1 Halongonan <br><br> <br> <br>
            <strong style="padding: 100px"><u>Elvida Yusridawati</u></strong>
 <br> <br>
    <br>
    <a href="cetak.php" class="btn btn-Success"><i class='fa fa-print'></i> Cetak</a>
  </div>
</div>
<script>
	window.print();
</script>