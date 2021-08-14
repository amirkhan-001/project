<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'myproject');
$q = "SELECT * FROM `user` WHERE name='$username' && password='$password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1){
    $_SESSION['usrname']=$username;
    header('location:http://http://localhost/myproject/Page/list.php');
}
else{   
     header('location:http://http://localhost/myproject/index.php');
}
?>