<?php

session_start();
$links = mysqli_connect("localhost","root","") or die(mysqli_error($links));
mysqli_select_db($links,"douzo") or die(mysqli_error($links));
    
	$id=$_GET['Emp_Id'];
	$late=$_POST['Late'];
	$absent=$_POST['Absent'];
	
    
    if($late == 0){
        if($absent == 0 ){
            $total = 1500;
        mysqli_query($links,"UPDATE tbl_emp_sal set late='$late', Absent='$absent', Total_Salary='$total' where Emp_Id='$id'");
	}else{
        $total = 1500;
        $ab = 41.66;
        $t =  $ab * $absent; 
        $all = $total - $t;       
        mysqli_query($links,"UPDATE tbl_emp_sal set late='$late', Absent='$absent', Total_Salary='$all' where Emp_Id='$id'");
    }
    }else{
        $total = 1500;
        $emplate = 6.94;
        $ab = 41.66;
        $tal = $emplate * $late;//computation in late
        $abb = $ab * $absent;
        $totals = $tal + $abb;
        $overall = $total - $totals; 
        mysqli_query($links,"UPDATE tbl_emp_sal set late='$late', Absent='$absent', Total_Salary='$overall' where Emp_Id='$id'");
    }
	// mysqli_query($links,"UPDATE tbl_emp_sal set late='$late', Absent='$absent', Total_Salary='$total' where Emp_Id='$id'");
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Update Successfully</title>
</head>
<style>

@import url('https://fonts.googleapis.com/css2?family=Abyssinica+SIL&display=swap');
body{  
   
background-color: #ced4da;
  font-family: 'Abyssinica SIL', serif;
}
.container{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 740px;
    width: auto;
}

.form-box{
    width: 650px;
    height: 700px;
    border:1px solid black;
    box-shadow: 	0px 5px 7px 2px rgba(0,0,0,0.4),
0px 3px 13px -1px rgba(0,0,0,0.29),
0px -4px 1px 0px rgba(0,0,0,0.22) inset,
0px 2px 10px 2px rgba(0,0,0,0.28);
border:	10px solid  rgba(0,0,0,0.01);
border-top-left-radius:	20px;
border-top-right-radius: 2;
background-color:#2d4079;
}

.text{
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
padding-right: 10px;
font-size: 17px;
color:#ced4da;
}

i{
    color:green;
}
.button-container{
    display: flex;
    flex-direction: row;
    justify-content: center;
    gap:20px;
    padding-top: 15px;
}
</style>

<body>
<div class="container">
    <div class="form-box">
          <img src="./img/registered.png">
        <div class="text">
        <h1><i class="bi bi-check-circle-fill"> </i>Success</h1>
            <p>You successfully updated Employee's Id no. <?php echo $id=$_GET['Emp_Id'];?> Salary.</p>
                
                <div class="button-container">
                    <a href="../emp_sal.php"><button type="button" class="btn btn-primary">Go back to Employees salary</button></a> 	
                </div>
        </div>
    </div>
</div>
</body>
</html>