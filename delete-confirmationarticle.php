<?php
//delete-confirmation.php
//show person record to be deleted
$_SESSION["loggedIn"] = true;
include("header-member-admin.php");

$id = $_GET["id"];

$dsn = "mysql:host=localhost;dbname=contactform;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("SELECT * FROM `articles` 
	WHERE `articles`.`id` = $id;");

//execute
$stmt->execute();

//process results
$row = $stmt->fetch();


?>
<h1>Delete Confirmation</h1>
<p>Are you sure you want to delete this article?</p>


<a href="h-admin.php">No</a>
<form action="deletearticle.php" method="POST">
	<input type="hidden" 
	name="id" 
	value="<?= $row['id'] ?>"
	>
	<input type="submit" value="Yes">
</form>