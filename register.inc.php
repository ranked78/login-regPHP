<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the submitted username
    $username = $_POST["username"];

    // Perform a check to see if the username already exists in the database
    // You need to replace this code with your own database logic
    $existingUsernames = array("existing_username1", "existing_username2", "existing_username3");

    if (in_array($username, $existingUsernames)) {
        // Username already exists
        echo "Username already taken. Please choose a different username.";
    } else {
        // Username is unique, proceed with registration
        // Your registration logic here
        echo "Registration successful!";
    }
}
?>