<?php
//process-insert-person-form.php
//receives user-submitted data
//fName, lName, DOB

include("header-public.php");
$username = $_POST["username"];
$password = $_POST["password"];






//saves the user data to the database table

$dsn = "mysql:host=localhost;dbname=contactform;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("INSERT INTO `users` 
	(`id`, `username`, `password`, `role`) 
	VALUES 
	(NULL, '$username', '$password', 'Member');");

//execute

if($stmt->execute()){ ?>
	<h1>Success!</h1>
	<p>Thank you!</p>


	
<?php
}else{ 
	?><h1>Error</h1> <?php
}
?>
