<?php
session_start();
$message = "Connecting DB";
require_once "..\config\db_config.php";

$domeye = $_POST['dominant_eye'];
$peri =$_POST['periphery_stimulant'];
$controlpic=$_POST['control_pictures'];
$background =$_POST['background'];
$distance=$_POST['object_distance'];
$size =$_POST['object_distance'];
$uuid = $_SESSION['uuid'];

$sqlcheck = "SELECT dominant_eye from user_medical where uuid='$uuid' ";

$result =mysqli_query($conn, $sqlcheck);
        if(mysqli_num_rows($result) > 0){
          $sqlupdate ="UPDATE user_medical SET dominant_eye='$domeye',periphery_stimulant='$peri',control_pictures='$controlpic',background='$background',object_distance='$distance',object_size='$size' where uuid ='$uuid'";
          if (mysqli_query($conn, $sqlupdate)) {
            header('Location: ../details.php');
          } else {
            echo "Error updating record: " . mysqli_error($conn);
          }

        }else{


$sql = "INSERT INTO user_medical (dominant_eye,periphery_stimulant,control_pictures,background,object_distance,object_size,uuid) VALUES ('$domeye','$peri','$controlpic','$background','$distance','$size','$uuid')";
if (mysqli_query($conn, $sql)) {
    echo "
        <script>
         alert(\"Details Successfully Added\")
        </script>            
   ";
   header('Location: ../details.php'); 
  } else {
    die("Error: " . $sql . "<br>" . mysqli_error($conn));
  }
        }
?>