<?php
session_start();
include ('db_config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['guestname'];

    $sql = "SELECT * FROM guest WHERE guest_name='$name'";
    $result = mysqli_query($data, $sql);
    $row = mysqli_fetch_array($result);

    if (mysqli_num_rows($result) == 1 && $row['type'] == "guest") {
        $_SESSION['message'] = "Login Successfully";
        $_SESSION['user'] = $row; // Store the user data in the session

        
        header("location:dashboard.php");
    } else {
        $_SESSION['message'] = "You're not a guest!";
        header("location:index.php");
    }
}
?>