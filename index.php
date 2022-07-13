<!DOCTYPE html>
<html>
<head>
<head>
    <title>MapBox CRUD</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <style type="text/css">
        .content{
            max-width: 800px;
            margin: auto;
        }

        h1{
            text-align: center;
            padding-bottom: 60px;
        }
    </style>

  

</head>

<body>
<div class="content">
<h1>MAPBOX CRUD</h1>
<table id="tabel-data" class="table table-striped">
    <thead>
        
        <tr>
            <th>ID</th>
            <th>Nama Tempats</th>
            <th>Keterangan</th>
            <th>Lat,Long</th>
            <th >Opsi</th>
        </tr>
    </thead>
    <tbody>
    <?php
        include 'koneksi.php';
        $wisata = mysqli_query($link,"select * from t_wisata");
        while($row = mysqli_fetch_array($wisata))
        {?>
            <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['nama'];?></td>
            <td><?php echo $row['keterangan'];?></td>
            <td><?php echo $row['lat_long'];?></td>
            <td>
			<a class="edit" href="editPage.php?id=<?php echo $row['id']; ?>">Edit</a> |
			<a class="hapus" href="delete.php?id=<?php echo $row['id']; ?>">Hapus</a>				
		</td>
        </tr>
        <?php } ?>
    <p><a  href="addNew.php"><button type="button" id="add_button"  class="btn btn-success">Add Data</button></p>
    </tbody>

    <script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>

</table>
</body>
</html>