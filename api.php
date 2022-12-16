<?php
//defaults 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginsystem";

$connection = mysqli_connect($servername, $username,$password, $dbname);
$response = array();

//connect to database 
if($connection){
    //fetch data
    $sql = "SELECT * FROM users";
    $result = mysqli_query($connection, $sql);
    if($result){
        header("Content-Type: JSON");
        $i = 0;
        while($row = mysqli_fetch_assoc($result)){
            $response[$i]['id'] = $row['id'];
            $response[$i]['username'] = $row['username'];
            $response[$i]['email'] = $row['email'];
            $response[$i]['password'] = $row['password'];
            $i++;
        }
        //pass data as JSON
        echo json_encode($response, JSON_PRETTY_PRINT);
    }
}
//connection failed
else{
    echo "Database Connection Failed";
}