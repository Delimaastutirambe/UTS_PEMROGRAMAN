<?php

$nik=$_POST['nik'];
$nama=$_POST['nama'];
$tempat_lahir=$_POST['tempat_lahir'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$kecamatan=$_POST['kecamatan'];
$desa=$_POST['desa'];

include"koneksi.php";

$simpan=$koneksi->query("insert into data_penduduk(nik,nama,tempat_lahir,tanggal_lahir,jenis_kelamin,alamat,kecamatan,desa) 
                        values('$nik','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$alamat','$kecamatan','$desa')");

if($simpan==true){

    header("location:tampil_penduduk.php?pesan=inputBerhasil");
} else {
    echo "Error";
}


?>