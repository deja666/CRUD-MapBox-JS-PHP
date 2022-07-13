<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($link,"DELETE FROM t_wisata WHERE id='$id'");

header("location:index.php");
?>