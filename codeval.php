<?php

session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'douzo');

$code = $_POST['code'];
if($code == "0123456789"){
	header('location:authentication.php');
}
else if($code == "admintrans1"){
	header('location:./transaction/foodbills.php');
}else if($code =="admintrans2"){
	header('location:./transaction/emp_sal.php');
}else if($code == "bugreport"){
	header('location:./.php');
}else{
	header('location:./homepage.php');
}
