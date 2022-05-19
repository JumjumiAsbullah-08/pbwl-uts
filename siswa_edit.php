<?php
    require_once "inc/Koneksi.php";
    require_once "app/Siswa.php";              
    $id         = $_GET['id'];
    $sis        = new Siswa();
    $r          = $sis->edit($id);
?>
<br>
<br>
<br>
<section id="popular-courses" class="courses mt-sm-4">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-8">
            <form action="siswa_proses.php" method="post">
            <input type="hidden" name="id_siswa" value="<?php echo $r['id_siswa']; ?>">
            <div class="mb-3">
                    <label for="nama siswa" class="form-label">Nama Siswa</label>
                      <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="<?php echo $r['nama_siswa']?>">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3"><?php echo $r['alamat']?></textarea>
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" aria-label="Default select example" name="jenis_kelamin" id="jenis_kelamin" value="">
                      <option value="<?php echo $r['jenis_kelamin']?>"><?php echo $r['jenis_kelamin']?></option>
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas</label>
                    <select class="form-select" aria-label="Default select example" name="kelas" id="kelas">
                      <option value="<?php echo $r['kelas']?>"><?php echo $r['kelas']?></option>
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
                      <option value="<?php echo $r['jurusan']?>"><?php echo $r['jurusan']?></option>
                      <option value="IPA">IPA</option>
                      <option value="IPS">IPS</option>
                    </select>
                </div>
               
                <input class="btn btn-primary btn-sm ms-auto" type="submit" name="btn_update" value="UPDATE">
            </form>
            </div>
        </div>
    </div>
</section>