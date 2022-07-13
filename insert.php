<?php
    //koneksi
    $connect = mysqli_connect('localhost', 'root', '', 'tempatwisata');


    //set variabel
    $nama_tempat    = $_POST['nama'];
    $keterangan       = $_POST['keterangan'];
    $lat_long       = $_POST['latlong'];
    

    //input data
    $insert = mysqli_query($connect, "insert into t_wisata set nama='$nama_tempat',keterangan='$keterangan',lat_long='$lat_long'  ");

    //kembali
    header("Location: index.php");

?>