<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
<div class="navbar">
        <a href="home.html">Home</a>
        <a href="register.php">Register</a>
    </div>
    <h2 style="font-family: 'Times New Roman', Times, serif; font-size: 20px; color: crimson;">
        <?php
        if (isset($_SESSION["message"])) {
            echo "$_SESSION[message]";
            unset($_SESSION["message"]);
        }
        ?>
    </h2>
    <h1 style="text-align: center;">Login Form</h1>
    <div class="container">
        <form action="loginAction.php" method="post">
            <label for="email"><b>Email</b></label>
            <input type="email" name="email" required />
            <label for="password"><b>Password</b></label>
            <input type="password" name="password" required />
            <input type="submit" value="Login">
            <span class="psw">Don't have an account ?<a href="register.html">Register Now</a></span>
        </form>
</body>

</html>