<?php
// session_start();
$message = "Connecting DB";
// echo $message;
// Include config file
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eyebase";
// Create connection
// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$uuid =$_SESSION['uuid'];
$sql = "SELECT name from user_personal_details where uuid='$uuid'";
$result =mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
    include('../components/details.inc.php');
}else{
    header('Location: edit.php');
}


?>