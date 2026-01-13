<?php
include "config.php";
if(!isset($_SESSION['user'])) header("Location: login.php");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="assets/css/dashboard.css">
</head>
<body>

<header>
<h1>Dashboard PLN</h1>
<a href="logout.php">Logout</a>
</header>

<h3>Selamat datang, <?php echo $_SESSION['user']; ?></h3>

</body>
</html>
