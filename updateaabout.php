<?php
//update.php
//Update the record
$_SESSION["loggedIn"] = true;
include("header-member-admin.php");
$Title = $_POST["Title"];
$Body = $_POST["Body"];
$id = $_POST["id"];

$dsn = "mysql:host=localhost;dbname=contactform;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("UPDATE `about` 
	SET `Title` = '$Title', 
	`Body` = '$Body' 
	WHERE `about`.`id` = $id;");

//execute
if($stmt->execute()){
	?><p>About updated</p><?php
}else{
	?><p>Could not update.</p><?php
}
?>
