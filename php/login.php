<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $conn = mysqli_connect('localhost', 'root', '', 'BioStrength') or die('Connection Failed: ' . mysqli_connect_error());

    $username = $_POST["username"];
    $password =  $_POST["password"];

    $sql = "SELECT `password` FROM `usersinfo` WHERE `username`='$username'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($password == $row['password']) {
            $_SESSION['username'] = $username;
            header("index.php");
        } else {
            echo "Invalid username or password.";
        }
    } else {
        echo "Invalid username or password.";
    }

    mysqli_close($conn);
}
