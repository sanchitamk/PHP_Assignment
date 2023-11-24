<?php

$_SESSION["loggedIn"] = true;
include("header-member-admin.php");



?>
<style>
    
    input {

        width: 300px; 
        height: 20px; 
        
    }
    .body{

width: 1080px; 
height: 200px; 

}
</style>

<form action="process-insert-article-form.php" enctype="multipart/form-data" method="POST">

        <fieldset>

        <legend>Title</legend>
	    <input name="Title">

        </fieldset>

        <fieldset>

        <legend>Author</legend>
	    <input name="Author">

        </fieldset>

        <fieldset>
        <legend>Image</legend>
        <input type="file" name="image">
        </fieldset>

        <fieldset >
        <legend>Body</legend>
	    <input name="Body"class="body">
        </fieldset>


	    <input type="submit">

</form>
