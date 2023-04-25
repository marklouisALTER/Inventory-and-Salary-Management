<?php 
$links = mysqli_connect("localhost","root","") or die(mysqli_error($links));
mysqli_select_db($links,"db_rec") or die(mysqli_error($links));