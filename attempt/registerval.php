<?php

session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'user_registration');

$emp = $_POST['id'];
$code = $_POST['Code'];
$name = $_POST['user'];
$fn = $_POST['firstname'];
$ln = $_POST['lastname'];
$pass = $_POST['password'];

$s= "SELECT * from tb_auth where Emp_Id = '$emp'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo '<script>alert("The Username or Employee Id is Already Taken")</script>';

}
else{
	$reg = "INSERT into tb_auth(Emp_Id,Code,Username,Firstname,Lastname,Emp_pwd)values ('$emp','$code','$name','$fn','$ln','$pass')";
		mysqli_query($con, $reg);
	header("location:registergreetings.php");
	
}?>