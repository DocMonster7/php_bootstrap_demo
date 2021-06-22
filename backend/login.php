<?php

$message = "Connecting DB";

require_once "..\config\db_config.php";

$email = $password = "";
$email_err = $password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty(trim($_POST["email"]))&&empty(trim($_POST['password']))){
        die("Please enter a email or password.");
        $email_err = "err";
    } else{
       $email=$_POST["email"];
       $password=$_POST['password'];
       $sql = "SELECT password_hash,uuid FROM `user-master` WHERE email = '$email' ";
        $result =mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($result) >0){  
            while($row = mysqli_fetch_assoc($result)) {
               if(password_verify($password,$row['password_hash'])){
                session_start();            
                // Store data in session variables
                $_SESSION["loggedin"] = true;
                $_SESSION["uuid"] = $row['uuid'];
                $_SESSION["email"] = $email;
                
                header('Location: ../details.php');
               }else{
                die("Incorrect Password");
               }
              }
        }else{

            die("Incorrect Email");
        }
    }
    mysqli_close($conn);
}

?>