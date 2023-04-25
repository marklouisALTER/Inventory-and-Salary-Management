<?php 
session_start();


?>

<!DOCTYPE html>
<html lang="en"> 
<head>
	<title>Dashboard</title>
  <meta charset="UTF-8">
	 <link rel="stylesheet" href="style.css">
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
padding: 0 10px;
}

.container img{
width: 200px;
height: 100px;
margin-bottom:20px;
margin-top: 20px;
border:1px solid orange;
border-radius: 20px;
}

.table{
    background-color: #3e4047;
}

.table, h6{
    color:white;
}

.contain{
  display: flex;
  justify-content: space-between;
margin-top: 20px;

} 

.section{
	margin: 20px 100px;
}

.section-one{
	margin-top: 20px;
}
.aligning{
	display: flex;
	justify-content: space-between;
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
a{
	list-style: none;
	list-style-type: none;
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

.form-box{  
  width:400px;
  height: 480px;
  position:100% auto;
  padding:5px;
  overflow:scroll;
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

.topbar{
  display: flex;
  justify-content: flex-end;
  padding-left: 100px;
}
.topbar a{
  padding-top:5px;
  padding-left: 10px;
  text-decoration: none;
}
.topbar a:hover{
  transition: .1s;  
  border-left: 3px solid orange;
  transform-origin: 0% 100%;
}
</style>
<body>

<div class="header">
        <div class="container">
            <img src="./images/douzo.jpg" alt="Company logo">
            <div class="contain">
			<div class="dropdown">
          <button class="dropbtn"><i class="bi bi-people-fill"> </i>Authentication</button>
            <div class="dropdown-content">
             <a href="validation_auth.php">Login and register account</a>
              <a href="#">Coming Soon</a>
            </div>
        </div>
		<div class="dropdown">
          <button class="dropbtn"><i class="bi bi-receipt"> </i>Record Management</button>
            <div class="dropdown-content">
              <a href="record_management.php">Product List(stocks)</a>
              
              <a href="#">Coming Soon</a>
            </div>
        </div>
		<div class="dropdown">
          <button class="dropbtn"><i class="bi bi-clipboard-data-fill"> </i>Transaction</button>
            <div class="dropdown-content">
              <a href="validation_auth.php">Food bills</a>
              <a href="validation_auth.php">Employee Salary</a>

            </div>
        </div>
		<div class="dropdown">
          <button class="dropbtn"><i class="bi bi-gear-fill"> </i>Account Settings</button>
            <div class="dropdown-content">
              <a href="./employee_set.php/Emp_set_acc.php">Employee's account Settings</a>
              <a href="./employee_set.php/bug_report.php">Bug Report</a>
              <a href="index.php">Logout</a>
            </div>
        </div>
		
          	</div>
    	</div>
</div>
<div class="section">
<div class="d=sm-flex align-items-center justify-content-between mb-4">
	<div class="aligning">
	
		<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="index.html"><button type="button" class="btn btn-dark"><i class="bi bi-box-arrow-right"></i>Logout</button></a>

	</div>
  <a href="homepage.php"><button type="button" class="btn btn-primary"><i class="bi bi-arrow-clockwise"> </i>Refresh</button></a>
		
<div class="section-one">
<div class="row">

<div class="col-x1-3 col-md-3 mb-4">
	<div class="card border-left-primary">
		<div class="card-body">
			<div class="row no-gutters align-items-center">
				<div class="col mr-4">
					<div class="text-xs font-weight-bold text-primary text-uppercase mb-2">No. Employee's of Registers</div>
					<div class="h1 mb-0 font-weight-bold text-gray-800">
					<br>
					<?php
						$con = mysqli_connect('localhost','root');

						mysqli_select_db($con,'douzo');
						
						$s= "SELECT Username FROM tbl_auth order by Username";
						
						$result = mysqli_query($con, $s);
						
						$num = mysqli_num_rows($result);
						
						if($num > 1){
              echo'<h5><i class="bi bi-person-fill"> </i>'.$num.' Accounts</h2>';
            }
            else{
              echo'<h5><i class="bi bi-person-fill"> </i> '.$num.' Account</h2>';
            }
					?>
          <?php
						$con = mysqli_connect('localhost','root');

						mysqli_select_db($con,'douzo');
						
						$s= "SELECT Username FROM tbl_accset order by Username";
						
						$result = mysqli_query($con, $s);
						
						$num = mysqli_num_rows($result);
						
						if($num > 1){
              echo'<h5><i class="bi bi-pencil-square"> </i>'.$num.' Account Requests</h5>';
            }
            else{
              echo'<h5><i class="bi bi-pencil-square"> </i>'.$num.' Account Request</h5>';
            }
					?>
					</div>
          <br><br>
          <a href="validation_auth.php"><button type="button" class="btn btn-primary"><i class="bi bi-view-list"> </i>View all Accounts</button></a>
         
				</div>
				</div>
			</div>
		</div>
	</div>
<div class="col-x1-3 col-md-3 mb-4">
	<div class="card border-left-primary">
		<div class="card-body">
			<div class="row no-gutters align-items-center">
				<div class="col mr-4">
					<div class="text-xs font-weight-bold text-primary text-uppercase mb-2.5">Your total Expenses for this month</div>
					<div class="h5 mb-0 font-weight-bold text-gray-800">
					<br><br>
          <?php
            $con = mysqli_connect('localhost','root');
            
            mysqli_select_db($con,'douzo');
            $query = "SELECT SUM(Total_expenses) As sum FROM tbl_trans";
            $query_result = mysqli_query($con, $query);
           while($row = mysqli_fetch_assoc($query_result)){
            $output =$row['sum'];
            }
            
            echo '<h2><i class="bi bi-cash-coin">  </i> '.$output.' Pesos</h2>';
          ?>
          <br><br>
          <a href="validation_auth.php"><button type="button" class="btn btn-primary"><i class="bi bi-view-list"> </i>View all Transactions</button></a>
            
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-x1-3 col-md-3 mb-4">
	<div class="card border-left-primary">
		<div class="card-body">
			<div class="row no-gutters align-items-center">
				<div class="col mr-4">
					<div class="text-xs font-weight-bold text-primary text-uppercase mb-2.5">Reviews of customer or Bug in Website</div>
					<div class="h5 mb-0 font-weight-bold text-gray-800">
						<br><br>
						<?php
						$con = mysqli_connect('localhost','root');

						mysqli_select_db($con,'douzo');
						
						$s= "SELECT Username FROM tbl_bugrep order by Username";
						
						$result = mysqli_query($con, $s);
						
						$num = mysqli_num_rows($result);
						
						if($num > 1){
              echo'<h2><i class="bi bi-person-fill"> </i>'.$num.' Messages</h2>';
            }
            else{
              echo'<h2><i class="bi bi-person-fill"> </i>'.$num.' Message</h2>';
            }
					?>
          <br><br>
         <button type="button" class="btn btn-primary" id="trigger-modal"><i class="bi bi-view-list"> </i>View all Messages</button>
        
          </div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-x1-3 col-md-3 mb-4">
	<div class="card border-left-primary">
		<div class="card-body">
			<div class="row no-gutters align-items-center">
				<div class="col mr-4">
				<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
	   <p> Just a Demo</p></div>
				
					<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales'],
          ['2018',  93520],
          ['2019',  132284],
          ['2020',  240294],
          ['2021',  293329],
        ]);

        var options = {
			title: 'Company Performance per year',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }


    </script>
	   <div id="curve_chart"></div>

					</div>

				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
<center>
<img src="./images/pending.png">
<h1 class="h3 mb-0 text-gray-800">We're Currently working for the next update</h1>
</center>
<div class="backdrop"></div>
  <div class="popup-modal">
  <div class="form-box">

  <div class="topbar">
  <a href="homepage.php" id="close-modal"><h6 style="color:black;"><i class="bi bi-x-circle-fill"> </i>Close</h6></a>
  </div>
    <?php
    $con = mysqli_connect('localhost','root');

    mysqli_select_db($con,'douzo');
    
    $s= "SELECT * from tbl_bugrep";
    
    $result = mysqli_query($con, $s);
    
if(isset($_GET['id'])){
  $id=$_GET['id'];
$delete= mysqli_query($con,"DELETE FROM `tbl_bugrep` WHERE `ID`='$id'");
}
    $num = mysqli_num_rows($result);
    while($row = $result->fetch_assoc()){
        echo "<h5 style='text-align:left;'><i class='bi bi-person-fill'> </i>" . $row["Username"]."</h5>";
        echo "<p style='text-align:right;'>" . $row["Message"]."</p>";
       echo "<a style='margin-left:30vh'class='btn btn-success' href='homepage.php?id=".$row['ID']."'>Solved</a>";
        echo"<hr>";
    }
            
            ?>
  </div>
  </div>
<script src="scripts.js"></script>
</body>
</html>