<?php
$con = mysqli_connect("localhost","root","","test"); // En sondakini parametreyi
//kendim için test dedim sen yine deneme yaparsın

$config['default']['port'] = 3308; // Berk : Commente al bunu

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
    
    $query = "Insert into infos(city,flight,day,month,year,hour) values('$city','$flight','$day','$month','$year','$hour')";
    $result2 = mysqli_query($con,$query);
    // Buradaki 3 value'yu yazdırmıyor.
}


?>