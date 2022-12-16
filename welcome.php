<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="welcome.css" type="text/css">
    </head>
<body>

    <div class="bgimg">
      <div class="topleft">
        <p style="font-size: 30px; font-weight: bold ; font-family: Verdana, Geneva, Tahoma, sans-serif ">Flowers Shop</p>
      </div>
      <div class="middle">
        <h1>Welcome <?php echo "$_SESSION[username]";?> </h1>
        <hr>
        <p>Great Services are waiting for you</p>
        <a href="#">Order now</a>
      </div>
      <div class="topright">
        <a href="signOut.php">Log Out</a>
        <a href="deleteAccount.php">Delete Account</a>
      </div>
    </div>
    
    </body>
 </html>   
