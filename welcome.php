<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
  }

  
  var_dump($_SESSION);
  var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <a href="http://botnic.xyz/">
    <img src="botnic.png">
    
    
</a> 


    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to Botnic.</h1>

 <!-- 
    <figure>
    <input type="image" name= "Tomate" src="tomato.png" height = 200 width = 200 alt= "tomate"/>
  <figcaption> Tomate </figcaption>
    </figure>
-->
    <div class="row">
  <div class="column">

  <a href="tomato_create_profile.php">
  <div class="column">
    <img src="tomato.png" height= 200 width = 200>
    </div>
    
</a> 

  </div>


  <div class="column">
  <input style="text-align:center;" type="image" name= "Lettuce" src="lettuce.png" height = 200 width = 200 alt= "Lettuce"/>
  </div>
  <div class="column">
  <input style="text-align:center;" type="image" name= "Strawberry" src="strawberry.png" height = 200 width = 200 alt= "Strawberry"/>
  </div>
</div>

<a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    
</body>
</html>