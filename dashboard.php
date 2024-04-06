<?php
session_start();
include ('db_config.php');
header('Cache-Control: no-cache, no-store, must-revalidate');

if (!isset($_SESSION['message']) || $_SESSION['message'] != "Login Successfully") {
    header("location:index.php");
}

// Retrieve user data from the session
$user = $_SESSION['user'];

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
    <div class="real-body">
        <div class="dashboard-parent">
            <div class="dashboard-header">
                <img src="img/Funke 40 logo.png">
            </div>
            <div class="dashboard-header-fake"></div>
            <div class="dashboard-header2">
                <div class="view-gallery" id="btn-open">
                    <i class='bx bxs-movie-play'></i> View Gallery
                </div>
            </div>
            <div class="dashboard-details">
                <div class="dashboard-details-welcome">
                    <h1>Welcome,<br><span><?php echo htmlspecialchars($user['guest_name']); ?></span></h1>
                    <p>Table - <span><?php echo htmlspecialchars($user['table_name']); ?></span></p>
                </div>
                <div class="dashboard-details-welcome-log">
                    <button onclick="window.location.href='logout.php'" class="subbtn2">Log Out <i class='bx bx-log-in'></i></button>
                </div>
            </div>
            <div class="upload-cont">
                <div class="real-upload">
                    <h2>Share Your Moment</h2>
                    <form method="POST" action="upload.php" enctype="multipart/form-data" id="realForm">
                        <div class="real-form_container">
                        <input type="file" id="file_input" name="images[]" multiple>
                        <label for="file_input"><i class='bx bx-upload'></i> &nbsp; Choose FIles To Upload</label>
                        <div id="no_of_files">No Files Choosen</div>
                        <ul id="file_list"></ul>
                        <?php
                        if(isset($_GET['error'])){
                            echo "<p class='errorn'>";
                                echo htmlspecialchars($_GET['error']);
                            echo "</p>";
                        }
                    ?>
                        <!-- <button class="btn" type="submit" name="upload">Upload</button> -->
                        <button id="btn-openn">Upload</button>
                        </div>
                    </form>
                    
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

        </div>
            <div class="footer">
                <p class="copyy">&copy;2024 | Developed by <a class="btm" href="https://www.instagram.com/principal_concepts">Principal Concepts</a></p>
            </div>
        </div>
    
        
        <section class="modal hidden">
            <div class="flex">
                <img src="img/IMG-20240324-WA0003.jpg" width="60px" height="60px" alt="user" style="border-radius: 50%;" />
                <button class="btn-close">⨉</button>
            </div>
            <div>
                <h3>View Gallery</h3>
            </div>
    
            <button class="btn" onclick="window.location.href='myPhotos.php'">My Photos</button>
            <button class="btn" onclick="window.location.href='view.php'">All Uploads</button>
        </section>
    
        <div class="overlay hidden"></div>

        <section class="modal hidden modal2">
            <div class="flex">
                <img src="img/IMG-20240324-WA0003.jpg" width="60px" height="60px" alt="user" style="border-radius: 50%;" />
                <button class="btn-closee">⨉</button>
            </div>
            <div>
                <h3>Confirm Upload</h3>
            </div>
            <button class="btn" type="submit" name="upload" id="realsub" form="realForm">Upload</button>
        </section>
    
        <div class="overlayy hidden"></div>
    </div>
    <script src="modal.js"></script>
    <script src="modaltwo.js"></script>
    <script src="fileup.js"></script>
</body>
</html>
