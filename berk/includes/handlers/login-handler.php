<?php
  if(isset($_POST['loginButton'])){
    
    $username= $_POST['loginUsername'];
    $password= $_POST['loginPassword'];

    // Login function

    $result=$account->login($username,$password);
    
    // user logged in !!
    if($result==true){
      $_SESSION['userLoggedIn']=$username;
      header("Location: index.php");
    }

}
?>

