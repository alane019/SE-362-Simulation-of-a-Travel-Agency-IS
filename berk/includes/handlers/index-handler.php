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
    $hour = $_GET['hour'];
    
    $query = "Insert into infos(city,flight,hour) values('$city','$flight','$hour')";
    //$queryDeneme = "Insert into infos(city,flight,hour) values('Izmir','THY','9:00')";
    //$result = mysqli_query($con,$queryDeneme);
    $result2 = mysqli_query($con,$query);
    // Buradaki 3 value'yu yazdırmıyor.
    echo $city." ".$flight." ".$hour;
}


?>