<?php
include 'koneksi.php';
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['password']);

    $sql = "select id_admin FROM admin where username = '$username' and password = '$password'";
    $result = mysql_query($sql);
    $count = mysql_num_rows($result);

    if($count == 1){
    $_SESSION['login_user'] = $username;
    header("location: home.php");
    }
    else{
        $error = "Username dan password salah!!";
    }
}
    ?>
    <html>
        <head>
            <title>Login</title>
            <link rel="stylesheet" href="style_login.css">
        </head>
        <body>
            <div class="login-page">
                <div class="form">
                    <h2>Selamat Datang</h2>
  <form method="post" action="">
      <input type="text" name="username" placeholder="username"/>
      <input type="password" name = "password" placeholder="password"/>
      <button id="submit-btn" type="submit" name="submit" value="Login">LOGIN</button>
      <p>Belum Punya akun? <a href="regist.php">Buat akun baru</a></p>
    </form>
      <p><?php echo $error;?></p>
  </div>
</div>
</body>
</html>