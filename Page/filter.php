<?php 
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'myproject');

$state = $_POST['state'];
$city = $_POST['city'];
$work = $_POST['work'];
$worklist = implode(",",$work);



$q = "SELECT * FROM `ngo` WHERE `state`='$state' AND city='$city' AND work='$worklist'";
$status = mysqli_query($con,$q);
$num = mysqli_num_rows($status);
if(!$con){ 
    echo "done".mysqli_connect_error();
}
else
echo "not done".mysqli_error($con);


header('location:http://localhost/myproject/Page/list.php?st=done');
for ($i = 1; $i <= $num; $i++) {
    $list = mysqli_fetch_array($status);

 ?>
    <div class="list-warppar">
        <div class="li-it-co">
            <a href="ngoview.php?id=<?php echo $list['id']; ?>" style="text-decoration: none;">
                <div class="img-contenr">
                    <img src="../imag/<?php echo $list['profilephoto']; ?>" alt="" class="img-li">
                </div>
                <div class="text-contenr">
                    <div class="heading-li-it">
                        <h1 style="color:#000"><?php echo $list['ngo_name']; ?></h1>
                    </div>
                    <div class="discription-li-it">
                        <p style="color:#000"><?php echo $list['slogan']; ?></p>
                    </div>
                </div>
        </div>
        <input type="hidden" name="city" class="<?php echo $list['city'] . $i; ?>">
        <input type="hidden" name="work" class="<?php echo $list['work'] . $i; ?>">
        </a>
    </div>
<?php
}
mysqli_close($con);

?>