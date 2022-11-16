<?php
$id=$_GET['id'];

include "koneksi.php";
$hapus=$koneksi->query("delete from data_penduduk where nik='$id'");

if($hapus==true){

    header("location:tampil_penduduk.php?pesan=hapusBerhasil");

}else{
    echo"Error"; 
}


?>