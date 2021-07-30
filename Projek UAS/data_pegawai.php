<?php
include 'koneksi.php';
include 'session.php';

$query = "select * from data_pegawai";
$cek = mysql_query($query);
?>
<html>
    <head>
        <title>Data Pegawai</title>
        <link rel = "stylesheet" href="style.css">
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
<h3 align = center >Data Muzzaki</h3>
<center>
    <table border = 1 width="90%">
        <tr>
            <th>ID Pegawai</th>
            <th>Nama Pegawai</th>
            <th>Alamat</th>
            <th>Jabatan</th>
            <th>Option</th>
        
            <h4><a href="tambah_pegawai.php">+Tambah Data</a></h4>
            <?php
            while($data = mysql_fetch_assoc($cek)){
                ?>
                <tr>
                    <td><?php echo $data['id_pegawai'];?></td>
                    <td><?php echo $data['nama_pegawai'];?></td>
                    <td><?php echo $data['alamat'];?></td>
                    <td><?php echo $data['jabatan'];?></td>
                    <td align = center><a href="edit_pegawai.php?id=<?php echo $data['id_pegawai'];?>">Edit</a> ||
                <a href="hapus_pegawai.php?id=<?php echo $data['id_pegawai'];?>">Hapus</a></td>
            </tr>
            <?php
            }
            ?>
        </tr>
    </table>
</center>
<br><br><br><br>
<div class = "topnav">
<h3 align = center>Copyright 2020 by Fadhly Aulia</h3>
</div>   
</body>
</html>