<?php

session_start();

$username = $_POST["username"];
$password = $_POST["password"];


//check the database for the username and password combination
$dsn = "mysql:host=localhost;dbname=contactform;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

$pdo = new PDO($dsn, $dbusername, $dbpassword);


$stmt = $pdo->prepare("SELECT `id`, `username`, `password`,`role`
	FROM `users` 
	WHERE `username` = '$username' AND `password` = '$password';");


$stmt->execute();

//if u/p is correct, 
if($row = $stmt->fetch()){

	$role=$row['role'];

	if ($role ==="Administrator"){
		
	$_SESSION["id"] = $row['id'];
	$_SESSION["username"] = $row['username'];
	$_SESSION["loggedIn"] = true;
	
    include("h-admin.php");

	}

	elseif($role ==="Member"){
    ?> <p>Hello, you are now logged in member.</p> <?php
		
	$_SESSION["id"] = $row['id'];
	$_SESSION["username"] = $row['username'];
	$_SESSION["loggedIn"] = true;
	
	include("h-member.php");
	}
	

	
}else{

	//else show error message
	include("header-public.php");
	?>
	<p>Error.</p> <a href="login.php">Try login again</a>
	
	<?php
}

?>