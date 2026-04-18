<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login.php");
}
?>

<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<h1>Dashboard</h1>

<nav>
<a href="notes.php">Notes</a>
<a href="logout.php">Logout</a>
</nav>

<div class="container">
<h2>Welcome!</h2>
</div>

</body>
</html>