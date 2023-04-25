<?php

session_start();
$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'douzo');

$id = $_POST['id'];
$fname = $_POST['Fname'];
$lname = $_POST['Lname'];
$pos = $_POST['Position'];
$late = $_POST['Late'];
$absent = $_POST['Absent'];

$s= "SELECT * from tbl_emp_sal where Emp_Id = '$id'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($late == 0){
	if($absent == 0 ){
		$total = 1500;
		$reg = "INSERT into tbl_emp_sal(Emp_Id,Fname,Lname,Position,Late,Absent,Total_Salary)values('$id','$fname','$lname','$pos','$late','$absent','$total')";
		mysqli_query($con, $reg);
		header("location: ../emp_sal.php");
	
	}else{
	$total = 1500;
	$ab = 41.66;
	$t =  $ab * $absent; 
	$all = $total - $t;       
	$reg = "INSERT into tbl_emp_sal(Emp_Id,Fname,Lname,Position,Late,Absent,Total_Salary)values('$id','$fname','$lname','$pos','$late','$absent','$all')";
	mysqli_query($con, $reg);
	header("location: ../emp_sal.php");
}
}else{
	$total = 1500;
	$emplate = 6.94;
	$ab = 41.66;
	$tal = $emplate * $late;//computation in late
	$abb = $ab * $absent;
	$totals = $tal + $abb;
	$overall = $total - $totals; 
	$reg = "INSERT into tbl_emp_sal(Emp_Id,Fname,Lname,Position,Late,Absent,Total_Salary)values('$id','$fname','$lname','$pos','$late','$absent','$overall')";
	mysqli_query($con, $reg);
		
}
    ?>