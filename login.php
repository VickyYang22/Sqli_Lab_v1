<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "admin';#" || $password == "'or'1'='1''") {
        header("Location: home.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }
}
?>