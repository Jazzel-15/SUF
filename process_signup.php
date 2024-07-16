<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate the inputs
    if (!preg_match("/^[a-zA-Z]+$/", $first_name)) {
        die("First name should contain only alphabets.");
    }

    if (!preg_match("/^[a-zA-Z]+$/", $last_name)) {
        die("Last name should contain only alphabets.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    if (!preg_match("/^\+?[1-9]\d{0,12}$/", $phone)) {
        die("Invalid phone number format.");
    }

    if ($password !== $confirm_password) {
        die("Passwords do not match.");
    }

    if (!preg_match("/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@#$&!])[A-Za-z\d@#$&!]+$/", $password)) {
        die("Password must contain at least one alphabet, one number, and one special character (@#$&!).");
    }

    // Simulate saving to a database
    // In real application, you would save the data to a database here

    // Redirect to the confirmation page with the data
    header("Location: confirmation.php?first_name=" . urlencode($first_name) . "&last_name=" . urlencode($last_name) . "&email=" . urlencode($email) . "&phone=" . urlencode($phone));
    exit();
}
?>