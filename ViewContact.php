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
$stmt = $pdo->prepare("SELECT * FROM `contactform`;");

//execute
$stmt->execute();

//process results


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>
    <h1>Contact Forms</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Submission ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>email</th>
                <th>Industry Interest</th>
                <th>Technology Interest</th>
                <th>Career Interest</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>

<?php while($row = $stmt->fetch()){ ?>
       
<?php if ($row["id"]){?>


          
                <tr>
                    <td><?= $row["id"] ?></td>
                    <td><?= $row['fName']; ?></td>
                    <td><?= $row['lName']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['industry_interest']; ?></td>
                    <td><?= $row['technical_interest']; ?></td>
                    <td><?= $row['career_interest']; ?></td>
                    <td><?= $row['role']; ?></td>

                </tr>
            
       

        
            
        <?php

           } ?> </tbody>
           
    <?php    }?>

    </table>
       </body>
       </html>



