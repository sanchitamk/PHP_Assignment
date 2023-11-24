<?php

include("header-public.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>

    <link rel="icon" href="Images/favicon.ico" type="image/x-icon" />
    <meta name="immnewsnetwork-Contact Us" content="Get in touch with us"/>

  </head>

  <body>
    

    <form action="processform.php" method="POST">
      <fieldset>

        <legend>Registration Info</legend>

        <label for="username">Username: </label>
        <input name="username" required/>

        <label for="password">Password: </label>
        <input name="password" required/>
        
      </fieldset>

     

      <input type="submit"/>
    </form>
  </body>
</html>
