<?php

include 'connection.php';
include '../constant.php';

$user_id = $_SESSION['user_id'];

$password = password_hash($_POST['password'], PASSWORD_DEFAULT);


$stmt = $conn->prepare("SELECT nama, email, password, user_id FROM user WHERE user_id=$user_id");
$stmt->execute();

$result = $stmt->fetch();

if (password_verify($_POST['oldPassword'], $result['password'])) {

    try {
        $sql = "UPDATE user SET password='$password' WHERE user_id=$user_id";
        // use exec() because no results are returned
        $conn->exec($sql);

        header('Location: ' . BASE_URL . '/profile?message=success');
    }catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
} else {
    header('Location: ' . BASE_URL . '/profile?message=failed');
}