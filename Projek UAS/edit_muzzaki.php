    <?php
    include 'koneksi.php';
    include 'session.php';
    $id = $_GET['id'];

    ?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Ubah Data Muzzaki</title>
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
<h3 align = center>Ubah Data Muzzaki</h3>
<br>
    </body>
    <?php
    $data = mysql_query("select * from data_muzzaki where id_muzzaki=$id");
    while($y=mysql_fetch_array($data)){
        ?>
        <form action="proses_edit_muzzaki.php" method="post">
            <table align = center>
                <tr>
                    <td>Nama Muzzaki</td>
            <td><input type="text" name = "nama_muzzaki" value="<?php echo $y['nama_muzzaki'];?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
            <td><input type="text" name = "alamat" value="<?php echo $y['alamat'];?>"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
            <td><input type="text" name = "jenis_kelamin" value="<?php echo $y['jenis_kelamin'];?>"></td>
                </tr>
                <tr>
                    <td>Jenis Zakat</td>
            <td><input type="text" name = "jenis_zakat" value="<?php echo $y['jenis_zakat'];?>"></td>
                </tr>
                <tr>
                    <td>Jumlah</td>
            <td><input type="text" name = "jumlah" value="<?php echo $y['jumlah'];?>"></td>
                </tr>
                <tr>
                    
            <td><input type="hidden" name = "id_muzzaki" value="<?php echo $y['id_muzzaki'];?>"></td>
                </tr>
            </table>
            <br><br>
            <center><button>Ubah Data</button>
            </center>
        </form>
        <?php
    }
    ?>
<br><br><br>
<div class = "topnav">
<h3 align = center>Copyright 2020 by Fadhly Aulia</h3>
</div>   
</html>