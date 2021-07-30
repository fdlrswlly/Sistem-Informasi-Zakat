<?php
include 'koneksi.php';
$id=$_POST['id_admin'];
$username=$_POST['username'];
$password=$_POST['password'];
mysql_query("insert into admin values('$id','$username','$password')");
header("location:login.php");
?>