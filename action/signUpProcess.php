<?php
include 'connection.php';
include '../constant.php';

$email = $_POST['email'];
$nama = $_POST['fullname'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$stmt = $conn->prepare("SELECT nama, email, password FROM User");
$stmt->execute();

// set the resulting array to associative
$result = $stmt->fetchAll();

if($email == $result[0][1]) {
    header('Location: ' . BASE_URL . '/sign-up?register=emailNotAvailable');
}else{
    try {
        $sql = "INSERT INTO User (email, nama, password, user_level) VALUES ('$email', '$nama', '$password', 'reader')";
        // use exec() because no results are returned
        $conn->exec($sql);

        header('Location: ' . BASE_URL . '/sign-in?register=success');
    }catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}