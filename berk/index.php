<?php
	include("includes/config.php");

	//Moreover, you can handle the which hotel you are going to stay. It is going the relevant where you stay.

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
				<option name="citySelect" value=''>Select</option>
				<?php 
					$query = "Select * from cities";
					$result = mysqli_query($con,$query) or die("Error in query");
					if(mysqli_num_rows($result)>0) {
						while($row = mysqli_fetch_row($result)) { 
				?>
				<option><?php
				echo "$row[1]";
				?> </option>
				<?php	
						}
					}
				?>	
			</select>
			<br><br>

		<!-- Flight Combo Box -->
		<p>Please select your flight company: </p>			
			<select name="flight" id="flight">
				<option name="flightSelect" value=''>Select</option>
					<?php 
						$query = "Select * from flights";
						$result = mysqli_query($con,$query) or die("Error in query");
						if(mysqli_num_rows($result)>0) {
							while($row = mysqli_fetch_row($result)) { 
					?>
				<option><?php
				echo "$row[1]";
				?> </option>
				<?php	
							}
						}
				?>	
			</select>
			<br><br>
			
			<!-- Day Combo Box -->
			<p>Please select the date you want to go: </p>
			<select name='day' id='day'>
				<option name='daySelect' value=''>Select</option>
				<?php
					for($i=1;$i<=31;$i++) {
				?>
				<option><?php
					echo $i;}
				?> </option>
			</select>
			
			<!-- Month Combo Box -->
			<select name='month' id='month'>
				<option name="monthSelect" value="">Select</option>
				<?php
					$monthArray = array("January","February","March","April","May","June","July","August","September","October","November","December");
					foreach($monthArray as $monthArray) {
				?>
				<option><?php
					echo $monthArray;}
				?>
				</option>
			</select>

			<!-- Year Combo Box -->
			<select name="year" id="year">
				<option name='yearSelect' value=''>Select</option>
				<?php
					$yearArray = array();
					for ($i=date('Y'); $i<date('Y')+5; $i++) {
					$yearArray[]=$i;
				?>
				<option><?php
					echo $i;}	
				?> </option>
			</select>
			<br><br>

		<!-- Hour Combo Box -->
		<p>Please select from the available hours: </p>
			<select name="hour" id="hour">
				<option name='hourSelect' value=''>Select</option>
					<?php 
						$query = "Select * from hours";
						$result = mysqli_query($con,$query) or die("Error in query");
						if(mysqli_num_rows($result)>0) {
							while($row = mysqli_fetch_row($result)) { 
					?>
				<option><?php
				echo $row[1]; 
				?> </option>
					<?php	
							}
						}
					?>	
			</select>
			<br><br>				
		
		<!-- Flight Seat Combo Box -->
		<p>Please select your seat in the flight: </p>
			<select name="seat" id="seat">
				<option name='seatSelect' value=''>Select</option>
				<?php 
						$query = "Select * from seats";
						$result = mysqli_query($con,$query) or die("Error in query");
						if(mysqli_num_rows($result)>0) {
							while($row = mysqli_fetch_row($result)) { 
					?>
				<option><?php
				echo $row[1]; 
				?> </option>
				<?php	
						}
					}
				?>	
			</select>
			<br><br>
		
		<!-- Rent A Car Combo Box -->
		<p>Do you want to rent a car to travel in the city: </p>
			<select name="car" id="car">
				<option name='carSelect' value=''>Select</option>
				<option>Yes</option>
				<option>No</option>
			</select>
			<br><br>

			<input type="submit" name="indexSendButton" value="Send">
		</form>
		</div>
	</body>
</html>