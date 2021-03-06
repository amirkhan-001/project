<?php
include('connection.php');

if(isset($_POST['state'])&&isset($_POST['city'])&&isset($_POST['work'])){
    $state = $_POST['state'];
    $city = $_POST['city'];
    $work = $_POST['work'];
    $worklist = implode(",",$work);

    $q = "SELECT * FROM `ngo` WHERE `state`='$state' AND city='$city' AND work='$worklist'";

}
else{
    $q = "SELECT * FROM `ngo` WHERE toggle='show'";
}


$status = mysqli_query($con, $q);
$num = mysqli_num_rows($status);
// mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/all.css">

    <title>NGO Help</title>
</head>

<body>
    <header class="header" style="position: inherit; background: #000;">
        <div class="account">
            <a href="#" class="sign-ac active" onclick="document.getElementById('modal-wrapper1').style.display='block'">login</a>
        </div>
        <div class="nav-con">
            <nav class="navbar">
                <ul class="link-li">
                    <li class="lie lie-2"><a href="#" class="link-nav link-l active">List</a></li>
                    <li class="lie lie-4"><a href="../index.html#about-section" class="link-nav link-a">About</a></li>
                    <li class="lie lie-5"><a href="../index.html#contact-section" class="link-nav link-c">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="ragister-body" style="background-image: url(../imag/img2.jpg); background-size: cover;">

        <div class="li-pg-contenra">
            <div id="filter-icon">
            <a href="#" class="sign-ac active" onclick="document.getElementById('modal-wrapper1').style.display='block'"><i class="fas fa-filter"></i></a>
            </div>
            <div class="filter-container">
                <div id="modal-wrapper1" class="modal">
                    <form class="modal-content" action="list.php" method="post" enctype="multipart/form-data">
                        <div class="container">
                            
                            <input type="text" name="state" placeholder="State" id="state" onchange="state_list(this.value)">
                            <div class="list-container col-md-5">
                                <div class="list-group" id="show-list">
                                    
                                </div>
                            </div>
                            <input type="text" name="city" placeholder="City" id="city">
                            <div class="list-container col-md-5">
                                <div class="list-group" id="show-list2">
                                    
                                </div>
                            </div>
                            <div class="work-container">
                                <ul>
                                    <li><input type="checkbox" name="work[]" id="" value="chileadran">Chileadran</li>
                                    <li><input type="checkbox" name="work[]" id="" value="ladise">womes</li>
                                    <li><input type="checkbox" name="work[]" id="" value="natchar">natchar</li>
                                    <li><input type="checkbox" name="work[]" id="" value="healthe">healthe</li>
                                </ul>
                            </div>
                            <input type="submit" value="search" class="login">
                            
                            
                        </div>
                    </form>
                </div>
            </div>
            <div class="list-warppar">
                <div class="li-it-co">
                    <div class="img-contenr">
                        <img src="../imag/img1.jpg" alt="" class="img-li">
                    </div>
                    <div class="text-contenr">
                        <div class="heading-li-it">
                            <h1>MGM</h1>
                        </div>
                        <div class="discription-li-it">
                            <p>save the humanity</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-warppar">
                <div class="li-it-co">
                    <div class="img-contenr">
                        <img src="../imag/img1.jpg" alt="" class="img-li">
                    </div>
                    <div class="text-contenr">
                        <div class="heading-li-it">
                            <h1>helping hand</h1>
                        </div>
                        <div class="discription-li-it">
                            <p>get to the bater world</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php

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
        </div>
    </div>

    <footer class="footer">
        <div class="fo-con">
            <p class="copyright">This site create by <span>MIT</span> Student</p>
        </div>
        <script src="../js/jscripte.js"></script>
        <script src="../js/jquery.js"></script>
        <script>
            $(document).ready(function(){
                $('#state').keyup(function(){
                    var searchState = $(this).val();
                    if(searchState!=''){
                        $.ajax({
                            url:'filterState.php',
                            method:'post',
                            data:{state:searchState},
                            success:function(response){
                                $('#show-list').html(response);
                            }
                        });
                    }
                    else{
                        $('#show-list').html('');
                    }
                });
                $(document).on('click','a',function(){
                    $("#state").val($(this).text());
                    $("#show-list").html('');
                });
                $('#city').keyup(function(){
                    var searchState = $(this).val();
                    if(searchState!=''){
                        $.ajax({
                            url:'filterCity.php',
                            method:'post',
                            data:{city:searchState},
                            success:function(response){
                                $('#show-list2').html(response);
                            }
                        });
                    }
                    else{
                        $('#show-list2').html('');
                    }
                });
                $(document).on('click','a',function(){
                    $("#city").val($(this).text());
                    $("#show-list2").html('');
                });
            });
        </script>

    </footer>
</body>

</html>