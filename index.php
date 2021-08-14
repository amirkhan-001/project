<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.css">
    <script src="js/jquery.js"></script>
    <script src="js/navscript.js"></script>
    <title>NGO Help</title>
</head>

<body>
    <header class="header">
        <div class="account">
            <a href="#" class="sign-ac active" onclick="document.getElementById('modal-wrapper1').style.display='block'">login</a>
        </div>
        <div class="nav-con">
            <nav class="navbar">
                <ul class="link-li">
                    <li class="lie lie-1"><a href="#" class="link-nav link-h active">Home</a></li>
                    <li class="lie lie-4"><a href="#about-section" class="link-nav link-a">About</a></li>
                    <li class="lie lie-5"><a href="#contact-section" class="link-nav link-c">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
<div class="welcom" id="welcom-section">
    <div id="modal-wrapper1" class="modal">
        <form class="modal-content" action="validation.php">
            <div class="imgcontainer">
                <span class="close" onclick="document.getElementById('modal-wrapper1').style.display='none'">&times;</span>
                <img src="imag/designlogo.jpg" alt="none" class="avatar">
                <h1 style="text-align: center;">welcom to NGO help</h1>
            </div>
            <div class="container">
                <input type="text" name="username" placeholder="User Name" id="">
                <input type="password" name="password" placeholder="Password" id="">
                <input type="submit" value="Login" class="login">
                <input type="checkbox" style="margin: 26px 30px" name="" id="rem"> Remaber ME
                <a href="a" style="text-decoration: none; float: right; margin-right: 24px; margin-top: 26px;">For gote
                            password</a>
            </div>
        </form>
    </div>
    <div id="modal-wrapper2" class="modal">
        <form class="modal-content" action="Page/sinup.php" method="post" enctype="multipart/form-data">
            <div class="imgcontainer">
                <span class="close" onclick="document.getElementById('modal-wrapper2').style.display='none'">&times;</span>
                <img src="imag/designlogo.jpg" alt="none" class="avatar" id="defualtImag">
                <img src="" alt="privew imag" class="privew-imag" id="privewImag">
                <h1 style="text-align: center;">welcom to NGO help</h1>
            </div>
            <div class="container">
                <input type="text" name="uname" placeholder="User Name" id="" required>
                <input type="text" name="email" placeholder="Email" id="" required>
                <input type="text" name="phnum" placeholder="Phone Number" id="" required>
                <input type="password" name="password" placeholder="Password" id="" required>
                <input type="password" name="password2" placeholder="  Re Enter Password" id="" required>
                <input type="submit" name="submit" value="Login" class="login">
            </div>
        </form>
    </div>
    <div class="masseg">
        <h1 class="welcom-masseg">Let's fight Together</h1>
        <h5 class="intro-masseg">
            we will help you to finding nearst NGO<br> so let's sign up now
        </h5>
    </div>
    <div class="button">
        <a href="#" class="signup" type="button" onclick="document.getElementById('modal-wrapper2').style.display='block'">Sign Up</a>
        <a href="Page/Ragister.html" class="ragister">Ragister NGO</a>
    </div>
</div>
<div class="about" id="about-section">
    <div class="heading">
        <h1 class="about-h">About Us</h1>
    </div>
    <div class="content-about">
        <div class="imag-contenr">
            <img src="imag/img3.jpg" alt="" srcset="">
        </div>
        <div class="about-text">
            <h2 class="disc-about">
                we well help you to find your near by NGO <br> and NGO to help more piple, we help you bothe <br> to save time and effor, if you finde NGO thet<br> help you or you want help somwe one so you are <br> at rihte plase.
                <!--we helping you to find NGO's--><br>
            </h2>
        </div>
    </div>
</div>
<div class="team">
    <div class="heading">
        <h1 class="about-h">Oure Team</h1>
    </div>
    <div class="team-info">
        <div class="contenar">
            <div class="team-img">
                <img src="imag/myphoto.jpg" alt="" sizes="" srcset="">
            </div>
            <div class="m-name">
                <div class="txt">
                    <h2>Amir Khan</h2>
                    <h5>develpar</h5>
                </div>
            </div>
        </div>
        <div class="contenar">
            <div class="team-img">
                <img src="imag/img1.jpg" alt="" sizes="" srcset="">
            </div>
            <div class="m-name">
                <div class="txt">
                    <h2>Amir Khan</h2>
                    <h5>develpar</h5>
                </div>
            </div>
        </div>
        <div class="contenar">
            <div class="team-img">
                <img src="imag/img1.jpg" alt="" sizes="" srcset="">
            </div>
            <div class="m-name">
                <div class="txt">
                    <h2>Amir Khan</h2>
                    <h5>develpar</h5>
                </div>
            </div>
        </div>
    </div>


</div>
<div class="contact" id="contact-section">
    <div class="heading">
        <h1>Contact Us</h1>
    </div>
    <div class="con-body">
        <div class="con-ar co-ph">
            <div class="con-icon">
                <span class="icon-ph"><i class="fas fa-phone"></i></span>
            </div>
            <div class="con-text">
                <div class="in-txt">
                    <h4>+91 9860 1582 91</h4>
                    <h4>+91 9860 1582 91</h4>
                </div>
            </div>
        </div>
        <div class="con-ar co-em">
            <div class="con-icon">
                <span class="icon-ph"><i class="fas fa-mail-bulk"></i></span>
            </div>
            <div class="con-text">
                <div class="in-txt">
                    <h4>aamerpathan256@gmail.com</h4>
                </div>
            </div>
        </div>
        <div class="con-ar co-ad">
            <div class="con-icon">
                <span class="icon-ph"><i class="fas fa-home"></i></span>
            </div>
            <div class="con-text">
                <div class="in-txt">
                    <h4>| kamgar chowk,cidco<br> aurangabad - 431005</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="form-div">
            <form action="contact.php" class="contact-me">
                <table class="con-f">
                    <tr class="f-row">
                        <td class="phone-c"><input type="text" name="phnum" id="ph" class="phnum-f"></td>
                        <td class="email-c"><input type="email" name="email" id="em" class="email-f"></td>
                    </tr>
                    <tr class="s-row">
                        <td class="subject-c"><input type="text" name="name" id="name" class="name"></td>
                    </tr>
                    <tr class="t-row">
                        <td class="describ-c"><textarea name="masseg" id="ms" class="massef" cols="30" rows="10"></textarea></td>
                    </tr>
                    <tr class="sub-row">
                        <td class="sub-c"><input type="submit" value="Submit"></td>
                    </tr>
                </table>
            </form>
        </div> -->
</div>
<footer class="footer">
    <div class="fo-con">
        <p class="copyright">This site create by <span>MIT</span> Student</p>
    </div>

    <script src="js/jscripte.js"></script>
</footer>
</body>

</html>