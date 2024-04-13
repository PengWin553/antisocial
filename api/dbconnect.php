<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "antisocial_db";

try {
    $connection = new PDO("mysql:host=$servername;
    dbname=$database",$username,$password);
    $connection->setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);
}catch (PDOException $th) {
    echo "Connection Failed:" .$th->getMessage();
}
?>