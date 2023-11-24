<?php

include("header-public.php");?>
<form action="process-login.php" method="POST">

<fieldset>

  <legend>Login Info</legend>

  <label for="username">Username: </label>
  <input name="username" required/>

  <label for="password">Password: </label>
  <input name="password" required/>

</fieldset>


<input type="submit"/>
</form>

<?php
?>


    
  
