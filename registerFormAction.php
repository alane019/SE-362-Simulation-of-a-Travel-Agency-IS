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
    echo "Database connected ";
}

//Form infos
$name = $email = $phone = $password = "";

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$password = $_POST["password"];

//if one area is empty redirect to the registerForm so it prevents the unnecessary db records
if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["phone"]) || empty($_POST["password"])) {
    header("Location: http://localhost/php_kodlarım/SE-362-Simulation-of-a-Travel-Agency-IS/registerForm.php");
    exit();
}

//Sending the query to db to register the member

$sql = "Insert into Members(name,email,number,password) values ('$name','$email','$phone','$password')";

if ($mysqli->query($sql)===true) {
    echo "New record created successfully";
    header("Location: http://localhost/php_kodlarım/SE-362-Simulation-of-a-Travel-Agency-IS/index.html");
    exit();
}
else {
    echo "Error: " . $sql . "<br>". $mysqli->error;
}

$mysqli->close();

?>