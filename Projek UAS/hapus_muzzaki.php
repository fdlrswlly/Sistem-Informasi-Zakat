<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "delete from data_muzzaki where id_muzzaki = $id";
$result = mysql_query($query);
if($result){
    header("Location:data_muzzaki.php");
}
else{
    echo "Hapus data gagal";
}
?>