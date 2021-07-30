<?php
include 'koneksi.php';

$id=$_POST['id_muzzaki'];
$nama=$_POST['nama_muzzaki'];
$alamat=$_POST['alamat'];
$jk=$_POST['jenis_kelamin'];
$jz=$_POST['jenis_zakat'];
$jml=$_POST['jumlah'];

mysql_query("insert into data_muzzaki values('$id','$nama','$alamat','$jk','$jz','$jml')");
header("location:data_muzzaki.php");
?>