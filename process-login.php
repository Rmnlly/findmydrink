<?php
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

include("includes/database.php");

$stmt = $pdo->prepare("SELECT * FROM `User`
	WHERE `username` = '$username'
	AND `password` = '$password';");

$stmt->execute();


if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	$_SESSION["authenticated"] = true;
	$_SESSION["id"] = $row['id'];
	$_SESSION["firstName"] = $row['firstName'];
	$_SESSION["lastName"] = $row['lastName'];

	header("Location: index.php");
}else{
	//BAD USERNAME AND PASSWORD
	echo("bad username and password. Please try again");
	?><a href="login-form.php">Login here</a><?
}

?>
