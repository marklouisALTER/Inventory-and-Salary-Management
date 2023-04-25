<?php

session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'user_registration');

$name = $_POST['user'];
$pass = $_POST['password'];

$s= "SELECT * from tb_auth where Username = '$name' && Emp_pwd = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['user']= $name;
	header('location:homepage.php');

}
else{
	header('location:lastattempt.php');
	
}

