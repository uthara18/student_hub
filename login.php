<?php
session_start();
include("db/config.php");

if(isset($_POST['login'])){
    $e=$_POST['email'];
    $p=$_POST['password'];

    $res=mysqli_query($conn,"SELECT * FROM users WHERE email='$e' AND password='$p'");

    if(mysqli_num_rows($res)>0){
        $_SESSION['user']=$e;
        header("Location: dashboard.php");
    } else {
        echo "Invalid login";
    }
}
?>

<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<h1>Login</h1>

<nav>
<a href="index.html">Home</a>
<a href="register.php">Register</a>
</nav>

<div class="container">

<form method="POST">
<input type="email" name="email" placeholder="Email"><br>
<input type="password" name="password" placeholder="Password"><br>
<input type="submit" name="login" value="Login">
</form>

</div>

</body>
</html>