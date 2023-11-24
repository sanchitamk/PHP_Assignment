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
$stmt = $pdo->prepare("SELECT * FROM `articles`;");

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
    <a href="add-article-form.php">Add Article</a>
    
    
    <?php while ($row = $stmt->fetch()) { 
        if ($row["Featured"] == 1) {
            $featuredArticle = $row;
            ?>
              <div>
                  <h1>Featured Article</h1>
                  <h2><?= $featuredArticle["Title"] ?></h2>
                  <h3><?= $featuredArticle["Author"] ?></h3>
                  <img src="Images/<?= $featuredArticle["image"] ?>" alt="Article Image">
                  <p><?= $featuredArticle["Body"] ?></p>
                  <p><?= $featuredArticle["Likes"] ?></p>
                  <a href="edit-article.php?id=<?= $row["id"] ?>">Edit</a> 
            <a href="delete-confirmationarticle.php?id=<?= $row["id"] ?>">Delete</a>
                  <?php } elseif($row["Featured"] == 0){?>
              </div>
              <?php  ?>
    
    <div>

            <h2><?= $row["Title"] ?></h2>
            <h3><?= $row["Author"] ?></h3>
            <img src="Images/<?= $row["image"] ?>" alt="Article Image">
            <p><?= $row["Body"] ?></p>
            <p><?= $row["Likes"] ?></p>
            <a href="edit-article.php?id=<?= $row["id"] ?>">Edit</a> 
            <a href="delete-confirmationarticle.php?id=<?= $row["id"] ?>">Delete</a>
                <a class="feat" href="set-featured.php?id=<?= $row["id"] ?>">Set as Featured</a>
            <?php }} ?>
      
    </div>
                  
        



</body>
</html>
  
