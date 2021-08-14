<?php
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'myproject');

$q = "SELECT * FROM `ngo`";

$status = mysqli_query($con, $q);
$num = mysqli_num_rows($status);
mysqli_close($con);
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

    <section>
        <div class="adm-container">

            <div class="left-manu">
                <div class="imag-container">
                    <img src="../imag/designlogo.jpg" alt=""> h
                    <h1>NGO help Admin</h1>
                </div>
                <ul>
                    <li>
                        <a href="#" id="user">User</a>
                    </li>
                    <li>
                        <a href="#" id="ngo">NGO</a>
                    </li>
                </ul>
            </div>
            <div class="info-container">
                <div class="userinfo-container">
                    <table border="1">
                        <thead>
                            <tr>
                                <th>user dp</th>
                                <th>user name</th>
                                <th>user email</th>
                                <th>user phone</th>
                                <th>user address</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="2"><img src="../imag/myphoto.jpg" alt="user dp"></td>
                                <td rowspan="2">Amir Khan</td>
                                <td rowspan="2">aamerpathan256@gmail.com</td>
                                <td>9860XXXXXX</td>
                                <td>Camgar colony, chikalthana, Auragabad</td>
                            </tr>
                            <tr>
                                <td>9860XXXXXX</td>
                                <td>Camgar colony, chikalthana, Auragabad</td>
                            </tr>
                        </tbody>

                        <caption>
                            <h2>Ragister User's</h2><br>
                        </caption>
                    </table>
                </div>
                <div class="NGOinfo-container" style="display: none;">
                    
                        <table border="1">
                            <thead>
                                <tr>
                                    <th>user dp</th>
                                    <th>name</th>
                                    <th colspan="2">contact detail</th>
                                    <th>woring</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="2"><img src="../imag/myphoto.jpg" alt="user dp"></td>
                                    <td><b>NGO: </b>helping hand</td>
                                    <td><i class="fas fa-mail-bulk"></i> aamerpathan256@gmail.com</td>
                                    <td><i class="fas fa-phone"></i> 9860XXXXXX</td>
                                    <td rowspan="2"> NGO Helping to childreans</td>
                                </tr>
                                <tr>
                                    <td><b>Admin: </b>Amir</td>
                                    <td><b>city: </b>Auragabad</td>
                                    <td><b>state: </b>Mharashtra</td>
                                </tr>
                                <tr>
                                    <td colspan="3"><b>Address: </b>camagr colony,chuikalthana,Auragabad</td>
                                    <td>

                                        <form>
                                            <div class="tg-button r" id="button-1">
                                                <input type="checkbox" class="checkbox">
                                                <div class="knobs"></div>
                                                <div class="layer"></div>
                                                <input type="hidden" name="value" value="Active">
                                            </div>
                                        </form>

                                    </td>
                                    <td><input type="submit" value="Delet"></td>
                                </tr>
                                <?php

                                for ($i = 1; $i <= $num; $i++) {
                                    $list = mysqli_fetch_array($status);

                                     
                                    if ($list['toggle'] == 'hide') {
                                        $btn = "checked";
                                    } else {
                                        $btn = "unchecked";
                                    }
                                ?>
                                    <tr>
                                        <td rowspan="2"><img src="../imag/<?php echo $list['profilephoto']; ?>" alt="user dp"></td>
                                        <td><b>NGO: </b><?php echo $list['ngo_name']; ?></td>
                                        <td><i class="fas fa-mail-bulk"></i> <?php echo $list['email']; ?></td>
                                        <td><i class="fas fa-phone"></i><?php echo $list['phone']; ?></td>
                                        <td rowspan="2"> <?php echo $list['about']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Admin: </b><?php echo $list['admin']; ?></td>
                                        <td><b>city: </b><?php echo $list['city']; ?></td>
                                        <td><b>state: </b><?php echo $list['state']; ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><b>Address: </b><?php echo $list['address']; ?></td>
                                        <td colspan="1"><b>url: </b><?php echo $list['url']; ?></td>
                                        <td>

                                            <form method="get">
                                                <div class="tg-button r" id="button-1">
                                                    <input type="checkbox" class="checkbox" value="<?php echo $list['id'];?>" id="check" <?php echo $btn?>>
                                                    <div class="knobs"></div>
                                                    <div class="layer"></div>
                                                    
                                                </div>
                                            </form>

                                        </td>
                                        <td><input type="submit" value="Delet"></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                            <caption align="top">
                                <h2>Ragister NGO</h2><br>
                            </caption>
                        </table>
                    
                </div>
            </div>
        </div>
    </section>
    <footer>
        <script src="../js/adminscript.js"></script>
        <script src="../js/jquery.js"></script>
        <script>
            document.querySelector(".NGOinfo-container").click();
        </script>
        <!-- <script>
            $(document).ready(function(){
                $('#check').change(function(){
                    if($(this).prop('checked')){
                        
                        $('#hidden_status').val('hide');
                        $.ajax({
                            url:"state.php",
                            method:"POST",
                            data:$(this).serialize(),
                            success:function(data){
                                if(data=='done'){
                                    $('#insert-data')[0].reset();
                                    alert("Data inserted");
                                }
                            }
                        });
                    }
                    else{
                        $('#hidden_status').val('show'); 
                    }
                });
            });
        
        </script> -->
        <script>
            $(document).ready(function(){
                $('.checkbox').click(function(){
                    var id = $(this).val();
                    var xhr = new XMLHttpRequest();
                    xhr.open("get","http://localhost/myproject/Page/state.php?id="+id,true);
                    xhr.send();
                    console.log(id);
                });
            });
        
        </script>
    </footer>
</body>

</html>