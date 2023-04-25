<?php 
$link = mysqli_connect("localhost","root","") or die(mysqli_error($link));
mysqli_select_db($link,"douzo") or die(mysqli_error($link));
	$id=$_POST['id'];
	$username=$_POST['Username'];
	$message=$_POST['Message'];
    
 
	mysqli_query($link,"update tbl_bugrep set Username='$username', Message='$message' where ID='$id'");
	mysqli_query($link,"update tbl_auth set Username='$username' where Emp_Id='$id'");
    header('bug_report.php');
?>