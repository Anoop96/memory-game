<!DOCTYPE html>
<?php
 
?>
<html>

<title>login page</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="login.css">
<body>
    <form method="post" action="check.php" >
<header class="w3-container w3-teal">
  <!--<span class="w3-xlarge">&#9776;</span>  !-->
  <h1>Login!</h1>
</header>

<div class="w3-container w3-half w3-margin-top">

<form class="w3-container w3-card-4">
  <h2 class="w3-text-theme">Login</h2>
  <br><br>
  <div class="w3-group">      
    <input class="w3-input" type="text" name="username" required>
    <label class="w3-label">username</label>
  </div>
  <div class="w3-group">      
    <input class="w3-input" type="password" name="password" required>
    <label class="w3-label">Password</label>
  </div>

  <br><br>
  <label class="w3-checkbox">
    <input type="checkbox" checked="checked">
    <span class="w3-checkmark"></span> Stay Logged In
  </label>

  <br><br>
  <button class="w3-btn w3-theme" type="submit" name ="submit"> Log in </button>
  <br><br>
</form>

</div>

</body>

</html> 