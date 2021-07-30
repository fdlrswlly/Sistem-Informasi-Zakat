<?php
include 'koneksi.php';

$id=$_POST['id_pegawai'];
$nama=$_POST['nama_pegawai'];
$alamat=$_POST['alamat'];
$jabatan=$_POST['jabatan'];

mysql_query("insert into data_pegawai values('$id','$nama','$alamat','$jabatan')");
header("location:data_pegawai.php");
?>