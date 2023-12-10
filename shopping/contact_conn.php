<?php
session_start();
require 'connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["send"])) {
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $message = $_POST["msg"];

    $sql = "INSERT INTO contact_messages (name, email, number, message) VALUES ('$name', '$email', '$number', '$message')";

    if ($con->query($sql) === TRUE) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $con->close();
}
?>
