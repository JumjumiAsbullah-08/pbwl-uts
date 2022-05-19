<?php 

require_once "inc/Koneksi.php";
require_once "app/Terlambat.php";

$terlambat = new Terlambat();

if (isset($_POST['btn_simpan'])) {
    $terlambat->simpan();
    header("location:index.php?page=terlambat");
}

if (isset($_POST['btn_update'])) {
    $terlambat->update();
    header("location:index.php?page=terlambat");
}