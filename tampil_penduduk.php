<!doctype html>
<html>
<head>
    <tittle> Data Penduduk</tittle>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="DataTables/datatables.min.css" rel="stylesheet">

</head>
    <body>
        <div class="container">
        <div class="row">
        <div clas="col-md-12">
        <h1> Data Penduduk</h1>
<?php

if(@$_GET['pesan']=="inputBerhasil"){


?>
<div class="alert alert-success">
    Penyimpanan Berhasil!
</div>

<?php
}
?>
        <?php

        if(@$_GET['pesan']=="hapusBerhasil"){


        ?>
        <div class="alert alert-success">
            Data Berhasil DiHapus!
        </div>

        <?php
        }
        ?>
        
                <?php

                if(@$_GET['pesan']=="editBerhasil"){


                ?>
                <div class="alert alert-success">
                    Perubahan Berhasil!
                </div>

                <?php
                }
                ?>

<table id="datatables" class="table table-bordered">
    <thead>
    <tr> 
        <td> <center><b>nik</center></td> <td> <center><b>nama</center></td>
        <td> <center><b>tempat lahir</center></td><td> <center><b>tanggal lahir</center></td><td><b>jenis kelamin </center></td> <td> <center><b>alamat </center></td><td> <center><b>kecamatan</center><td> <center><b>desa</center></td>
        <th> 
            <a href="input-penduduk.php">
                <button class="btn btn-info glyphicon glyphicon-plus"></button>
            </a>
        </th>
    </tr>
</thead>
<tbody>
<?php  
   include "koneksi.php";
   $sql=$koneksi->query("select * from data_penduduk order by nik ASC");

   while($row= $sql->fetch_assoc()){
?>
   <tr>
         <td> <center> <?php echo $row['nik'] ?> </center> </td>
         <td> <center> <?php echo $row['nama'] ?> </center> </td>
         <td> <center> <?php echo $row['tempat_lahir'] ?> </center> </td>
         <td> <center> <?php echo $row['tanggal_lahir'] ?> </center> </td>
         <td> <center> <?php echo $row['jenis_kelamin'] ?> </center> </td>
         <td> <center> <?php echo $row['alamat'] ?> </center> </td>
         <td> <center> <?php echo $row['kecamatan'] ?> </center> </td>
         <td> <center> <?php echo $row['desa'] ?> </center> </td>
         <td>
         <a href="edit-penduduk.php?id=<?php echo $row['nik']?>">
                <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
            </a>
        <a href="hapus-penduduk.php?id=<?php echo $row['nik']?>" onclick="return confirm('anda yakin ingin menghapus data?')">
        <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
            </a>

   </td>
   </tr>
<?php
 }
?>
</tbody>
</table>

</div> </div></div>

        <script src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>

        <script src="DataTables/datatables.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                $('#datatables').DataTable();
            });
        </script>
</body>
</html>