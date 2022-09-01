<?php

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$database = "website";

// Create connection
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $dbusername, $dbpassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {    
    echo "Connection failed: " . $e->getMessage();
    }
?>