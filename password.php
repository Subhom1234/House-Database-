<?php
// In a real-world scenario, you would validate credentials against a database
// For demonstration purposes, we are using a preset username and password

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve entered credentials
    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];

    // Preset username and password
    $presetUsername = "user123";
    $presetPassword = "securepassword";

    // Check if entered credentials match
    if ($enteredUsername === $presetUsername && $enteredPassword === $presetPassword) {
        echo "Login successful!";
    } else {
        echo "Incorrect username or password. Please try again.";
    }
}
?>