<?php
include("includes/config.php");
if(isset($_SESSION['userLoggedIn'])){
    $userLoggedIn=$_SESSION['userLoggedIn'];
    include("includes/handlers/admin-index-handler.php");
    // Şimdilik userLoggedIn ama adminLoggedIn olacak
}

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
            // Gathering the reservations from db
            $query = "Select * from infos";
            $result = mysqli_query($con,$query) or die("Error in query");
            if (mysqli_num_rows($result)>0) {
                while($row = mysqli_fetch_row($result)) {
                    for ($i = 0; $i < 9; $i++) {
                        echo "<p>".$row[$i]."    </p>";
                    } 
                    echo "<br>";    
                }
            }

        ?>
        <br><br>
        <form action="admin-index-handler.php" method="get">
            <p>Please give the id to delete the corresponding reservation:</p>
            <input type="text" name="delete" id="delete">
            <input type="submit" name="adminIndexSendButton" value="Send">
        </form>
    </body>
</html>