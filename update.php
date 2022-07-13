<?php 
 
include 'koneksi.php';

$nama = $_POST['nama'];
$keterangan = $_POST['keterangan'];
$lat_long = $_POST['latlong'];

$insert = mysqli_query($link, "UPDATE  t_wisata SET nama='$nama',keterangan='$keterangan',lat_long='$lat_long' ");
 
header("location:index.php");
 
?>