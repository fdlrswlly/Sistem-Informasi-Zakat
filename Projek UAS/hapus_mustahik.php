<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "delete from data_mustahik where id_mustahik = $id";
$result = mysql_query($query);
if($result){
    header("Location:data_mustahik.php");
}
else{
    echo "Hapus data gagal";
}
?>