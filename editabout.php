<?php 

$_SESSION["loggedIn"] = true;?>

<p>Hello, you are now logged in Admin.</p><?php
include("header-member-admin.php");
$dsn = "mysql:host=localhost;dbname=contactform;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("SELECT * FROM `about`;");

//execute
$stmt->execute();

//process results


?>
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Contact Us</title>
    
      
      </head>
    
      <body>
    
      <style>
    
    
    
</style>
   
     
    <?php while($row = $stmt->fetch()){ ?>
        
        <form action="updateaabout.php" method="POST">
	<input type="hidden" name="id" value="<?= $row['id'] ?>">
	Title:<input type="text" name="Title" value="<?= $row["Title"] ?>"><br>
	Body:<input type="text" name="Body" value="<?= $row["Body"] ?>">
	
	<input type="submit">

    </form>   
              
    <?php
    
            
        }?>
        
</body>
</html>
  
