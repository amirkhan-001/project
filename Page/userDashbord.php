<?php
session_start();
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
                    <li class="lie lie-1"><a href="home.php" class="link-nav link-h active">Home</a></li>
                    <li class="lie lie-2"><a href="list.html" class="link-nav link-l">List</a></li>
                    <li class="lie lie-4"><a href="#about-section" class="link-nav link-a">About</a></li>
                    <li class="lie lie-5"><a href="#contact-section" class="link-nav link-c">Contact</a></li>
                    <li class="lie lie-3"><a href="#" class="link-nav link-d">Dashbord</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="ragister-body" style="background-image: url(../imag/img2.jpg); background-size: cover;">
        <div class="ud-pg-contenra">
            <form action="updateUserinfo.php">
                <div class="itme-contenra">
                    <div class="leftside">
                        <div class="tope">
                            <div class="profile-ph">
                                <div class="image-preview" id="imagePreview" style="margin: 0; height: 200px; width: 200px;">
                                    <img src="" alt="image preview" class="image-preview__image">
                                    <span class="image-preview__defualt-text">Image Preview</span>
                                </div>
                            </div>
                        </div>
                        <div class="bottum">
                            <div class="name">
                                <input type="text" name="username" id="username" class="user-name" placeholder="name">
                            </div>
                            <div class="describe">
                                <input type="text" name="about" id="about" class="thoute" placeholder="about">
                            </div>
                        </div>
                    </div>
                    <div class="rightside">
                        <input type="file" name="dp" id="pro-ph">
                        <input type="text" name="" id="" class="phone-number" placeholder="phone number">
                        <input type="text" name="" id="" class="phone-number" placeholder="phone number(optinal)">
                        <input type="email" name="" id="" class="email-id" placeholder="email id">
                        <input type="text" name="adress" id="adress" placeholder="address">
                        <input type="text" name="adress" id="adress" placeholder="address(optinal)">
                    </div>
                    <div class="botum-btn">
                        <input type="submit" value="Save">
                    </div>
                </div>

            </form>

        </div>
    </div>

    <footer class="footer">
        <div class="fo-con">
            <p class="copyright">This site create by <span>MIT</span> Student</p>
        </div>
        <script src="../js/jscripte.js"></script>
    </footer>
</body>

</html>