<?php
include("header-public.php");
//process-insert-person-form.php
//receives user-submitted data
//fName, lName, DOB

$fName = $_POST["fName"];
$lName = $_POST["lName"];
$email = $_POST["email"];

$industry_interest = '';
$technical_interest = '';
$career_interest ='';


if (isset($_POST["industry"])) {
    $industry_interest = 'Interested';
} else{
    $industry_interest = 'Not Interested';
} 


if (isset($_POST["technical"])) {
    $technical_interest = 'Interested';
} else{
    $technical_interest = 'Not Interested';
} 


if (isset($_POST["career"])) {
    $career_interest = 'Interested';
} else{
    $career_interest = 'Not Interested';
} 

$role = '';


if (isset($_POST["writer"])) {
    $role = 'Writer';
} elseif (isset($_POST["contributor"])) {
    $role = 'Contributor';
} elseif (isset($_POST["administrator"])) {
    $role = 'Administrator';
}


//saves the user data to the database table

$dsn = "mysql:host=localhost;dbname=contactform;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("INSERT INTO `contactform` 
	(`id`, `fName`, `lName`, `email`,`industry_interest`,`technical_interest`,`career_interest`,`role`) 
	VALUES 
	(NULL, '$fName', '$lName', '$email','$industry_interest','$technical_interest','$career_interest','$role');");

//execute

if($stmt->execute()){ ?>
	<h1>Success!</h1>
	<p>Thank you!</p>


	
<?php
}else{ 
	?><h1>Error</h1> <?php
}
?>
