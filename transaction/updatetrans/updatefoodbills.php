<?php

$links = mysqli_connect("localhost","root","") or die(mysqli_error($links));
mysqli_select_db($links,"douzo") or die(mysqli_error($links));

           $empid = $_GET['id'];
            $usern = "";
            $name = "";
            $Date = "";
            $Quantity = "";
            $Category = "";
            $Unit = "";
            $Cost_per_quantity = "";
            $Remarks = "";
            $Total_expenses = "";
            
    
           $res=mysqli_query($links,"SELECT * from tbl_trans where Prod_Id = $empid");
           while($row=mysqli_fetch_array($res)){
            $usern = $row["Username"];
            $name = $row["Name"];
            $Date = $row["Date"];
            $Category = $row["Quantity"];
            $status = $row["Category"];
            $Unit = $row["Unit"];
            $Cost_per_quantity = $row["Cost_per_quantity"];
            $Remarks = $row["Remarks"];
            $Total_expenses = $row["Total_expenses"];
        }

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Update Food bills</title>
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
    width: 900px;
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

.input-group{
  top:70px;
  position: absolute;
  width: 280px;
  transition: .5s;

}

.input-field{
  width: 100%;
  padding: 10px 0;
  margin:5px 0;
  border-left: 0;
  border-right: 0;
  border-top: 0;
  border-bottom:3px solid#0d1f57;
  outline: none;
  background:transparent;
}
.submit-btn{
  width:65%;
  padding:10px 20px;
  cursor:pointer;
  text-align: center;
  color:#ced4da;
  background-color:#0d1f57;
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

i,h1,span{
    color:#b50000;
}

.aligning{
    display: flex;
    justify-content: flex-start;
    padding-left: 20px;
}
img{
    margin-left: 290px;
}
p{
    color: #ced4da;
    padding-left: 20px;
}

</style>

<body>
<div class="container">
    <div class="form-box">
        
        <div class="aligning">
        <form id="update" class="input-group" action = "db_foodbills.php?Prod_Id=<?php echo $empid?>" method="post">
                <input type="text" class="input-field" name ="Prod_Id" placeholder="Product Id" maxlength="10" required>
                <input type="text" class="input-field" name ="Username" placeholder="Username" required>
                <input type="text" class="input-field" name ="Name" placeholder="Name of product" required>
                <input type="text" class="input-field" name ="Date" placeholder="Date" required>
                <input type="text" class="input-field" name ="Quantity" placeholder="Quantity" onkeypress="return isNumberKey(event)" maxlength="10"required>
                <input type="text" class="input-field" name ="Category" placeholder="Category"  required>
                <input type="text" class="input-field" name ="Unit" placeholder="Unit" required>
                <input type="text" class="input-field" name ="Cost_per_quantity" placeholder="Cost per Quantity" onkeypress="return isNumberKey(event)" maxlength="10"required>
                <input type="text" class="input-field" name ="Remarks" placeholder="Remarks" required>
                <input type="text" class="input-field" name ="Total_expenses" placeholder="Total Expenses" onkeypress="return isNumberKey(event)" maxlength="12" required>
                <br><br>
  
        <button type="submit" name="up" class="submit-btn">Update</button>  
</form>
         
        </div>
</div>


</body>
</html>