<?php

include 'connection.php';
include '../constant.php';

$genre = $_POST['genre'];
$judul = $_POST['nama'];
$sinopsis = $_POST['sinopsis'];
$user_id = $_SESSION['user_id'];

$target_dir = "../images/eps/";
$target_file = $target_dir . basename($_FILES["thumbnail"]["name"]);
$filename = basename($_FILES["thumbnail"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
$check = getimagesize($_FILES["thumbnail"]["tmp_name"]);

// Allow certain file formats
if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg"
    || $imageFileType == "gif" ) {
    if($check !== false) {
        if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) {
            $uploadOk = 1;

            try {
                $sql = "INSERT INTO serial (nama, genre, sinopsis, user_id, thumbnail) VALUES ('$judul', '$genre', '$sinopsis', '$user_id', '$filename')";
                // use exec() because no results are returned
                $conn->exec($sql);

                header('Location: ' . BASE_URL . '/publish');
            }catch (PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }

        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}else{
    echo $imageFileType;
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}