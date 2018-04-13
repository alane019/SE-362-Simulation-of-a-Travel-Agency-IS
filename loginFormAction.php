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


//Form infos
$email = $password = "";

$email = $_POST["email"];
$password = $_POST["password"];

if (empty($_POST["email"]) || empty($_POST["password"])) {
    header("Location: http://localhost/php_kodlarım/SE-362-Simulation-of-a-Travel-Agency-IS/loginForm.php");
    exit();
}

$formParams = array($email,$password);

$stmt = $mysqli->prepare("Select * from Members where email=? and password=?");
$stmt->bind_param("ss", $email, $password);
$result = $stmt->execute();

if($formParams == $result) {
    echo "Welcome ".$_POST['email'];
}
else {
    echo "Sıçış";
}


$stmt->close();
$mysqli->close();

?>