<?php

// This page is the admin's index page
// He can show the users and reservations from the db
// Also he can delete a reservation or a customer

include("includes/config.php");
?>

<!DOCTYPE html>
    <head>
        <title>Admin Index</title>
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
        <h1>Admin Panel</h1>
        <p>All Reservations: </p><br>
        <?php
            include("includes/handlers/admin-index-handler.php");
        ?>
        <form action="admin-index.php" method="get">
            <input type="submit" name="showReservations" value="Show Reservations">
        </form>

        <br><br>
        <p>All Users: </p><br>
        <?php
            include("includes/handlers/admin-show-users-handler.php");
        ?>
        <form action="admin-index.php" method="get">
            <input type="submit" name="showUsers" value="Show Users">
        </form>

        <br><br>

        <form action="admin-index.php" method="get">
            <p>Please give the id to delete the corresponding reservation:</p>
            <input type="text" name="delete" id="delete" placeholder="id of the reservation">
            <input type="submit" name="adminIndexDeleteSendButton" value="Delete Reservation">
            <br><br>
        </form>
        <form action="admin-index.php" method="get">
            <p>Please give the user you want to delete from system:</p>
            <input type="text" name="deleteFirstName" id="deleteFirstName" placeholder="first name of the user">
            <input type="text" name="deleteLastName" id="deleteLastName" placeholder="last name of the user">
            <input type="submit" name="adminIndexDeleteUserSendButton" value="Delete User">
            <br><br>
        </form>
            <a href="admin-login.php">Log Out</a>
        
    </body>
</html>