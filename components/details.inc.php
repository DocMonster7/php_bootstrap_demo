<h3>Personal Details</h3>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Date Of Birth</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Zip</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "eyebase";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT name,gender,address,phone,zip,dob from user_personal_details where uuid='$uuid'";
    $result =mysqli_query($conn, $sql);
        
    if(mysqli_num_rows($result) >0){  
        while($row = mysqli_fetch_assoc($result)) {
            echo '<th scope="row">'.$row['name'].'</th>';
            echo '<td>'.$row['gender'].'</td>';
            echo '<td>'.$row['dob'].'</td>';
            echo '<td>'.$row['phone'].'</td>';
            echo '<td>'.$row['address'].'</td>';
            echo '<td>'.$row['zip'].'</td>';
        }
    }
    
    ?>
      
      
    </tr>
    
    
  </tbody>
</table>

<br><br><br>
<h3>Medical Details</h3>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">dominant_eye</th>
      <th scope="col">periphery_stimulant</th>
      <th scope="col">control_pictures</th>
      <th scope="col">background</th>
      <th scope="col">object_distance</th>
      <th scope="col">object_size</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "eyebase";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT dominant_eye,periphery_stimulant,control_pictures,background,object_distance,object_size from user_medical where uuid='$uuid'";
    $result =mysqli_query($conn, $sql);
        
    if(mysqli_num_rows($result) >0){  
        while($row = mysqli_fetch_assoc($result)) {
            echo '<td>'.$row['dominant_eye'].'</td>';
            echo '<td>'.$row['periphery_stimulant'].'</td>';
            echo '<td>'.$row['control_pictures'].'</td>';
            echo '<td>'.$row['background'].'</td>';
            echo '<td>'.$row['object_distance'].'</td>';
            echo '<td>'.$row['object_size'].'</td>';
        }
    }
    
    ?>
      
      
    </tr>
    
    
  </tbody>
</table>