<?php
include 'koneksi.php';
include 'session.php';
?>
<html>
    <head>
        <title>Laporan Pemasukkan</title>
        <link rel = "stylesheet" href="style.css">
    </head>
    <body>
    <h3>Selamat datang, <?php echo $_SESSION["login_user"]; ?></h3>
    <h1>SISTEM INFORMASI ZAKAT FITRAH</h1>
        <h1>MAJLIS TA'LIM AL- HUDA</h1>
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
<br>
<body>
<h3 align = center>Laporan Pemasukkan Donasi dan Pemberian Zakat Fitrah<br>Bulan Mei 2020</h3>
<center>
<table border = 1 width = 60%>
<center>
<th>Jenis Zakat</th>
<th>Jumlah</th>
<tr>
<td>Zakat Fitrah</td>
<td>Rp.310.000</td>
</tr>
<tr>
<td>Zakat Mal</td>
<td>Rp.3.400.000</td>
</tr>
</center>
</table>
<p>Total : Rp.3.710.000</p>
</center>
<br><br><br><br>
<div class = "topnav">
<h3 align = center>Copyright 2020 by Fadhly Aulia</h3>
</div>   

</body>