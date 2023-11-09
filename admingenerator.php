<?php
require 'db.php'; // Your database connection file

$username = "admin"; // Replace with the desired admin username
$password = "admin"; // Replace with the desired admin password
$email = "admin@example.com"; // Replace with the desired admin email
$is_admin = 1; // Since this is an admin user, set as integer (1 for true)

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Prepare the insert statement to match your admin table structure
$sql = "INSERT INTO admin (username, password, email, is_admin) VALUES (?, ?, ?, ?)";

if ($stmt = mysqli_prepare($conn, $sql)) {
    // Bind the variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "sssi", $username, $hashed_password, $email, $is_admin);

    // Attempt to execute the prepared statement
    if (mysqli_stmt_execute($stmt)) {
        echo "Admin account created successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close statement
    mysqli_stmt_close($stmt);
} else {
    echo "Error preparing statement: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
