<!doctype html>
<html>
<head>
        <tittle> menampilkan hasil input form</tittle>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body>
        <div class="container">
        <div class="row">
        <div class="col-md-12">

         <form action="proses-edit-penduduk.php" method="post">
             <?php
             $id=$_GET['id'];
                include "koneksi.php";
                $tampil=$koneksi->query("select * from data_penduduk where nik='$id'");
                $row=$tampil->fetch_assoc();
             ?>
            <div class="form-group">
                <label for="nik"><b>nik</b></label>
                <Input type="hidden" name="nik" value="<?php echo$row['nik']?>" class="form-control">
                <Input type="number" name="nik" value="<?php echo$row['nik']?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>nama</b></label>
                <Input type="text" name="nama" value="<?php echo$row['nama']?>" class="form-control">

            </div>
            <div class="form-group">
                <label for="tempat_lahir"><b>tempat lahir</b></label>
                <Input type="text" name="tempat_lahir" value="<?php echo$row['tempat_lahir']?>" class="form-control">

            </div>
            <div class="form-group">
                <label for="tanggal_lahir"><b>tanggal lahir</b></label>
                <Input type="date" name="tanggal_lahir" value="<?php echo$row['tanggal_lahir']?>" class="form-control">

            </div>
            <div class="form-group">
                <label for="jenis_kelamin"><b>jenis kelamin</b></label>
                <select name="jenis_kelamin" class="form-control">
                <option value ="<?php echo$row['jenis_kelamin']?>" selected><?php echo$row['jenis_kelamin']?></option>
                <option value ="laki-laki"> laki-Laki</option>
                <option value ="perempuan"> perempuan</option>
            </select>
            </div>
            <div class="form-group">
                <label for="alamat"><b>alamat</b></label>
                <textarea name="alamat" class="form-control"><?php echo$row['alamat']?></textarea>
            </div>
            <div class="form-group">
                <label for="kecamatan"><b>kecamatan</b></label>
                <Input type="text" name="kecamatan" value="<?php echo$row['kecamatan']?>" class="form-control">

            </div>
            
             <div class="form-group">
                <label for="desa"><b>desa</b></label>
                <Input type="text" name="desa" value="<?php echo$row['desa']?>" class="form-control">

            </div>

            <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
            <input type="reset" name="kosongkan" value="KOSONGKAN" class="btn btn-danger">

        </from>
            
            
</div></div></div>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>