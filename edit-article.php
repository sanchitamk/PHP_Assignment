<?php
//edit-form.php
//Show form with user data
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

while($row = $stmt->fetch()){ ?>
        
<form action="updatearticle.php" enctype="multipart/form-data" method="POST">
<input type="hidden" name="id" value="<?= $row["id"] ?>">
<fieldset>

<legend>Title</legend>
<input type="text" name="Title" value="<?= $row["Title"] ?>">

</fieldset>

<fieldset>

<legend>Author</legend>
<input type="text" name="Author" value="<?= $row["Author"] ?>">

</fieldset>

<fieldset>
<legend>Image</legend>
<input type="file" name="image" value="<?= $row["image"] ?>" >
</fieldset>

<fieldset >
<legend>Body</legend>
<input name="Body" value="<?= $row["Body"] ?>">
</fieldset>


<input type="submit">

</form>  
		  
<?php

		
	}?>





	



