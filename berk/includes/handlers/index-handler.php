<?php
$con = mysqli_connect("localhost","root","","test");
$config['default']['port'] = 3308;

if(mysqli_connect_errno()){
  echo "Failed to connect" . mysqli_connect_errno();
}

if (isset($_GET['indexSendButton'])) {
    $city = $_GET['city'];
    $flight = $_GET['flight'];
    $day = $_GET['day'];
    $month = $_GET['month'];
    $year = $_GET['year'];
    $hour = $_GET['hour'];
    $seat = $_GET['seat'];
    $car = $_GET['car'];
    
    $query = "Insert into infos(city,flight,day,month,year,hour,seat,car) values('$city','$flight','$day','$month','$year','$hour','$seat','$car')";
    $result2 = mysqli_query($con,$query);
}


?>