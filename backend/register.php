<?php
$message = "Connecting DB";
echo $message;
// Include config file
require_once "..\config\db_config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        die("Please enter a username.");
        $username_err = "err";
    } else{
        $username = $_POST["username"];
        // Prepare a select statement
        $sql = "SELECT user_id FROM users WHERE user_name = '$username' ";
        $result =mysqli_query($conn, $sql);
        // $num = mysqli_num_rows($result);
        // echo "
        //         <script>
        //         console.log('$num');
        //         </script>            
        //     ";
        if(mysqli_num_rows($result) > 0){
            die('User Already Exists');
            $username_err = "err";
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
    
        // Prepare an insert statement
         $sql = "INSERT INTO users (user_name, password_hash,admin) VALUES ('$username', '$hashed_password','no')";
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
        // if ($conn->query($sql) === TRUE) {
        //     echo "
        //         <script>
        //         alert(\"Account Successfully Created\")
        //         </script>            
        //     ";
        //     // header('Location: ../index.php');
        //   } else {
        //     echo "Error: " . $sql . "<br>" . $conn->error;
        //   }
          
        mysqli_close($conn);
       
}

?>
