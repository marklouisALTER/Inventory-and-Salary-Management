<?php

session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'douzo');
$id = $_POST['id'];
$name = $_POST['Prod_name'];
$price = $_POST['Prod_price'];
$exp = $_POST['Prod_exp'];
$Cat = $_POST['Category'];
$Quan = $_POST['Quantity'];

$s= "SELECT * from tbl_rec where Prod_Id = '$id'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo '<script>alert("The Product is in the table already")</script>';

}
else{
	$reg = "INSERT into tbl_rec(Prod_Id,Prod_name,Prod_price,Prod_exp,Category,Quantity)values ('$id','$name','$price','$exp','$Cat','$Quan')";
		mysqli_query($con, $reg);
	header("location:record_management.php");
	
}?>