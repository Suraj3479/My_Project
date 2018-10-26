<?php

session_start();

if(!isset($_SESSION['username'])){
	header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
	<div class="container">
		<h1 class="text-center text-success">Welcome <?php echo $_SESSION['username'] ?></h1>
    	<a href="logout.php">Logout</a>
    </div>
</body>
</html>