<?php 

require_once "inc/Koneksi.php";
require_once "app/Siswa.php";

$sis = new Siswa();

if (isset($_POST['btn_simpan'])) {
    $sis->simpan();
    header("location:index.php?page=siswa");
}

if (isset($_POST['btn_update'])) {
    $sis->update();
    header("location:index.php?page=siswa");
}