<?php 

require_once "inc/Koneksi.php";
require_once "app/Guru.php";

$id = $_GET['id'];

$guru = new Guru();
$rows = $guru->delete($id);

?>
<?php
header("location:index.php?page=piket");
