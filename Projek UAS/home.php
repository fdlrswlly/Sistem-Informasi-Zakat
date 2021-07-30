<?php
include 'koneksi.php';
include 'session.php';
?>
<html>
    <head>
        <title>Sistem Informasi Zakat Fitrah</title>
        <link rel = "stylesheet" href="style.css">
    </head>
    <body>
    <h3>Selamat datang, <?php echo $_SESSION["login_user"]; ?></h3>
    <h1>SISTEM INFORMASI ZAKAT FITRAH</h1>
        <h1>MAJLIS TA'LIM AL - HUDA</h1>
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
<center><p>Profil Tentang Majlis Ta'lim Al Huda</p></center>
<br>
<table>
    <tr>
        <td><img src="./image/DSC_0080.jpg" width = 600px height = 400px></td>
    <td><p>Majlis Ta'lim Al Huda merupakan organisasi yang ada di lingkungan Masjid Al Huda, <br> bertempat di Gg.Mushola 2(Belakang BANK CIMB NIAGA)<br>
tidak hanya Majlis Ta'limnya saja, organisasi lain pun seperti IREMTA Al Huda yang beranggota remaja di sekitaran masjid al huda</p></td>
</tr>
</table> 
<br><br><br>
<div class = "topnav">
<h3 align = center>Copyright 2020 by Fadhly Aulia</h3>
</div>   
    </body>
    </html>