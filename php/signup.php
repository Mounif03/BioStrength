<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signUp"])) {
    $conn = mysqli_connect('localhost', 'root', '', 'BioStrength') or die('Connection Failed: ' . mysqli_connect_error());

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "INSERT INTO `usersinfo` (`username`, `password`) VALUES ('$username', '$password')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header("Location: ../login.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
