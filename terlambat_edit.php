<?php
    require_once "inc/Koneksi.php";
    require_once "app/Terlambat.php";              
    $id         = $_GET['id'];
    $terlambat  = new Terlambat();
    $r          = $terlambat->edit($id);
?>
<br>
<br>
<br>
<section id="popular-courses" class="courses mt-sm-4">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-8">
            <form action="terlambat_proses.php" method="post">
            <input type="hidden" name="id_siswa" value="<?php echo $r['id_siswa']; ?>">
            <?php
                require_once "app/Siswa.php";
                $sis        = new Siswa();
                $rows       = $sis->tampil();
            ?>
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
                    <input type="date" class="form-control" id="tgl_terlambat" name="tgl_terlambat" value="<?php echo $r['tgl_terlambat']?>">
                </div>
                <div class="mb-3">
                    <label for="tgl_masuk" class="form-label">Tanggal Masuk</label>
                    <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk" value="<?php echo $r['tgl_masuk']?>">
                </div>
                <div class="mb-3">
                    <label for="jam_terlambat" class="form-label">Jam Terlambat</label>
                    <input type="time" class="form-control" id="jam_terlambat" name="jam_terlambat" value="<?php echo $r['jam_terlambat']?>">
                </div>
                <div class="mb-3">
                    <label for="jam_masuk" class="form-label">Jam Masuk</label>
                    <input type="time" class="form-control" id="jam_masuk" name="jam_masuk" value="<?php echo $r['jam_masuk']?>">
                </div>
                <div class="mb-3">
                    <label for="hukuman" class="form-label">Hukuman</label>
                    <input type="text" class="form-control" id="hukuman" name="hukuman" value="<?php echo $r['hukuman']?>">
                </div>
                <div class="mb-3">
                    <label for="alasan" class="form-label">Alasan</label>
                    <textarea class="form-control" id="alasan" name="alasan" rows="3"><?php echo $r['alasan']?></textarea>
                </div>
               
                <input class="btn btn-primary btn-sm ms-auto" type="submit" name="btn_update" value="UPDATE">
            </form>
            </div>
        </div>
    </div>
</section>