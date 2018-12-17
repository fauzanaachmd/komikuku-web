<?php

include 'connection.php';
include '../constant.php';

$id = $_GET['id'];

try {
    $sql = "DELETE FROM episode WHERE serial_id = $id";
    // use exec() because no results are returned
    $conn->exec($sql);

    $sql = "DELETE FROM serial WHERE serial_id = $id";
    // use exec() because no results are returned
    $conn->exec($sql);

    header('Location: ' . BASE_URL . '/publish');

}catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}