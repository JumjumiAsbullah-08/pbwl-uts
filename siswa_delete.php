<?php 

require_once "inc/Koneksi.php";
require_once "app/Siswa.php";

$id = $_GET['id'];

$sis = new Siswa();
$rows = $sis->delete($id);

?>
<?php
header("location:index.php?page=siswa");
