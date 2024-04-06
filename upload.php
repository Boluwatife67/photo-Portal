<?php
session_start();
include ('db_config.php');

$user = $_SESSION['user'];

$guestReal = $user['guest_name']; //Guests name from session

if (isset($_POST['upload'])){

    $images = $_FILES['images'];

    $no_of_imgs = count($images['name']);

    for ($i=0; $i < $no_of_imgs; $i++) { 
        $image_name  = $images['name'][$i];
        $tmp_name    = $images['tmp_name'][$i];
        $error       = $images['error'][$i];

        if($error === 0){

            $img_ex = pathinfo($image_name, PATHINFO_EXTENSION);

            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array('jpg', 'jpeg', 'png', 'gif');

            if(in_array($img_ex_lc, $allowed_exs)) {

                $new_img_name = uniqid('IMG-', true).'.'.$img_ex_lc;
                $image_upload_path = 'uploaded/'.$new_img_name;

                $query = "INSERT INTO uploads (guest_name, image_name, usertype) VALUES ('$guestReal', ?, 'guest')";

                $stmt = $data->prepare($query);
                $stmt->execute([$new_img_name]);

                move_uploaded_file($tmp_name, $image_upload_path);

                $em ="Uploaded Successfully";
                header("Location: dashboard.php?error=$em");

            } else{
                $em ="Invalid file type";

                header("Location: dashboard.php?error=$em");
            }
        }else{
            $em ="Unknown error occurred while uploading";

            header("Location: dashboard.php?error=$em");
        };
    };
};
?>