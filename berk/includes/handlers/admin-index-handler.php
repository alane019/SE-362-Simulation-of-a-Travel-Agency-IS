<?php
$con = mysqli_connect("localhost","root","","test");
$config['default']['port'] = 3308;

if(mysqli_connect_errno()){
  echo "Failed to connect" . mysqli_connect_errno();
}

if (isset($_GET['adminIndexSendButton'])) {
    
    $delete = $_GET['delete'];

    $query = "Delete from infos(id,city,flight,day,month,year,hour,seat,car) where id = $delete";
    $result2 = mysqli_query($con,$query);
}


?>