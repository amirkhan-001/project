<?php
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'myproject');


    $id=$_GET['id'];

    $q = "SELECT * FROM `ngo` WHERE id='$id' ";



$status = mysqli_query($con, $q);
$num = mysqli_num_rows($status);
mysqli_close($con);
$ngo=mysqli_fetch_array($status);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/all.css">
    <script src="../js/jquery.js"></script>
    <!-- <script src="js/navscript.js"></script> -->
    <title>NGO Help</title>
</head>

<body>
    <header class="header" style="position: inherit; background: #000;">

        <div class="nav-con">
            <nav class="navbar">
                <ul class="link-li">
                    <li class="lie lie-1"><a href="../index.html" class="link-nav link-h active">Home</a></li>
                    <li class="lie lie-4"><a href="#about-section" class="link-nav link-a">About</a></li>
                    <li class="lie lie-5"><a href="#contact-section" class="link-nav link-c">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
<?php

?>
    <div class="ragister-body" style="background-image: url(../imag/img2.jpg); background-size: cover;">
        <div class="rg-pg-contenra">
            <div class="img-containr">
                <img src="../imag/<?php echo $ngo['profilephoto'];?>" alt="">
            </div>
            <div class="info-containr">
                <table>
                    <thead>
                        <tr>
                            <td>title</td>
                            <td>decsription</td>
                        </tr>
                    </thead>
                    <tr>
                        <th>NGO Name</th>
                        <td><?php echo $ngo['ngo_name'];?></td>
                    </tr>
                    <tr>
                        <th>thout</th>
                        <td><?php echo $ngo['slogan'];?></td>
                    </tr>
                    <tr>
                        <th>url</th>
                        <td><a href="<?php echo $ngo['url'];?>"><?php echo $ngo['url'];?></a></td>
                    </tr>
                    <tr>
                        <th>phone</th>
                        <td><?php echo $ngo['phone'];?></td>
                    </tr>
                    <tr>
                        <th>email</th>
                        <td><?php echo $ngo['email'];?></td>
                    </tr>
                    <tr>
                        <th>address</th>
                        <td><?php echo $ngo['address'];?></td>
                    </tr>
                    <tr>
                        <th>state</th>
                        <td><?php echo $ngo['state'];?></td>
                    </tr>
                    <tr>
                        <th>citys</th>
                        <td><?php echo $ngo['city'];?></td>
                    </tr>
                    <tr>
                        <th>work area</th>
                        <td><?php echo $ngo['work'];?></td>
                    </tr>
                    <tr>
                        <th>about</th>
                        <td><?php echo $ngo['about'];?></td>
                    </tr>
                </table>
                <p></p>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="fo-con">
            <p class="copyright">This site create by <span>MIT</span> Student</p>
        </div>
        <script type="text/javascript" src="../js/jscripte.js">
        </script>
    </footer>
</body>

</html>