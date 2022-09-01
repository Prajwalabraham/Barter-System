<?php
 include("config.php");
 session_start();
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];


	 $sql= "INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$username','$email','$password')";
	 $conn->exec($sql);
	 header('Location: index.php');
  exit;
?>