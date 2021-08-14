<?php
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'myproject');

$id=$_GET['id'];

$query="SELECT * FROM ngo WHERE id='".$_GET['id']."'";
$statenow=mysqli_query($con,$query);
$arry=mysqli_fetch_array($statenow);

if($arry['toggle']=='show'){
    $query="UPDATE `ngo` SET `toggle`='hide' WHERE id='".$_GET['id']."'";
    $status = mysqli_query($con, $query);
}
else{
    $query="UPDATE `ngo` SET `toggle`='show' WHERE id='".$_GET['id']."'";
    $status = mysqli_query($con, $query);
}


// if($statenow=='show'){
//     $query="UPDATE `ngo` SET `toggle`='hide' WHERE `id`='$state'";
//     $status = mysqli_query($con, $q);
// }
// else{
//     $query="UPDATE `ngo` SET `toggle`='show' WHERE `id`='$state'";
//     $status = mysqli_query($con, $q);
// }
mysqli_close($con);
?>