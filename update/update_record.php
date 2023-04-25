<?php
session_start();
$links = mysqli_connect("localhost","root","") or die(mysqli_error($links));
mysqli_select_db($links,"douzo") or die(mysqli_error($links));
          
$id = $_GET['id'];

           $Prod_name = "";
            $Prod_price = "";
            $Prod_exp = "";
            $Category = "";
            $Quantity = "";
            
    
           $res=mysqli_query($links,"SELECT * from tbl_rec where Prod_Id = $id");
           while($row=mysqli_fetch_array($res)){
            $Prod_name = $row["Prod_name"];
            $Prod_price = $row["Prod_price"];
            $Prod_exp = $row["Prod_exp"];
            $Category = $row["Category"];
            $Quantity = $row["Quantity"];
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
    <title>Update Product List</title>
</head>
<style>

@import url('https://fonts.googleapis.com/css2?family=Abyssinica+SIL&display=swap');
body{  
   
background-color: #d7caa4;
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
    width: 400px;
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
  top:260px;
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
  color:#ced4da;
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
    <?php
            
            $con = mysqli_connect('localhost','root');
            
            mysqli_select_db($con,'douzo');
            
            $s= "SELECT * from tbl_rec where Prod_Id = $id";
            
            $result = mysqli_query($con, $s);
            
            $num = mysqli_num_rows($result);
            while($row = $result->fetch_assoc()){
                echo "<p style='padding-top:120px;'> Product ID : <b>".$row["Prod_Id"]."</b></p>";
                echo "<p> Product Name : <b>".$row["Prod_name"]."</b></p>";
                echo "<p> Product Price : <b>".$row["Prod_price"]."</b></p>";
       }
    ?>      
        <div class="aligning">
        <form id="update" class="input-group" action = "db_record.php?Prod_Id=<?php echo $id?>" method="post">
                <input type="text" class="input-field" name ="Prod_exp" placeholder="Product Expiration" required>
                <input type="text" class="input-field" name ="Category" placeholder="Category" required>
                <input type="text" class="input-field" name ="Quantity" placeholder="Quantity" onkeypress="return isNumberKey(event)" required>
        <br><br>
  
        <button type="submit" name="up" class="submit-btn">Update</button>  
</form>
         
        </div>

        <br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
    <a href="../record_management.php"><button class="btn btn-primary col-5 m-3">Back</button></a>    
    </div>
</body>
</html>