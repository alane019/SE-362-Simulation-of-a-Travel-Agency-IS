<?php
$con = mysqli_connect("localhost","root","","test");
$config['default']['port'] = 3308;

include('includes/handlers/login-handler.php');


if(mysqli_connect_errno()){
  echo "Failed to connect" . mysqli_connect_errno();
}

if (isset($_POST['indexSendButton'])) {
    $city = $_POST['city'];
    $flight = $_POST['flight'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $hour = $_POST['hour'];
    $seat = $_POST['seat'];
    $car = $_POST['car'];
    $user = $_SESSION['username'];
    

    $query = "Insert into infos(username,city,flight,day,month,year,hour,seat,car) values('$user','$city','$flight','$day','$month','$year','$hour','$seat','$car')";
    $result2 = mysqli_query($con,$query);
    echo "Your reservation has created.";
}


?>