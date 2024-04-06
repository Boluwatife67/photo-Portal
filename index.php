<?php
        session_start();
        include ('db_config.php');
        header('Cache-Control: no-cache, no-store, must-revalidate');
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Funke @ 40 | Share the love</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container">
        <div class="parent">
            <div class="seven-master-div">
                <div class="real-div">
    
                    <div class="real-div-sub activee">
                        <div class="seven-master-div-sub">
                            <div class="seven-swiper">
                               <img src="img/IMG-20240324-WA0011.jpg" alt="Hostel">
                            </div>
                        </div>
                    </div>
    
                    <div class="real-div-sub">
                        <div class="seven-master-div-sub">
                            <div class="seven-swiper">
                               <img src="img/IMG-20240324-WA0003.jpg" alt="Hostel">
                            </div>
                        </div>
                    </div>
    
                    <div class="real-div-sub">
                        <div class="seven-master-div-sub">
                            <div class="seven-swiper">
                               <img src="img/IMG-20240324-WA0004.jpg" alt="Hostel">
                            </div>
                        </div>
                    </div>
    
                    <div class="real-div-sub">
                        <div class="seven-master-div-sub">
                            <div class="seven-swiper">
                               <img src="img/IMG-20240324-WA0005.jpg" alt="Hostel">
                            </div>
                        </div>
                    </div>
    
                    <div class="real-div-sub">
                        <div class="seven-master-div-sub">
                            <div class="seven-swiper">
                               <img src="img/IMG-20240324-WA0006.jpg" alt="Hostel">
                            </div>
                        </div>
                    </div>
    
                    <div class="real-div-sub">
                        <div class="seven-master-div-sub">
                            <div class="seven-swiper">
                               <img src="img/IMG-20240324-WA0007.jpg" alt="Hostel">
                            </div>
                        </div>
                    </div>
    
                    <div class="real-div-sub">
                        <div class="seven-master-div-sub">
                            <div class="seven-swiper">
                               <img src="img/IMG-20240324-WA0008.jpg" alt="Hostel">
                            </div>
                        </div>
                    </div>
    
                    <div class="real-div-sub">
                        <div class="seven-master-div-sub">
                            <div class="seven-swiper">
                               <img src="img/IMG-20240324-WA0009.jpg" alt="Hostel">
                            </div>
                        </div>
                    </div>
                   
                    <div class="real-div-sub">
                        <div class="seven-master-div-sub">
                            <div class="seven-swiper">
                               <img src="img/IMG-20240324-WA0002.jpg" alt="Hostel">
                            </div>
                        </div>
                    </div>
    
    
                </div>
            </div>
            <div class="seven-dot">
                <div class="dot activee" attr="0" onclick="switchTest(this)"></div>
                <div class="dot" attr="1" onclick="switchTest(this)"></div>
                <div class="dot" attr="2" onclick="switchTest(this)"></div>
                <div class="dot" attr="3" onclick="switchTest(this)"></div>
                <div class="dot" attr="4" onclick="switchTest(this)"></div>
                <div class="dot" attr="5" onclick="switchTest(this)"></div>
                <div class="dot" attr="6" onclick="switchTest(this)"></div>
                <div class="dot" attr="7" onclick="switchTest(this)"></div>
                <div class="dot" attr="8" onclick="switchTest(this)"></div>
            </div>
        </div>
        <div class="second-parent">
            <div class="second-parent-sub">
                <div class="second-parent-sub-logo">
                    <img src="img/Funke 40 logo.png" alt="birthday-logo">
                </div>
                <div class="second-parent-sub-log">
                    <p>Log In</p>
                    <h1><i class='bx bxs-info-circle'></i> Kindly check the FIND YOUR SIT chart and enter your name exactly the same way it's written there. <a href="img/SEAT CHART.pdf" download="Funke SIT CHART" class="logme">Click Here to download SIT CHART</a>  </h1>
                    <form action="login_check.php" method="POST">
                        <input type="text" id="user" name="guestname" placeholder="Guest Name"/>
                        <?php
                                if (isset($_SESSION['message'])) {
                                    echo '<h2 class="error">' . htmlspecialchars($_SESSION['message']) . '</h2>';
                                    unset($_SESSION['message']);
                                }
                                ?>
                        <button type="submit">Enter <i class='bx bxs-right-arrow-alt'></i></button>
                    </form>
                    <h1>Can't Log in? <a href="https://wa.me/+2348123333375" class="logme">Click Here</a> </h1>
                </div>
            </div>
    
        </div>
    </div>
    <div class="package">
            <div class="first-package">
                <p>Packaged By:</p>
            </div>
            <div class="Package-img">
               <a href="https://eventandmoreinc.com"> <img src="img\EVENTS AND MORE INC LOGO2.png"></a>
            </div>
            <div class="buttons">
                <button class="btn1" onclick="window.location.href='https://wa.me/+12317426037'"><i class="bi bi-whatsapp"></i> Chat on Whatsapp</button>
                <button class="btn2" onclick="window.location.href='https://www.instagram.com/theeventandmore/'"><i class="bi bi-instagram"></i> View on Instagram</button>
            </div>
    <div class="footer">
        <p class="copyy">&copy;2024 | Developed by <a class="btm" href="https://www.instagram.com/principal_concepts">Principal Concepts</a></p>
    </div>
    <script src="main.js"></script>
</body>
</html>