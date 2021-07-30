<?php
include 'koneksi.php';

$id=$_POST['id_muzzaki'];
$nama=$_POST['nama_muzzaki'];
$alamat=$_POST['alamat'];
$jk=$_POST['jenis_kelamin'];
$jz=$_POST['jenis_zakat'];
$jml=$_POST['jumlah'];

$query="update data_muzzaki set nama_muzzaki= '$nama', alamat='$alamat', jenis_kelamin='$jk', jenis_zakat='$jz', jumlah='$jml' where id_muzzaki=$id";
$result=mysql_query($query);
if($result){
    header("location:data_muzzaki.php");
}
else{
    echo "Update data gagal";
}
?>