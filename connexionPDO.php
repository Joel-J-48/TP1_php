<?php
// code for database connexion with PDO

//connection setting
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "tp1_bd";

try {
    //PDO connection
    $conn = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
    //set the PDO error mode to exeption
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    echo "Database connected successfuly !";
} catch (PDOException $e) {
    //throw $e;
    echo "Connection failed... " . $e->getMessage();
}

?>