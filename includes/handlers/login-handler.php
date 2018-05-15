<?php

  //This page handles the logins

  if(isset($_POST['loginButton'])){
    
    $_SESSION['username'] = $_POST['loginUsername'];
    $password = $_POST['loginPassword'];

    // Login function

    $result=$account->login($_SESSION['username'],$password);

    
    // user logged in !!
    if($result==true){
      $_SESSION['userLoggedIn']=$_SESSION['username'];
      header("Location: index.php");
    }
}
?>

