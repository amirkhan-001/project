<?php
    $uname   = $_POST['uname'];
    $password= $_POST['password'];
    $phone   = $_POST['phnum'];
    $phone   = $_POST['phnum2'];
    $email   = $_POST['email'];

    $filename = $f['name'];
    $fileerror= $f['error'];
    $filetmp  = $f['tmp_name'];

    echo $filename;

    $con = mysqli_connect('localhost', 'root');
    mysqli_select_db($con, 'myproject');

    $fileext =explode('.',$filename);
    $filecheck= strtolower(end($fileext));

    $fileextstored= array('png','jpg','jpeg');

    if (in_array($filecheck,$fileextstored)) {

        $destinationfile = 'profileImg/'.$filename;
        move_uploaded_file($filetmp,$destinationfile);

        $q = "INSERT INTO `user`(`name`, `phone1`, `email`, `password`) VALUES ('$uname','$phone','$email','$password')";
        $status = mysqli_query($con,$q);
    }



mysqli_close($con);
?>