<?php
  ob_start();
  session_start(); // -> MAKES THE REGISTER.PHP MAIN SCREEN

  $timezone = date_default_timezone_set("Europe/Istanbul");

  $con = mysqli_connect("localhost","root","","test"); // En sondakini parametreyi
  //kendim için test dedim sen yine deneme yaparsın

  $config['default']['port'] = 3308; // Berk : Commente al bunu

  if(mysqli_connect_errno()){
    echo "Failed to connect" . mysqli_connect_errno();
  }

?>