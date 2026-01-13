<?php include "config.php"; ?>
<link rel="stylesheet" href="assets/css/login.css">

<div class="login-card">
<h2>Daftar Akun</h2>

<form method="POST">
<input type="text" name="username" placeholder="Username" required>
<input type="email" name="email" placeholder="Email">
<input type="password" name="password" placeholder="Password" required>
<button name="register">Daftar</button>
</form>

<a href="login.php">Login</a>

<?php
if(isset($_POST['register'])){
  $u=$_POST['username'];
  $e=$_POST['email'];
  $p=password_hash($_POST['password'],PASSWORD_DEFAULT);
  mysqli_query($conn,"INSERT INTO users VALUES('','$u','$p','$e')");
  echo "Akun berhasil dibuat";
}
?>
</div>
