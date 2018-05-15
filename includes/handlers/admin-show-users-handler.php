<?php

// One of the scripts that help to admin-index for showing the users in the databse

$con = mysqli_connect("localhost","root","","test");
$config['default']['port'] = 3308;

if(mysqli_connect_errno()){
    echo "Failed to connect" . mysqli_connect_errno();
  }

if (isset($_GET['showUsers'])) {
    // Gathering the users from db
    $query = "Select username, firstName, lastName, email from users";
    $result = mysqli_query($con,$query) or die("Error in query");
    if (mysqli_num_rows($result)>0) {
        while($row = mysqli_fetch_row($result)) {
            for ($i = 0; $i < 4; $i++) {
                echo "<p>".$row[$i]."    </p>";
            } 
            echo "<br>";    
        }
    }
  }



?>
