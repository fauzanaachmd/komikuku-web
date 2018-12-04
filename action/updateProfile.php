<?php
include 'connection.php';
include '../constant.php';

$user_id = $_SESSION['user_id'];
$email = $_POST['email'];
$nama = $_POST['fullname'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$stmt = $conn->prepare("SELECT nama, email, password, user_id FROM User WHERE user_id=$user_id");
$stmt->execute();

$result = $stmt->fetch();

// CEK KALAU ADA UBAH FOTO PROFIL, JIKA ADA MAKA UPLOAD FOTO PROFILE DULU

if($_FILES['photo']['name'] != '') {
    $target_dir = "../images/user/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    $filename = basename($_FILES["photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["photo"]["tmp_name"]);

// Allow certain file formats
    if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg"
        || $imageFileType == "gif" ) {
        if($check !== false) {
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
                $uploadOk = 1;

                try {
                    $sql = "UPDATE user SET photo='$filename' WHERE user_id=$user_id";
                    // use exec() because no results are returned
                    $conn->exec($sql);

                }catch (PDOException $e) {
                    echo $sql . "<br>" . $e->getMessage();exit;
                }

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

try {
    $sql = "UPDATE user SET nama='$nama', email='$email' WHERE user_id=$user_id";
    // use exec() because no results are returned
    $conn->exec($sql);

    header('Location: ' . BASE_URL . '/profile?message=success');
}catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}