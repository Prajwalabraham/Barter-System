<?php
    $con = mysqli_connect("127.0.0.1","root","","website");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }


/*$host = "127.0.0.1";  
$username = "root";  
$password = "";  
$database = "website";  
$message = "";  

try{
    $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
     $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
}
catch(PDOException $error)  
{  
     $message = $error->getMessage();  
}  */
?>