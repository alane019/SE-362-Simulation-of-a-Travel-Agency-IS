<?php
	//This page contains tree parts 
	//First one is the login
	//Second one is the register
	//Final part is something like a complain box (still in progress)

	include("includes/config.php");
    include("includes/classes/Account.php");
    include("includes/classes/Constants.php");

    $account = new Account($con);

    include("includes/handlers/register-handler.php");
    include("includes/handlers/login-handler.php");

    function getInputValue($name){
        if(isset($_POST[$name])){
            echo $_POST[$name];
        }
    }
   
?>

<html>
<head>
	<title>Register Page</title>
	<link rel="stylesheet" href="assets/css/register.css">
</head>
<body>

	<a href="admin-login.php">Admin Login</a>
    <div id="inputContainer">

        <!--LOGIN FIELD-->
        <form id="loginForm" action="register.php" method="POST">
			<h2>Login to your account</h2>
			<p>
				<?php echo $account->getError(Constants::$loginFailed); ?>
				<label for="loginUsername">Username</label>
				<input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. berkezircan" required>
			</p>
			<p>
				<label for="loginPassword">Password</label>
				<input id="loginPassword" name="loginPassword" type="password" placeholder="Your password" required>
			</p>

			<button type="submit" name="loginButton">LOG IN</button>
			
		</form>

        <!--REGISTER FIELD-->

        <form id="registerForm" action="register.php" method="POST">
            <h2>Create your free account</h2>
            <p>
				<!--USERNAME -->
				<?php echo $account->getError(Constants::$usernameCharacters); ?>
				<?php echo $account->getError(Constants::$usernameTaken); ?>
				<label for="username">Username</label>
				<input id="username" name="username" type="text" placeholder="e.g. berkezircan" value="<?php getInputValue('username') ?>" required>
			</p>

			<p>
				<!--FIRST NAME -->
				<?php echo $account->getError(Constants::$firstNameCharacters); ?>
				<label for="firstName">First name</label>
				<input id="firstName" name="firstName" type="text" value="<?php getInputValue('firstName') ?>" placeholder="e.g. Berk" required>
			</p>

			<p>
				<!--LAST NAME -->
				<?php echo $account->getError(Constants::$lastNameCharacters); ?>
				<label for="lastName">Last name</label>
				<input id="lastName" name="lastName" type="text" placeholder="e.g. Ezircan" value="<?php getInputValue('lastName') ?>" required>
			</p>

			<p>
				<!--EMAIL -->
				<?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
				<?php echo $account->getError(Constants::$emailInvalid); ?>
				<?php echo $account->getError(Constants::$emailTaken); ?>
				<label for="email">Email</label>
				<input id="email" name="email" type="email" placeholder="e.g. berkezircan@gmail.com" value="<?php getInputValue('email') ?>" required>
			</p>

			<p>
				<label for="email2">Confirm email</label>
				<input id="email2" name="email2" type="email" placeholder="e.g. berkezircan@gmail.com" value="<?php getInputValue('email2') ?>" required>
			</p>

			<p>

				<!--PASSWORD -->
				<?php echo $account->getError(Constants::$passwordsDoNoMatch); ?>
				<?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
				<?php echo $account->getError(Constants::$passwordCharacters); ?>
				<label for="password">Password</label>
				<input id="password" name="password" type="password" placeholder="Your password" required>
			</p>

			<p>
				<label for="password2">Confirm password</label>
				<input id="password2" name="password2" type="password" placeholder="Your password" required>
			</p>
            
            <button type="submit" name="registerButton">SIGN UP</button>
        </form>

		<!-- Contact Form -->
		<form class="contact-form" action="contactform.php" method="post">
            <fieldset>
            <legend>Contact Form</legend>
            
                <input type="text" name="name" placeholder="Full name" required><br/>
                <br/>
                <input type="text" name="mail" placeholder="Your e-mail" required><br/>
                <br/>
                <input type="text" name="subject" placeholder="Subject" required><br/>
                <br/>
                <textarea name="message" placeholder="Message" required></textarea><br/>
                <br/>
                <button type="submit" name="submit">SEND MAIL</button>
            </fieldset>
        
        </form>

    </div>

</body>
</html>