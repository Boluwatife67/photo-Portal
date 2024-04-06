<?php
session_start();
include ('db_config.php');

if (!isset($_SESSION['message']) || $_SESSION['message'] != "Login Successfully") {
    header("location:index.php");
}

// Retrieve user data from the session
$user = $_SESSION['user'];

$filtUser= $user['guest_name'];
$queryy = "SELECT * FROM uploads WHERE guest_name = '$filtUser' ORDER BY date_time DESC";

$resultt = mysqli_query($data, $queryy);

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
    <div class="dashboard-parent">
        <div class="dashboard-header">
            <img src="img/Funke 40 logo.png">
        </div>
        <div class="dashboard-header-fake"></div>
        <div class="dashboard-details">
            <div class="dashboard-details-welcome">
                <h1>Welcome,<br><span><?php echo htmlspecialchars($user['guest_name']); ?></span></h1>
                <p>Table - <span><?php echo htmlspecialchars($user['table_name']); ?></p>
            </div>
            <div class="dashboard-details-welcome-log">
            <button onclick="window.location.href='logout.php'" class="subbtn2">Log Out <i class='bx bx-log-in'></i></button>
                <button onclick="window.location.href='view.php'" class="subbtn"><i class='bx bx-photo-album'></i> All Photos</button>
            </div>
        </div>
        <div class="Gallery">
            <div class="Upload" onclick="window.location.href='dashboard.php'"><i class='bx bx-upload'></i> Upload</div>
            <h2>My Photos</h2>
            <div class="Gallery-sub">
            <?php if ($resultt->num_rows > 0) {?>
                <div class="Galleryimages">
                    <?php while($image = $resultt->fetch_assoc()) {?>
                        <?php $tid = $image['id']; ?>
                        <img src="uploaded/<?=$image["image_name"]?>" alt="Image" class="thumbnail" id="image_<?=$tid?>" onclick="openModal('image_<?=$tid?>')">
                    <?php }?>
                </div>
            <?php }?>
            </div>
        </div>
          <!-- The Modal -->
<div id="myModal" class="mmodal">
  <span class="close" onclick="closeModal()">&times;</span>
  <img class="modal-content" id="img01">
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
    </div>
    <script src="auto_logout.js"></script>
    <script>
       // Open the modal
    function openModal(modalId) {
        var modal = document.getElementById('myModal');
        var modalImg = document.getElementById('img01');
        var img = document.getElementById(modalId);
        modal.style.display = "flex";
        modalImg.src = img.src;
    }

    // Close the modal
    function closeModal() {
        var modal = document.getElementById('myModal');
        modal.style.display = "none";
    }

    </script>
</body>
</html>