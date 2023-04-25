<?php

session_start();
$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'douzo');

$id = $_POST['id'];
$z = $_POST['Username'];
$c = $_POST['Name'];
$d = $_POST['Date'];
$q = $_POST['Quantity'];
$cat = $_POST['Category'];
$u = $_POST['Unit'];
$cpq = $_POST['Cost_per_quantity'];
$r = $_POST['Remarks'];
$te = $_POST['Total_expenses'];

$s= "SELECT * from tbl_trans where Prod_Id = '$id'";
$ss= "SELECT * from tbl_rec where Prod_Id = '$id'";
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo '<script>alert("The Username or Employee Id is Already Taken please use update instead of add")</script>';

}
else{
	$reg = "INSERT into tbl_trans(Prod_Id,Username,Name,Date,Quantity,Category,Unit,Cost_per_quantity,Remarks,Total_expenses)values ('$id','$z','$c','$d','$q','$cat','$u','$cpq','$r','$te')";
		mysqli_query($con, $reg);
		$reg = "INSERT into tbl_rec(Prod_Id,Prod_name,Prod_price,Category,Quantity)values ('$id','$c','$cpq','$cat','$q')";
		mysqli_query($con, $reg);
	header("location:../foodbills.php");
	
}?>