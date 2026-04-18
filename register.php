<?php
include("db/config.php");

if(isset($_POST['register'])){
    $u=$_POST['username'];
    $e=$_POST['email'];
    $p=$_POST['password'];

    mysqli_query($conn,"INSERT INTO users(username,email,password) VALUES('$u','$e','$p')");
}
?>

<html>
<head>
<link rel="stylesheet" href="css/style.css">
<script src="js/script.js"></script>
</head>

<body>

<h1>Register</h1>

<nav>
<a href="index.html">Home</a>
<a href="login.php">Login</a>
</nav>

<div class="container">

<form method="POST" name="regForm" onsubmit="return validateRegister()">

<input type="text" name="username" placeholder="Username"><br>
<input type="email" name="email" placeholder="Email"><br>
<input type="password" name="password" placeholder="Password"><br>

<input type="submit" name="register" value="Register">

</form>

</div>

</body>
</html>