<?php

session_start();
header('location:login.php');

 $con = mysqli_connect('localhost','root');

 if($con){
 	echo "Connection Sucessful";
 }else{
 	echo "Connection Failed";
 }

 mysqli_select_db($con,'masteruser');

 $name = $_POST['user'];
 $pass = $_POST['password'];
 $em = $_POST['email'];
 $add = $_POST['address'];

$q = "select * from signin where name = '$name' && password = '$pass'";

$result=mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if ($num == 1) {
	echo "User alresdy Exist";
}else{
	$qy = "insert into signin(name,password,email,Address) values('$name','$pass','$em','$add') ";
	mysqli_query($con,$qy);
}

?>