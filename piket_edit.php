<?php
    require_once "inc/Koneksi.php";
    require_once "app/Guru.php";              
    $id         = $_GET['id'];
    $guru        = new Guru();
    $r          = $guru->edit($id);
?>
<br>
<br>
<br>
<section id="popular-courses" class="courses mt-sm-4">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-8">
            <form action="piket_proses.php" method="post">
            <input type="hidden" name="id_piket" value="<?php echo $r['id_piket']; ?>">
            <div class="mb-3">
                <label for="nama_guru" class="form-label">Nama Siswa</label>
                <input type="text" class="form-control" id="nama_guru" name="nama_guru" value="<?php echo $r['nama_guru']?>">
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select" aria-label="Default select example" name="jenis_kelamin" id="jenis_kelamin" value="">
                    <option value="<?php echo $r['jenis_kelamin']?>"><?php echo $r['jenis_kelamin']?></option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <input class="btn btn-primary btn-sm ms-auto" type="submit" name="btn_update" value="UPDATE">
            </form>
            </div>
        </div>
    </div>
</section>
