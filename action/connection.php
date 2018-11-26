<?php

$servername = 'localhost';
$username = 'localhost';
$password="";
$dbname = 'komikuku_db';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo 'Koneksi suskses';

}catch(PDOException $e) {
    echo 'Koneksi gagal: '. $e->getMessage();
}