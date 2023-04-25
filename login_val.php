<?php

session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'user_registration');

$code = $_POST['Code'];
$name = $_POST['user'];
$fn = $_POST['firstname'];
$ln = $_POST['lastname'];
$pass = $_POST['password'];

$s= "SELECT * from login where Code = '$emp'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo '<script>alert("The Username or Employee Id is Already Taken")</script>';

}
else{
	$reg = "INSERT into login(Code)values ('$code')";
		mysqli_query($con, $reg);
	header("location:authentication.php");
	
}?>