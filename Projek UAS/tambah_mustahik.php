<?php
include 'koneksi.php';
include 'session.php';
?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Tambah Data Mustahik</title>
    </head>
    <body>
    <h3>Selamat datang, <?php echo $_SESSION["login_user"]; ?></h3>
    <h1>SISTEM INFORMASI ZAKAT FITRAH</h1>
        <h1>MAJLIS TA'LIM AL HUDA</h1>
<div class="topnav"> 
    <a href="home.php">Beranda</a>
    <div class="subnav">
  <button class="subnavbtn">Data Master<i class="fa fa-caret-down"></i></button>
  <div class="subnav-content">
  <a href="data_muzzaki.php">Data Muzzaki</a>
  <a href="data_mustahik.php">Data Mustahik</a>
  <a href="data_pegawai.php">Data Pegawai</a>
  </div>
  </div>
  <div class="subnav">
  <button class="subnavbtn">Laporan<i class="fa fa-caret-down"></i></button>
  <div class="subnav-content">
  <a href="lap_masuk.php">Laporan Pemasukkan</a>
  <a href="lap_keluar.php">Laporan Pengeluaran</a>
</div>
</div>
  <a href="logout.php">Logout</a>
</div>
<h3 align = center>Tambah Data Mustahik</h3>
<form action="input_mustahik.php" method = "POST">
<table align = center>
    <tr>
        <td>ID Mustahik: </td>
        <td><input type="text" name="id_mustahik" placeholder = "Masukkan ID Mustahik"></td>
    </tr>    
    <tr>
        <td>Nama Mustahik: </td>
        <td><input type="text" name="nama_mustahik" placeholder = "Masukkan Nama Mustahik"></td>
    </tr>    
    <tr>
        <td>Alamat: </td>
        <td><input type="text" name="alamat" placeholder = "Masukkan Alamat"></td>
    </tr>
    <tr>
        <td>Jenis Kelamin: </td>
        <td><input type="text" name="jenis_kelamin" placeholder = "Masukkan Jenis Kelamin"></td>
    </tr>
    <tr>
        <td>Status Mustahik: </td>
        <td><input type="text" name="status_mustahik" placeholder = "Masukkan Status Mustahik"></td>
    </tr>    
    <tr>
        <td>Nama Kepala Keluarga: </td>
        <td><input type="text" name="nama_kk" placeholder = "Masukkan Nama Kepala Keluarga"></td>
    </tr>    
</table>
<br><br>
<center><button>Simpan Data</button></center>
<br><br><br><br>
<div class = "topnav">
<h3 align = center>Copyright 2020 by Fadhly Aulia</h3>
</div>   

    </body>
</html>