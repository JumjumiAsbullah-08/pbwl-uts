<?php 

require_once "inc/Koneksi.php";
require_once "app/Terlambat.php";

$id = $_GET['id'];

$terlambat = new Terlambat();
$rows = $terlambat->delete($id);

?>
<?php
header("location:index.php?page=terlambat");
