<?php
// code for database connexion with PDO

$serverName = "localhost";
$userName = "root";
$password = "";

try {
    //code...
    $conn = new PDO("mysql:host=$serverName;dbname=tp1_bd", $userName, $password);
    //set the PDO error mode to exeption
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database connected successfuly !";
} catch (PDOException $e) {
    //throw $e;
    echo "Connection failed... " . $e->getMessage();
}

?>