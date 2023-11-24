<?php

$_SESSION["loggedIn"] = true;
include("header-member-admin.php");

$id = $_POST["id"];

$dsn = "mysql:host=localhost;dbname=contactform;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("DELETE FROM `articles` WHERE `articles`.`id` = $id;");

//execute
if($stmt->execute()){
	?><p>Article <?=$id ?> Deleted.</p><?php
}else{
	?><p>Could not delete record</p><?php
}
?>
