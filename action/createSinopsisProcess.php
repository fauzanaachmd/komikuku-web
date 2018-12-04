<?php

include 'connection.php';
include '../constant.php';

$genre = $_POST['genre'];
$judul = $_POST['nama'];
$sinopsis = $_POST['sinopsis'];
$user_id = $_SESSION['user_id'];

try {
    $sql = "INSERT INTO serial (nama, genre, sinopsis, user_id) VALUES ('$judul', '$genre', '$sinopsis', '$user_id')";
    // use exec() because no results are returned
    $conn->exec($sql);

    header('Location: ' . BASE_URL . '/publish');
}catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}