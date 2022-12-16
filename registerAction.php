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
    //if all fields are not set
    if (!isset($_POST['username'], $_POST['email'], $_POST['password'], $_POST['confirmPassword'])) {
        exit("Please fill all data fields");
    }

    // check if password and confirm password are identical
    if ($_POST['confirmPassword'] != $_POST['password']) {
        $_SESSION["message"]="confirm password does not match entered password";
        header("location: register.php");
        exit();
    }

    //check if the user already exists
    if ($checkUser = $connection->prepare("SELECT id , password FROM users WHERE username = ?")) {
        $checkUser->bind_param('s', $_POST['username']);
        $checkUser->execute();
        $checkUser->store_result();

        //duplicate entry
        if ($checkUser->num_rows() > 0) {
            $_SESSION["message"]="User already exists";
            header("location: register.php");
            exit();
        }

        //new user
        else {
            if (
                $checkUser = $connection->prepare("INSERT INTO users (username,email,password) 
            VALUES (?,?,?)")
            ) {
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $checkUser->bind_param('sss', $_POST['username'], $_POST['email'], $password);
                $checkUser->execute();
                $_SESSION['username'] = $_POST['username'];
                header("location:welcome.php");
            } else {
                $_SESSION["message"]= "Sorry! Error Occurred.Please try again .";
                header("location:register.php");
                exit();
            }
        }
    } else {
        echo "Error Occurred";
    }
    $connection->close();
}


//database connection failed
elseif (mysqli_connect_error()) {
    exit("Database Connection Error" . mysqli_connect_error());
}