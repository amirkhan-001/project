<?php
include('connection.php');

if (isset($_POST['submit'])) {
    $admname   = $_POST['admname'];
    $f=$_FILES['inpfile'];
    $ngoname   = $_POST['ngoname'];
    $slogan   = $_POST['slogan'];
    $admpassword= $_POST['admpassword'];
    $about = $_POST['about'];
    $phonenum  = $_POST['phonenum'];
    $email  = $_POST['email'];
    $addr = $_POST['addr'];
    $state   = $_POST['state'];
    $city   = $_POST['city'];
    $work   = $_POST['work'];
    $url   = $_POST['url'];

    $worklist = implode(",",$work);

    $filename = $f['name'];

    if ($f['type']=="image/jpeg") {

        $destinationfile = 'profileImg/'.$filename;
        move_uploaded_file($f['tmp_name'], "../imag/".$f['name']);
        // INSERT INTO `ngo`(`sirnum`, `admin`, `password`, `profilephoto`, `ngo_name`, `slogan`, `about`, `phone`, `email`, `address`, `state`, `city`, `work`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13])
        $q ="INSERT INTO `ngo` (`admin`, `password`, `profilephoto`, `ngo_name`, `slogan`, `about`, `phone`, `email`, `address`, `state`, `city`, `work`,`url`) values ('$admname','$admpassword','$filename','$ngoname','$slogan','$about','$phonenum','$email','$addr','$state','$city','$worklist','$url')";    
        echo $q;
        $status = mysqli_query($con,$q);
        echo "record insertet";
    }

    else{
        echo "recode insetion faild";
    }
}

mysqli_close($con);
?>