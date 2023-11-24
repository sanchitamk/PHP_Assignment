<?php
//process-insert-person-form.php
//receives user-submitted data
//fName, lName, DOB

$_SESSION["loggedIn"] = true;
include("header-member-admin.php");

$Title = $_POST["Title"];
$Author = $_POST["Author"];

$Body = $_POST["Body"];
$tmp_location = $_FILES["image"]["tmp_name"];

 
$uploadFolder = "Images/";
$upload_location = $uploadFolder . basename($_FILES["image"]["name"]);
$image = basename($_FILES["image"]["name"]);

if (move_uploaded_file($tmp_location, $upload_location)) {
 	echo "File is valid, and was successfully uploaded.\n";
} else {
	 echo "File upload problem.\n";
}



//saves the user data to the database table

$dsn = "mysql:host=localhost;dbname=contactform;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("INSERT INTO `articles` 
	(`id`, `Title`, `Author`, `image`,`Body`) 
	VALUES 
	(NULL, '$Title', '$Author', '$image','$Body');");

//execute

if($stmt->execute()){ ?>
	<h1>Success!</h1>
	
<?php
}else{ 
	?><h1>Error</h1> <?php
}
?>
<a href="add-article-form.php">Insert another article!</a>