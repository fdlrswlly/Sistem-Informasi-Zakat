<?php
include 'koneksi.php';

$id=$_POST['id_mustahik'];
$nama=$_POST['nama_mustahik'];
$alamat=$_POST['alamat'];
$jk=$_POST['jenis_kelamin'];
$status=$_POST['status_mustahik'];
$namakk=$_POST['nama_kk'];

$query="update data_mustahik set nama_mustahik= '$nama', alamat='$alamat', jenis_kelamin='$jk', status_mustahik='$status', nama_kk='$namakk' where id_mustahik=$id";
$result=mysql_query($query);
if($result){
    header("location:data_mustahik.php");
}
else{
    echo "Update data gagal";
}
?>