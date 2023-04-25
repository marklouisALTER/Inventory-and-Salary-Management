<?php

session_start();
$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'douzo');

$name = $_POST['user'];
$pass = $_POST['password'];

$s= "SELECT * from tbl_auth where Username = '$name' && Emp_pwd = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['user']= $name;
	header('location:homepage.php');

}
else{
	header('location:./attempt/attempt.php');
	
}

