<?php

include_once "connection.php";
include_once "../constant.php";

$serial_id = $_POST['serialId'];
$file = $_FILES['file']['name'];
$name = $_POST['name'];
$newfilename = urlencode($file);

// CEK KALAU ADA UBAH FOTO PROFIL, JIKA ADA MAKA UPLOAD FOTO PROFILE DULU

if($_FILES['file']['name'] != '') {
    $target_dir = "../images/eps/";
    $target_file = $target_dir . $newfilename;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["file"]["tmp_name"]);

// Allow certain file formats
    if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg"
        || $imageFileType == "gif" ) {
        if($check !== false) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                $uploadOk = 1;

                try {
                    $sql = "INSERT INTO episode (name, release_date, serial_id, image, read_count) VALUES ('$name', CURRENT_DATE, $serial_id, '$newfilename', 0)";
                    // use exec() because no results are returned
                    $conn->exec($sql);

                }catch (PDOException $e) {
                    echo $sql . "<br>" . $e->getMessage();exit;
                }

                header('Location: ' . BASE_URL . '/comic/' . $serial_id);

            } else {
                echo "Sorry, there was an error uploading your file.";exit;
            }
        } else {
            echo "File is not an image.";exit;
            $uploadOk = 0;
        }
    }else{
        echo $imageFileType;
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
        exit;
    }
}