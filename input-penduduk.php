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

         <form action="proses-input-penduduk.php" method="post">
            <div class="form-group">
                <label for="nik"><b>nik</b></label>
                <Input type="text" name="nik" class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>nama</b></label>
                <Input type="text" name="nama" class="form-control">
            </div>
            <div class="form-group">
                <label for="tempat_lahir"><b>tempat lahir</b></label>
                <Input type="text" name="tempat_lahir" class="form-control">
            </div>
            <div class="form-group">
                <label for="tanggal_lahir"><b>tanggal lahir</b></label>
                <Input type="date" name="tanggal_lahir" class="form-control">
            </div>
            <div class="form-group">
                <label for="jenis_kelamin"><b>jenis kelamin</b></label>
                <select name="jenis_kelamin" class="form-control">
                <option value ="laki-laki"> laki-laki</option>
                <option value ="perempuan"> perempuan</option>
            </select>
            </div>
            <br>
            <div class="form-group">
                <label for="alamat"><b>alamat</b></label>
                <textarea name="alamat" class="form-control"></textarea><br>
            </div>
            <div class="form-group">
                <label for="kecamatan"><b>kecamatan</b></label>
                <Input type="text" name="kecamatan" class="form-control">
            </div>
             <div class="form-group">
                <label for="desa"><b>desa</b></label>
                <Input type="text" name="desa" class="form-control">

            </div>

            <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
            <input type="reset" name="kosongkan" value="KOSONGKAN" class="btn btn-danger">
            
        </form>
</div></div></div>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>