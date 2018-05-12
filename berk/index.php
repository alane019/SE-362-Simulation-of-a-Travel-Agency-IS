<?php
	include("includes/config.php");

	if(isset($_SESSION['userLoggedIn'])){
		$userLoggedIn=$_SESSION['userLoggedIn'];
		include("includes/handlers/index-handler.php");}
?>


	

<!DOCTYPE html>
	<head>
		<title>Index</title>
		<style type="text/css">
		p {
			display: inline;
			font-size: 20px;
		}

		button p {
			font-size: 15px;
		}
		</style>
		
	</head>

	<body>
		<div id="content">
		<h1>Welcome to Travel Agency System</h1>
		
		<form action="index.php" method="get">
		<!-- City Combo Box -->
		<p>Please select your city: </p>
			<select name="city" id="city">
				<option name="citySelect">Select</option>
					<?php
						 $con = mysqli_connect("localhost","root","","test");
						 $config['default']['port'] = 3308; // Berk : Commente al bunu
						$query = "Select * from cities";
						$result = mysqli_query($con,$query) or die("Error in query");
						if(mysqli_num_rows($result)>0) {
							while($row = mysqli_fetch_row($result)) { 
					?>
								<option><?php
								echo "$row[1]";?> </option>
							<?php	
							}
						}
							?>	
			</select>
			<br><br>
		<!-- Flight Combo Box -->
		<p>Please select your flight company: </p>			
			<select name="flight" id="flight">
				<option name="flightSelect">Select</option>
					<?php 
					$con = mysqli_connect("localhost","root","","test");
					$config['default']['port'] = 3308; // Berk : Commente al bunu
						$query = "Select * from flights";
						$result = mysqli_query($con,$query) or die("Error in query");
						if(mysqli_num_rows($result)>0) {
							while($row = mysqli_fetch_row($result)) { 
					?>
								<option><?php
								echo "$row[1]";?> </option>
							<?php	
							}
						}
							?>	
			</select>
			<br><br>
		<!-- Hour Combo Box -->
		<p>Please select from the available hours: </p>
			<select name="hour" id="hour">
				<option name='hourSelect'>Select</option>
					<?php 
					$con = mysqli_connect("localhost","root","","test");
					$config['default']['port'] = 3308; // Berk : Commente al bunu
						$query = "Select * from hours";
						$result = mysqli_query($con,$query) or die("Error in query");
						if(mysqli_num_rows($result)>0) {
							while($row = mysqli_fetch_row($result)) { 
					?>
							<option><?php
								echo $row[1]; ?> </option>
							<?php	
							}
						}
							?>	
			</select>
			<br><br>				
			<input type="submit" name="indexSendButton" value="Send">
		</form>

	</div>

	</body>
</html>