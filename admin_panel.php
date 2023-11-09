<?php
session_start();

if (!isset($_SESSION["is_admin"]) || $_SESSION["is_admin"] !== true) {
    header("location: admin_login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <!-- Include additional styles and scripts here if necessary -->
</head>
<body>
    <h1>Welcome to the Admin Panel</h1>
    <p>Hello, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to the site.</p>
    <p>
        <a href="logout.php">Sign Out of Your Account</a>
    </p>

    <!-- Admin Panel Links -->
    <ul>
        <li><a href="manage_users.php">Manage Users</a></li>
        <li><a href="manage_products.php">Manage Products</a></li>
        <li><a href="manage_orders.php">Manage Orders</a></li>
        <li><a href="reports.php">Reports</a></li>
        <!-- Add more links or content as needed -->
    </ul>

    <!-- Admin Panel Content -->
    <!-- This is where you would include your CRUD operation interfaces for the admin -->
</body>
</html>
