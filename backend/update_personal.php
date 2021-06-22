<?php
session_start();
$message = "Connecting DB";
require_once "..\config\db_config.php";

$name = $_POST['fname']." ".$_POST['lname'];
$gender = $_POST['gender'];
$dob=$_POST['dob'];
$add = $_POST['add1']." ".$_POST['add2'];
$phone = $_POST['phone'];
$zip=$_POST['zip'];
$uuid = $_SESSION['uuid'];

$sqlcheck = "SELECT name from user_personal_details where uuid='$uuid' ";

$result =mysqli_query($conn, $sqlcheck);
        if(mysqli_num_rows($result) > 0){
          $sqlupdate ="UPDATE user_personal_details SET name='$name',gender='$gender',address='$add',phone=$phone,zip=$zip,dob='$dob' where uuid ='$uuid'";
          if (mysqli_query($conn, $sqlupdate)) {
            header('Location: ../details.php');
          } else {
            echo "Error updating record: " . mysqli_error($conn);
          }

        }else{


$sql = "INSERT INTO user_personal_details (name,gender,address,phone,zip,dob,uuid) VALUES ('$name','$gender','$add',$phone,$zip,'$dob','$uuid')";
if (mysqli_query($conn, $sql)) {
   header('Location: ../details.php'); 
  } else {
    die("Error: " . $sql . "<br>" . mysqli_error($conn));
  }
        }
?>