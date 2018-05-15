<?php

// This script is the register page's server side
//TEXTING FUNCTIONS

function sanitizeFormPassword($inputText){
    $inputText = strip_tags($inputText);
    return $inputText;
}

function sanitizeFormUsername($inputText){
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ","",$inputText);// " " => ""
    return $inputText;
}

function sanitizeFormString($inputText){
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ","",$inputText);
    $inputText = ucfirst(strtolower($inputText)); // FIRST LETTER TO LOWER
    return $inputText;
}

//BUTTON IS PRESSED
if(isset($_POST['registerButton'])){
    // TEXTING
    $username = sanitizeFormUsername($_POST['username']);
    $firstName = sanitizeFormString($_POST['firstName']);
    $lastName = sanitizeFormString($_POST['lastName']);
    $email = sanitizeFormString($_POST['email']);
    $email2 = sanitizeFormString($_POST['email2']);
    $password= sanitizeFormPassword($_POST['password']);
    $password2= sanitizeFormPassword($_POST['password2']);

    //PUSH THE VALUES

    $wasSuccesful = $account->register($username, $firstName, $lastName, $email, $email2, $password, $password2);
    
    // When register is correct locate the user the index.php
    if($wasSuccesful == true){
        $_SESSION['userLoggedIn'] = $username;  
        header("Location: register.php");
    }




}

?>