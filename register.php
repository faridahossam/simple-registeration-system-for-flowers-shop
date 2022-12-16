<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Registeration Page</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
<div class="navbar">
        <a href="home.html">Home</a>
        <a href="login.php">Login</a>
    </div>
    <h2 style="font-family: 'Times New Roman', Times, serif; font-size: 20px; color: crimson;">
        <?php
        if (isset($_SESSION["message"])) {
            echo "$_SESSION[message]";
            unset($_SESSION["message"]);
        }
        ?>
    </h2>
    <h1 style="text-align: center;">Register Form</h1>
    <div class="container">
        <form action="registerAction.php" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" placeholder="username" required />
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="email" required>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="password" required />
            <label for="confirmPassword">Confirm Password</label>
            <input type="password" name="confirmPassword" placeholder="confirm password" required>
            <input type="submit" value="Register">
        </form>
    </div>
</body>

</html>