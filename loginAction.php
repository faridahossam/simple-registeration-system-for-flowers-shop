<?php
session_start();
//defaults 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginsystem";

$connection = mysqli_connect($servername, $username, $password, $dbname);

//database connection successful
if ($connection) {
    //check if the user already exists
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $query = "SELECT * FROM users WHERE email = '$_POST[email]'";
    $result = $connection->query($query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            header("location: welcome.php");
        } else {
            $_SESSION['message'] = "Wrong Credentials!Please try again";
            header("location: login.php");
            exit();
        }
    } else {
        $_SESSION['message'] = "User not Found";
        header("location: login.php");
    }
    $connection->close();
}


//database connection failed
elseif (mysqli_connect_error()) {
    exit("Database Connection Error" . mysqli_connect_error());
}