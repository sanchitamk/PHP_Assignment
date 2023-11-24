<?php
include("header-member.php");?>


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

  
    <form action="contactform.php" method="POST">
      <fieldset>
        <legend>Personal Info</legend>

        <label for="fName">First Name: </label>
        <input name="fName" required/>

        <label for="lName">Last Name: </label>
        <input name="lName" required/>

        <label for="email">E-mail: </label>
        <input type="email" required placeholder="john.doe@apple.com" input name="email"/>
      </fieldset>

      <fieldset>
        <legend>Category Interests</legend>
        <input type="checkbox" name="industry"/>Industry
        <input type="checkbox" name="technical"/>Technical
        <input type="checkbox" name="career"/>Career
      </fieldset>

      <fieldset>
        <legend>Your Role</legend>
        <input type="radio" name="writer"/>Writer
        <input type="radio" name="contributor"/>Contributor
        <input type="radio" name="administrator"/>Administrator
      </fieldset>

      <input type="submit"/>
    </form>
  </body>
</html>
