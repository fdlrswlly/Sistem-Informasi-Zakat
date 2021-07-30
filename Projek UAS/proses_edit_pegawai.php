<?php
include 'koneksi.php';

$id=$_POST['id_pegawai'];
$nama=$_POST['nama_pegawai'];
$alamat=$_POST['alamat'];
$jabatan=$_POST['jabatan'];
$query="update data_pegawai set nama_pegawai= '$nama', alamat='$alamat', jabatan='$jabatan' where id_pegawai=$id";
$result=mysql_query($query);
if($result){
    header("location:data_pegawai.php");
}
else{
    echo "Update data gagal";
}
?>