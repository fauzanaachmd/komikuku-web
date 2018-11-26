<?php

$servername = '127.0.0.1';
$username = 'root';
$password= '1234';
$dbname = 'komikuku_db';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo 'Koneksi suskses';

}catch(PDOException $e) {
    echo 'Koneksi gagal: '. $e->getMessage();
}