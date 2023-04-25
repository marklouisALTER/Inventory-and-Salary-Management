<?php

session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'douzo');

$emp = $_POST['id'];
$code = $_POST['Code'];
$name = $_POST['user'];
$fn = $_POST['firstname'];
$ln = $_POST['lastname'];
$pass = $_POST['password'];

if($code == 2022){

    $s= "SELECT * from tbl_auth where Emp_Id = '$emp'";
    $ss= "SELECT * from tbl_bugrep where ID = '$emp'";
    $sss= "SELECT * from tbl_bugrep where Emp_Id = '$emp'";
    $result = mysqli_query($con, $s);
    
    $num = mysqli_num_rows($result);
    
        $reg = "INSERT into tbl_auth(Emp_Id,Code,Username,Firstname,Lastname,Emp_pwd)values ('$emp','$code','$name','$fn','$ln','$pass')";
        mysqli_query($con, $reg);
        $regs = "INSERT into tbl_bugrep(ID,Username)values('$emp','$name')";
            mysqli_query($con, $regs);
        $regss = "INSERT into tbl_emp_sal(Emp_Id,Fname,Lname,Position)values('$emp','$fn','$ln','$name')";
            mysqli_query($con, $regss);
            header("location: dash.php");
    
}

    else if($code == 82022){
        $reg = "INSERT into tbl_auth(Emp_Id,Code,Username,Firstname,Lastname,Emp_pwd)values ('$emp','$code','$name','$fn','$ln','$pass')";
        mysqli_query($con, $reg);
        header("location: dash.php");
    }else{
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Wrong Codeeeeeeee")';  

    echo '</script>';  
}

?>

