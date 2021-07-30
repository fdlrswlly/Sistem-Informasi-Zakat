<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "delete from data_pegawai where id_pegawai = $id";
$result = mysql_query($query);
if($result){
    header("Location:data_pegawai.php");
}
else{
    echo "Hapus data gagal";
}
?>