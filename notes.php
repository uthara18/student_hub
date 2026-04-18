<?php
session_start();
include("db/config.php");

if(!isset($_SESSION['user'])){
    header("Location: login.php");
}

$res=mysqli_query($conn,"SELECT * FROM notes");
?>

<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<h1>Notes</h1>

<nav>
<a href="dashboard.php">Dashboard</a>
<a href="logout.php">Logout</a>
</nav>

<div class="container">

<?php
while($row=mysqli_fetch_assoc($res)){
    echo "<div class='note'>";
    echo "<h3>".$row['title']."</h3>";
    echo "<p>".$row['content']."</p>";
    echo "</div>";
}
?>

</div>

</body>
</html>