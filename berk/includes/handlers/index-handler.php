<?php

if (isset($_GET['indexSendButton'])) {
    $city = $_GET['city'];
    $flight = $_GET['flight'];
    $hour = $_GET['hour'];

    echo $city." ".$flight." ".$hour;
    echo "efe";
}


?>