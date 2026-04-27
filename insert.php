<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Process the form data (e.g., save to database, send email, etc.)
    // This is a simple example - replace with your actual logic

    echo "Email: " . $email . "<br>";
    echo "Password: " . $password . "<br>";
?>