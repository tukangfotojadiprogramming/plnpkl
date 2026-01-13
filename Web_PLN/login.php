<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="assets/css/login.css">
<title>Login PLN</title>
</head>
<body>

<div class="login-card">
<h2>Login Dashboard PLN</h2>

<form method="POST">
<input type="text" name="username" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>
<button name="login">Login</button>
</form>

<a href="register.php">Daftar</a>

<?php
if(isset($_POST['login'])){
    $u=$_POST['username'];
    $p=$_POST['password'];

    $q=mysqli_query($conn,"SELECT * FROM users WHERE username='$u'");
    $d=mysqli_fetch_assoc($q);

    if($d && password_verify($p,$d['password'])){
        $_SESSION['user']=$u;
        header("Location: dashboard.php");
    }else{
        echo "<p style='color:red'>Login gagal</p>";
    }
}
?>
</div>
</body>
</html>
