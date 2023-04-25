<?php

session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'douzo');

$emp = $_POST['id'];
$fname = $_POST['Fname'];
$lname = $_POST['Lname'];
$user = $_POST['Username'];
$emp_pwd = $_POST['Emp_pwd'];
$pos = $_POST['Position'];
$mess = $_POST['Message'];

$s= "SELECT * from tbl_accset where Emp_Id = '$emp'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo '<script>alert("The Username or Employee Id is Already Taken")</script>';

}
else{
	$reg = "INSERT into tbl_accset(Emp_Id,Fname,Lname,Username,Emp_pwd,Position,Message)values ('$emp','$fname','$lname','$user','$emp_pwd','$pos','$mess')";
		mysqli_query($con, $reg);
	header("location:Emp_set_acc.php");
	
}?>