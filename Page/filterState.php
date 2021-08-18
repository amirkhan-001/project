<?php
include('connection.php');

if(isset($_POST['state'])){
    $inpState = $_POST['state'];
    $query = "SELECT DISTINCT `state` FROM `ngo` WHERE `state` LIKE '%$inpState%'";
    $result = mysqli_query($con,$query);
    $num = mysqli_num_rows($result);

    if($num>0){
        for($i=1;$i<=$num;$i++){
            $list = mysqli_fetch_array($result);
            $count = count($list);
            
            echo "<a href='#' class='list-group-item list-group-item-action border-1'>".$list['state']."</a>";
        }
    }
    else{
        echo "<p class='list-group-item border-1'>No Record...</p>";
    }
}
?>