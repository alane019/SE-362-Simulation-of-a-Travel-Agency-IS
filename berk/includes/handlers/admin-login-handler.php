<?php
  if(isset($_POST['loginButton'])){
    
    $username= $_POST['loginUsername'];
    $password= $_POST['loginPassword'];

    // Login function

    $result=$account->adminLogin($username,$password);
    
    // user logged in !!
    if($result==true){
      header("Location: admin-index.php");
    }

}
?>

