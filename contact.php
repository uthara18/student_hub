<?php
if(isset($_POST['send'])){
    echo "Message sent!";
}
?>

<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<h1>Contact</h1>

<nav>
<a href="index.html">Home</a>
</nav>

<div class="container">

<form method="POST">
<input type="text" name="name" placeholder="Name"><br>
<input type="email" name="email" placeholder="Email"><br>
<textarea name="msg" placeholder="Message"></textarea><br>
<input type="submit" name="send" value="Send">
</form>

</div>

</body>
</html>