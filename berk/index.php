<?php
include("includes/config.php");

if(isset($_SESSION['userLoggedIn'])){
	$userLoggedIn=$_SESSION['userLoggedIn'];
}
else{
	header("Location: register.php");
}

?>


<html>
<head>
	<title>Hello World !!!</title>
</head>

<body>
	Hello! <?php
		
	?>
</body>

</html>