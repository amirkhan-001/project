<?php
session_start();
$admname = $_POST['admname'];
$password = $_POST['password'];
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'myproject');
$q = "SELECT * FROM `ngo` WHERE admin='$admname' && password='$password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1){
    $_SESSION['admname']=$admname;
    header('location:http://http://localhost/myproject/Page/home.php');
}
else{   
     header('location:http://http://localhost/myproject/index.php');
}
?>