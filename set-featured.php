<?php

$_SESSION["loggedIn"] = true;
include("header-member-admin.php");

$id = $_GET["id"];

$dsn = "mysql:host=localhost;dbname=contactform;charset=utf8mb4";
$db_username = "root";
$db_password = "";

$pdo = new PDO($dsn, $db_username, $db_password);

$stmt = $pdo->prepare("SELECT * FROM `articles`;");

//execute
$stmt->execute();

    
    $Reset = $pdo->prepare("UPDATE articles SET featured = 0 WHERE featured = 1");
    $Reset->execute();

    
    $Set = $pdo->prepare("UPDATE articles SET featured = 1 WHERE id = $id");
    $Set->execute();

    if($Reset->execute() && $Set->execute()){

    header("Location:h-admin.php");
    exit();
    
    }else{
    echo "Oops! Couldn't set the article to featured.";
}
  
?>