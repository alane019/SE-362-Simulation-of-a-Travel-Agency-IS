<?php

// This script handles the admin's transactions

$con = mysqli_connect("localhost","root","","test");
$config['default']['port'] = 3308;

include('includes/handlers/login-handler.php');

if(mysqli_connect_errno()){
  echo "Failed to connect" . mysqli_connect_errno();
}

// Show the reservation
if (isset($_GET['showReservations'])) {
  // Gathering the reservations from db
  $query = "Select * from infos";
  $result = mysqli_query($con,$query) or die("Error in query");
  if (mysqli_num_rows($result)>0) {
      while($row = mysqli_fetch_row($result)) {
          for ($i = 0; $i < 10; $i++) {
              echo "<p>".$row[$i]."    </p>";
          } 
          echo "<br>";    
      }
  }
}


// Deletion of reservations
if (isset($_GET['adminIndexDeleteSendButton'])) {
    
    $delete = $_GET['delete'];

    $query = "Delete from infos where id = $delete";
    $result = mysqli_query($con,$query);
    if ($result == true)
      echo "The reservation is deleted";
    else
      echo "Please enter a valid id";
    
}

// Deletion of user
if (isset($_GET['adminIndexDeleteUserSendButton'])) {
  $firstName = $_GET['deleteFirstName'];
  $lastName = $_GET['deleteLastName'];
  $userName = $_SESSION['username'];

  $query = "Delete from users where firstName = '$firstName' and lastName = '$lastName'";
  $result = mysqli_query($con,$query);
  $query2 = "Delete from infos where username = '$userName'";
  $result2 = mysqli_query($con,$query2);
  echo "The user is deleted with all corresponding reservations.";
}


?>