<?php 

require_once "inc/Koneksi.php";
require_once "app/Guru.php";

$guru = new Guru();

if (isset($_POST['btn_simpan'])) {
    $guru->simpan();
    header("location:index.php?page=piket");
}

if (isset($_POST['btn_update'])) {
    $guru->update();
    header("location:index.php?page=piket");
}