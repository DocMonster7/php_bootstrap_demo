<?php
session_start();
// mysqli_close($conn);
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false){
    header("location:index.php");
    exit;
}
require('components\head.inc.php');
include('components\navbar_logged.inv.php');


?>

<div class="container">
<?php 
$message = "Connecting DB";
// echo $message;
// Include config file
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eyebase";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$uuid =$_SESSION['uuid'];
$sql = "SELECT name from user_personal_details where uuid='$uuid'";
$result =mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
    include('components/details.inc.php');
}else{
    header('Location: edit.php');
}
mysqli_close($conn);
?>



</div>





<?php require('components\footer.inc.php'); ?>