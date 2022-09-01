<?php
   /*include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['pswd']); 
      
      $sql = "SELECT id FROM users WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: index.html");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }*/
  /* if(isset($_POST["login"]))  
   {  
        if(empty($_POST["username"]) || empty($_POST["password"]))  
        {  
             $message = '<label>All fields are required</label>';  
        }  
        else  
        {  
             $query = "SELECT * FROM users WHERE username = :username AND password = :password";  
             $statement = $connect->prepare($query);  
             $statement->execute(  
                  array(  
                       'username'     =>     $_POST["username"],  
                       'password'     =>     $_POST["password"],  
                  )  
             );  
             $count = $statement->rowCount();  
             if($count > 0)  
             {  
                  $_SESSION["username"] = $_POST["username"];  
                  header("location: index.html");  
             }  
             else  
             {  
                  $message = '<label>Wrong Data</label>';  
             }  
        }  
   }  */


   /*catch(PDOException $error)  
{  
   $message = $error->getMessage();  
} */

//session_destroy(); 

session_start(); // Starting Session
define('DB_SERVER', "localhost");
define('DB_USER', "root");
define('DB_PASSWORD', "");
define('DB_DATABASE', "website");
define('DB_DRIVER', "mysql");
$error = ''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    } else {

        //assing text box value to variable 
        $username = $_POST['username'];
        $password = $_POST['password'];

        try {
            //Establish DB Connection
            $conn = new PDO(DB_DRIVER . ":dbname=" . DB_DATABASE . ";host=" . DB_SERVER, DB_USER, DB_PASSWORD);
           
            $query = "select * from users where password=? AND username=?";
            $stmt = $conn->prepare($query);
            //bind username & password to sql quary and execute the quary
            $stmt->bindParam(1, $password);
            $stmt->bindParam(2, $username);
            $stmt->execute();
            $result = $stmt->fetchAll();
            //get the count of the out put rows from the exacuted quary
            $row = $stmt->rowCount();

            //assing the Log in user to session
            if ($row == 1) {
                $_SESSION['login_user'] = $username; // Initializing Session
                header("location: profile.php"); // Redirecting To Other Page
                //echo 1;
            } else {
                $error = "Username or Password is invalid";
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }





        $conn = null; // Closing Connection
    }
}
?>  
