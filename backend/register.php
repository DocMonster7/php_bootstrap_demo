<?php
$message = "Connecting DB";
echo $message;
// Include config file
require_once "..\config\db_config.php";
 
// Define variables and initialize with empty values
$email = $password = $confirm_password = "";
$email_err = $password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate email
    if(empty(trim($_POST["email"]))){
        die("Please enter a email.");
        $email_err = "err";
    } else{
        $email = $_POST["email"];
        // Prepare a select statement
        $sql = "SELECT uuid FROM `user-master` WHERE email = '$email' ";
        $result =mysqli_query($conn, $sql);
        // $num = mysqli_num_rows($result);
        // echo "
        //         <script>
        //         console.log('$num');
        //         </script>            
        //     ";
        if(mysqli_num_rows($result) > 0){
            die('User Already Exists');
            $email_err = "err";
        }
        
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        die("Please enter a password.");
        $password_err = "err";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "err";
        die("Password must have atleast 6 characters.");
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        die("Please confirm password.");     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            die("Password did not match.");
        }
    }
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
//     BEGIN 
//     SET NEW.user_id = UUID(); 
// END
        // Prepare an insert statement
         $sql = "INSERT INTO `user-master` (email, password_hash) VALUES ('$email', '$hashed_password')";
         if (mysqli_query($conn, $sql)) {
            echo "
                <script>
                 alert(\"Account Successfully Created \n Please Login \")
                </script>            
           ";
             header('Location: ../index.php');
          } else {
            die("Error: " . $sql . "<br>" . mysqli_error($conn));
          }
        
          
        mysqli_close($conn);
       
}
