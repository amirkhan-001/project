<?php
include('connection.php');

if(isset($_POST['city'])){
    $inpState = $_POST['city'];
    $query = "SELECT DISTINCT `city` FROM `ngo` WHERE `city` LIKE '%$inpState%'";
    $result = mysqli_query($con,$query);
    $num = mysqli_num_rows($result);

    if($num>0){
        for($i=1;$i<=$num;$i++){
            $list = mysqli_fetch_array($result);
            echo "<a href='#' class='list-group-item list-group-item-action border-1'>".$list['city']."</a>";
            // echo "<a href='#' class='list-group-item list-group-item-action border-1'>".$u."</a>";
        }
    }
    else{
        echo "<p class='list-group-item border-1'>No Record...</p>";
    }
}
?>