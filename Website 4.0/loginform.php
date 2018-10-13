<?php
require_once 'PHP/dbhelper.php';
?>




<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="styles/loginstyle.css">

<html>
<head>
</head>
<body style="background-color: aliceblue;">

<form action="PHP/login.php">
  <div class="imgcontainer">
    <img src="img_avatar.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" name="loginmo">Login</button>

  </div>
</form>
</body>
</html>