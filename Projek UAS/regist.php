<html>
        <head>
            <title>Daftar akun baru</title>
            <link rel="stylesheet" href="style_login.css">
        </head>
        <body>
            <div class="login-page">
                <div class="form">
                    <h2>Silahkan Daftar</h2>
  <form method="post" action="proses_regist.php">
      <input type="text" name="id_admin" placeholder="ID Admin">
      <input type="text" name="username" placeholder="username"/>
      <input type="password" name = "password" placeholder="password"/>
      <button id="submit-btn" type="submit" name="submit">Daftar</button>
      <p>Sudah Punya akun? <a href="login.php">Login</a></p>
      <p><?php echo $error;?></p>
    </form>
  </div>
</div>
</body>
</html>