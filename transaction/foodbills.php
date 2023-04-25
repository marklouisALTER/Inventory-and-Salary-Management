<?php 
session_start();


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<style>
   
@import url('https://fonts.googleapis.com/css2?family=Abyssinica+SIL&display=swap');
* {
    margin: 0;
    padding: 0;
  }

body{ 
  background-color: #d7caa4;
  font-family: 'Abyssinica SIL', serif;
}
.header{
min-height: 50px;
background:#0d1f57;
width:100%;
height:100%;
border-bottom: 4px solid orange;

}

.container{
display: flex;
justify-content: space-between;
max-width: 1700px;
margin: 0 auto;
padding: 0 30px;

}

.container img{
width: 200px;
height: 100px;
margin-bottom:20px;
margin-top: 20px;
border:1px solid orange;
border-radius: 20px;
}

.table, h6{
    color:white;
    min-width:100%;
}

.contain{
  display: flex;
  justify-content: space-between;
margin-top: 20px;
} 


.dropbtn {
  background-color: #0d1f57;
  color: white;
  margin-top: 5px; 
  padding: 20px 25px;
  border-radius: 20px;
  font-size: 20px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;

}

.dropdown-content {
  margin-top:5px;
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 200px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
	
}

.dropdown-content a {
  color:  #0d1f57;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  background-color: #ced4da;
}

.dropdown-content a:hover {background-color:  #0d1f57; color:white;
  border-left: 5px solid orange; transition:.2s;}

.dropdown:hover .dropdown-content {
  display: block;
  
}

.dropdown:hover .dropbtn {
  background-color:  #0d1f57;
  color:#0d6efd;
  
}
p{
   color:#3e4047;
}

.box-section{
    border:2px solid black;
    margin: 50px 50px;
    box-shadow: 	0px 5px 7px 2px rgba(0,0,0,0.4),
		0px 3px 13px -1px rgba(0,0,0,0.29),
		0px -4px 1px 0px rgba(0,0,0,0.22) inset,
		0px 2px 10px 2px rgba(0,0,0,0.28);
border:	1px solid rgba(0,0,0,0.01);
border-top-left-radius:	20px;
border-top-right-radius: 20px;
text-align: center;

background-color: white;

    
}

h1{
  font-family: 'Abyssinica SIL', serif;
 letter-spacing: 2px;
 font-size: 50px;
 line-height:100px;
 text-align: center;
 margin-right: 100px;
}

.table{
    background-color: white;
}


.popup-modal {
  padding: 32px 64px;
  border-bottom: 2px solid black;
  background-color: white;
  border-radius: 10px;
  position: fixed;
  top: 50%;
  left: 50%;
  transform-origin: center;
  transform: translate(-50%, -50%);
  pointer-events: none;
  opacity: 0%;
  text-align: center;
}
.backdrop {
  pointer-events: none;
  position: fixed;
  inset: 0;
  background: #000;
  opacity: 0%;
}

.popup-modal.show {
  opacity: 100%;
  pointer-events: all;
}

.backdrop.show {
  opacity: 30%;
}
.popup-modal{
  transition: transform .3s ease-in-out, opacity .4s ease;
  transform: translate(-50%, -100%);
}

.popup-modal.show {
  transform: translate(-50%, -50%);
}

h5{
  color: black;
}

.column{
  padding-top: 30px;
  }
  .box-section h1{
    text-align: center;
    padding-left: 100px;
  }

.input-group{
  position: absolute;
  width: 280px;
  transition: .5s;
  margin-left: 35px;
}

.input-field{
  width: 100%;
  padding: 10px 0;
  margin:5px 0;
  border-left: 0;
  border-right: 0;
  border-top: 0;
  border-bottom:3px solid #999;
  outline: none;
  background:transparent;

}
.submit-btn{
  width:100%;
  padding:10px 10px;
  cursor:pointer;
  margin-top: 10px;
  background-color:#0d6efd;
  color:white;
}


.form-box{  
  width:350px;
  height: 650px;
  position:100% auto;
  padding:5px;

}

.box-section a {
  color: white;
  
}

.btn-container{
  display:flex;
  justify-content: flex-end;
  padding:10px;
  gap:10px;
}

.topbar{
  display: flex;
  justify-content: flex-end;
  padding-left: 100px;
}
.topbar a{
  padding-top:5px;
  padding-left: 10px;
}
.topbar a:hover{
  transition: .1s;  
  border-left: 3px solid orange;
  transform-origin: 0% 100%;
}

.topbar i{
  color:red;
}
 
.firstSpan {
  color: #0d1f57;
  
  cursor: pointer;
}
    
.firstSpan .secondSpan {
  visibility: hidden;
  width: 100px;
  background-color: #0d1f57;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
}
    
.firstSpan:hover .secondSpan {
  visibility: visible;
}

</style>
<body>

<div class="header">
        <div class="container">
            <img src="../images/douzo.jpg">
            <div class="contain">
           
            <div class="dropdown">
          <button class="dropbtn"><i class="bi bi-people-fill"> </i>Authentication</button>
            <div class="dropdown-content">
              <a href="../authentication.php">Login and register account</a>
              <a href="#">Coming Soon</a>
            </div>
        </div>
		<div class="dropdown">
          <button class="dropbtn"><i class="bi bi-receipt"> </i>Record Management</button>
            <div class="dropdown-content">
              <a href="../record_management.php">Product List(stocks)</a>
              
              <a href="#">Coming Soon</a>
            </div>
        </div>
		<div class="dropdown">
          <button class="dropbtn"><i class="bi bi-clipboard-data-fill"> </i>Transaction</button>
            <div class="dropdown-content">
              <a href="foodbills.php">Food bills</a>
              <a href="emp_sal.php">Employee Salary</a>

            </div>
        </div>
		<div class="dropdown">
          <button class="dropbtn"><i class="bi bi-gear-fill"> </i>Account Settings</button>
            <div class="dropdown-content">
              <a href="../employee_set.php/Emp_set_acc.php">Employee's account Settings</a>
              <a href="../employee_set.php/bug_report.php">Bug Report</a>
              <a href="./index.html">Logout</a>
            </div>
        </div>
            
          	</div>
    	</div>
</div>

<div class="box-section">
      <div class="btn-container">
      
      <a href="../homepage.php"><button type="button" class="btn btn-primary"><i class="bi bi-house-door-fill"> </i>Dashboard</button></a>
      <a href="foodbills.php"><button type="button" class="btn btn-primary"><i class="bi bi-arrow-clockwise"> </i>Refresh</button></a>
      </div>
    <h1>Food Bills</h1>
    <br><br>
    <!-- <div class="btn-container">
    <form class="d-flex" role="search">
      <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary" type="submit">Search</button>
    </form>
    </div> -->
    <table class="table">
        <thead>
            <tr>
                <th class="table-dark"><h6>Product ID</h6></th>
                <th class="table-dark"><h6>Employee who input</h6></th>
                <th class="table-dark"><h6>Name of product</h6></th>
                <th class="table-dark"><h6>Date of buy</h6></th>
                <th class="table-dark"><h6>Quantity</h6></th>
                <th class="table-dark"><h6>Category</h6></th>
                <th class="table-dark"><h6>Unit(kg/g)</h6></th>
                <th class="table-dark"><h6>Cost per Unit</h6></th>
                <th class="table-dark"><h6>Remarks</h6></th>
                <th class="table-dark"><h6>Total Expenses</h6></th>
                <th class="table-dark"><h6>Action</h6></th>
            </tr>
        </thead>
        <tbody>
        
        <?php
            
            $con = mysqli_connect('localhost','root');
            
            mysqli_select_db($con,'douzo');
            $query = "SELECT SUM(Total_expenses) As sum FROM tbl_trans";
            $query_result = mysqli_query($con, $query);
           while($row = mysqli_fetch_assoc($query_result)){
            $output = "<b>Total expenses :</b>"." ".$row['sum'];
            }
            
            
            $s= "SELECT * from tbl_trans";
            
            $result = mysqli_query($con, $s);
            
            $num = mysqli_num_rows($result);
            
            if(isset($_GET['id'])){
                $id=$_GET['id'];
              $delete= mysqli_query($con,"DELETE FROM `tbl_trans` WHERE `Prod_Id`='$id'");
            }
                        while($row = $result->fetch_assoc()){
                            echo "<tr>
                             <td><p>" . $row["Prod_Id"] . "</p></td>
                             <td><p>" . $row["Username"] . "</p></td>
                            <td><p>" . $row["Name"] . "</p></td>
                            <td><p>" . $row["Date"] . "</p></td>
                            <td><p>" . $row["Quantity"] . "</p></td>
                            <td><p>" . $row["Category"] . "</p></td>
                            <td><p>" . $row["Unit"] . "</p></td>
                            <td><p>" . $row["Cost_per_quantity"] . " Pesos</p></td>
                            <td><p>" . $row["Remarks"] . "</p></td>
                            <td><p>" . $row["Total_expenses"] . " Pesos</p></td>

                            <td>
                             <a class='btn btn-primary' href='./updatetrans/updatefoodbills.php?id=".$row['Prod_Id']."'>update</a>
                             <a class='btn btn-danger' href='foodbills.php?id=".$row['Prod_Id']."'>Delete</a>
                             <span class='firstSpan'><i class='bi bi-exclamation-circle-fill' style='color:red;font-weight:light;'> Note<span class='secondSpan'>Refresh the site after you delete a data.</span> </i> </span> 
                             </td>
                            </tr>";
                            
                        }
                       
            ?>
                
        </tbody>
    </table>
    <?php 
    echo  $output .' Pesos';
    ?>  
    <div class="backdrop"></div>
    <div class="popup-modal">
    <div class="topbar">
  <a href="foodbills.php" id="close-modal"><h6 style="color:black;"><i class="bi bi-x-circle-fill"> </i>Close</h6></a>
</div>
<div class="form-box">
    <form id="register" class="input-group" action = "./updatetrans/add_foodbills.php" method="post">
                <input type="text" class="input-field" name ="id" placeholder="Prod_ID" onkeypress="return isNumberKey(event)"maxlength="12"  required>
                <input type="text" class="input-field" name ="Username" placeholder="Username" required>
                <input type="text" class="input-field" name ="Name" placeholder="Name of product" required>
               <input type="text" class="input-field" name ="Date" placeholder="Date" required>
                <input type="text" class="input-field" name ="Quantity" placeholder="Quantity" required>
                <input type="text" class="input-field" name ="Category" placeholder="Category" required>
                <input type="text" class="input-field" name ="Unit" placeholder="Unit" required>
                <input type="text" class="input-field" name ="Cost_per_quantity" placeholder="Cost per Quantity" required>
                <input type="text" class="input-field" name ="Remarks" placeholder="Remarks" required>
                <input type="text" class="input-field" name ="Total_expenses" placeholder="Total Expenses" required>
      
      <br><br>
      
            <button type="submit" class="submit-btn">Add Transac stock</button>  
    </form>
</div>
    </div>
    <br></br>
    <br></br>
          
    <button class='btn btn-primary' id="trigger-modal" >Add Bills</button>
<br></br>
    </div>
    <script src="../scripts.js"></script>

    <script>
      
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
    </script>
</body>
</html>