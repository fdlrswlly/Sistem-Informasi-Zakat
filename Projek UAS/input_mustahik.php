<?php
include 'koneksi.php';

$id=$_POST['id_mustahik'];
$nama=$_POST['nama_mustahik'];
$alamat=$_POST['alamat'];
$jk=$_POST['jenis_kelamin'];
$status=$_POST['status_mustahik'];
$namakk=$_POST['nama_kk'];

mysql_query("insert into data_mustahik values('$id','$nama','$alamat','$jk','$status','$namakk')");
header("location:data_mustahik.php");
?>