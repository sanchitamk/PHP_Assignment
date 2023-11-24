<?php
//update.php
//Update the record
$_SESSION["loggedIn"] = true;
include("header-member-admin.php");
$Title = $_POST["Title"];
$Author = $_POST["Author"];
$Body = $_POST["Body"];
$id = $_POST["id"];

$dsn = "mysql:host=localhost;dbname=contactform;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("UPDATE `articles` 
	SET `Title` = '$Title', 
	`Author` = '$Author', 
	`Body` = '$Body' 
	WHERE `articles`.`id` = $id;");

//execute
if($stmt->execute()){
	?><p>Article <?=$id ?> updated</p><?php
}else{
	?><p>Could not update article</p><?php
}
?>
