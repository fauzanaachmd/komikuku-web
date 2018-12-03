<?php

include 'connection.php';
include '../constant.php';

$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$stmt = $conn->prepare("SELECT nama, email, password, user_id FROM User WHERE email='$email'");
$stmt->execute();

$result = $stmt->fetchAll();

if (count($result) == 1) {
    if (password_verify($_POST['password'], $result[0][password])) {
        $_SESSION['is_login'] = true;
        $_SESSION['nama'] = $result[0]['nama'];
        $_SESSION['email'] = $result[0]['email'];
        $_SESSION['user_id'] = $result[0]['user_id'];

        header('Location: ' . BASE_URL);
    } else {
        echo 'beda';
    }
} else {
    header('Location: ' . BASE_URL . '/sign-in?register=noEmail');
}

print_r($result);
//print_r($password);