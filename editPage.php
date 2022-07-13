<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" integrity="sha256-R91pD48xW+oHbpJYGn5xR0Q7tMhH4xOrWn1QqMRINtA=" crossorigin="anonymous" />    <!-- Custom styles for this template -->

  <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.css" type="text/css">
  <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.min.js"></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v2.0.1/mapbox-gl.css' rel='stylesheet' />
<script src='https://api.mapbox.com/mapbox-gl-js/v2.0.1/mapbox-gl.js'></script>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.css" type="text/css">
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.min.js"></script>

 <style>
        /* ukuran peta */
        #map {
            height: 100%;
        }
        .jumbotron{
            height: 100%;
            border-radius: 0;
        }
        body{
            background-color: #ebe7e1;
        }
    </style>
  <title>MapBox CRUD</title>
 

</head>
<body>
<main role="main">
<div class="row"> 
        <div class="col-4"> 
            <div class="jumbotron"> 
            <a href="index.php" class="btn-label " role="button"><i class="fa fa-chevron-left"></i>Home</a>
            <h1>Edit Location</h1>
            <?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$wisata = mysqli_query($link,"SELECT * FROM t_wisata WHERE id='$id'");
	while($data = mysqli_fetch_array($wisata)){
	?>
            <hr>
                <form action="update.php" method="post">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Latitude, Longitude</label>
                        <input type="text" class="form-control" id="latlong" name="latlong" value="<?php echo $data['lat_long'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Tempat</label>
                        <input type="text" class="form-control" name="nama"value="<?php echo $data['nama'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Keterangan</label>
                        <textarea class="form-control" name="keterangan" cols="30" rows="5" ><?php echo $data['keterangan'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Edit</button>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
        <div class="col-8"> 
            <div id="mapid" style="width: 860px;height: 650px;"></div>
        </div>
    </div>
</main>
<script src="script.js"></script>


                
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha256-yNbKY1y6h2rbVcQtf0b8lq4a+xpktyFc3pSYoGAY1qQ=" crossorigin="anonymous"></script>
</body>
</html>