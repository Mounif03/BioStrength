<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["contact"])) {
    $conn = mysqli_connect('localhost', 'root', '', 'BioStrength') or die('Connection Failed: ' . mysqli_connect_error());

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $sql = "INSERT INTO `contact_messages` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "<script>alert('Your message has been sent successfully!'); window.location.href='../contact.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "'); window.location.href='../contact.php';</script>";
    }

    mysqli_close($conn);
}
