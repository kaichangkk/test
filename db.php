<?php
$servername = "localhost";
$username = "root";
$password = "";
try {
    $con = new PDO("mysql:host = {$servername};dbname=hotel;charset=utf8",$username,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   // echo"connected.Successfully";
}
    catch(PDOException $e) {
        echo "Connection failed!" . $e->getMessage();
}
?>