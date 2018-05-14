<?php
$con = mysqli_connect("localhost","root","","test");
$config['default']['port'] = 3308;

if(mysqli_connect_errno()){
  echo "Failed to connect" . mysqli_connect_errno();
}

if (isset($_GET['adminIndexSendButton'])) {
    
    $delete = $_GET['delete'];

    $query = "Delete from infos where id = $delete";
    $result = mysqli_query($con,$query);
    echo "The reservation is deleted";
    
}


?>