<?php
//DB Connection
define("DB_USER", "root");
define("DB_PASSWORD", "");
$mysqli = new mysqli('localhost','root','','test');
$config['default']['port'] = 3308;
if ($mysqli->connect_error) {
    die('Error'.('.$mysqli->connect_errno.'));
}
else {
    echo "Database connected<br>";
}

// if there is a mistake or any conflict we call go to the login form function
function goToTheLoginForm() {
    header("Location: http://localhost/php_kodlarım/SE-362-Simulation-of-a-Travel-Agency-IS/loginForm.php");
    exit();
}

//Form infos
$email = $password = "";

$email = $_POST["email"];
$password = $_POST["password"];

if (empty($_POST["email"]) || empty($_POST["password"])) {
   goToTheLoginForm();
}

$sql = "Select * from members where email='$email' and password='$password'";

$result = $mysqli->query($sql);

// if the query will return more than 0 rows we can say that this person is registered to the system so he/she can enter

if ($result->num_rows>0) {
    while($row = $result->fetch_assoc()) {
        echo "Welcome ".$row['Name'];
    }
}

else {
    echo "Failed to enter to the system";
    goToTheLoginForm();
}
    
$mysqli->close();

?>