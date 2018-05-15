<?php

// This is the admin's login page's front-end side

include("includes/config.php");

include("includes/classes/Account.php");
$account = new Account($con);
include("includes/handlers/admin-login-handler.php");

?>

<html>
<head>
<title>Admin</title>
</head>

  <form id="loginForm" action="admin-login.php" method="POST">
    <h1>Admin Login</h1>
      <p>
        <label for="loginUsername">Username</label>
        <input id="loginUsername" name="loginUsername" type="text" placeholder="Your username" required>
      </p>
      <p>
        <label for="loginPassword">Password</label>
        <input id="loginPassword" name="loginPassword" type="password" placeholder="Your password" required>
      </p>

      <button type="submit" name="loginButton">LOG IN</button><br><br>
      <a href="register.php">Main Page</a>
    </form>


</html>