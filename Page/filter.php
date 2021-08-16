<?php 
$state = $_POST['state'];
$city = $_POST['city'];
$work = $_POST['work'];
$worklist = implode(",",$work);

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'myproject');

$q = "SELECT * FROM `ngo` WHERE state=$state AND city=$city AND work=$worklist";
$r = mysqli_query($con,$q);




?>