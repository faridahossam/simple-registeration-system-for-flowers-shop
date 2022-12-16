<?php
session_start();
//defaults 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginsystem";

$connection = mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_error()) {
    exit("Database Connection Error" . mysqli_connect_error());
}
$query="DELETE FROM users WHERE id=$_SESSION[user_id]";
$result = $connection->query($query);

header("location:home.html");