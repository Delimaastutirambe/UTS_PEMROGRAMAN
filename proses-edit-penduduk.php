<?php

include "koneksi.php";
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$tempat_lahir=$_POST['tempat_lahir'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$kecamatan=$_POST['kecamatan'];
$desa=$_POST['desa']

$ubah=$koneksi->query("update data data_penduduk set  nama='$nama',tempat_lahir='$tempat_lahir',
tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', kecamatan='$kecamatan',desa='$desa' where nik='$nik'");

if($ubah==true){

    header("location:tampil_penduduk.php?pesan=editBerhasil");
} else{
    echo"Error";
}



?>