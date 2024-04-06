<?php
session_start();
// session_destroy();
$_SESSION['message'] = "Logout Successfully";

header("location:index.php");
exit();
?>