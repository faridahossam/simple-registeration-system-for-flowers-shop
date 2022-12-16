<?php
session_start();
unset($_SESSION["user_id"]);
unset($_SESSION["username"]);
unset($_SESSION["message"]);
header("Location:home.html");
exit();
?>