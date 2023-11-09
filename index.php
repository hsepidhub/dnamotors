<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Our E-Commerce Site</title>
    <style>
        body { font: 14px sans-serif; text-align: center; }
        .navbar { overflow: hidden; background-color: #333; position: relative; }
        .navbar a, .navbar button {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .navbar a.right, .navbar button.right { float: right; }
        .navbar a:hover, .navbar button:hover { background-color: #ddd; color: black; }
        .search-container {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .search-container input[type="text"] {
            padding: 6px;
            margin-top: 8px;
            font-size: 17px;
            border: none;
            outline: none;
        }
        .search-container button {
            padding: 6px 10px;
            margin-top: 8px;
            background: #ddd;
            font-size: 17px;
            border: none;
            cursor: pointer;
        }
        .footer { 
            position: fixed; 
            left: 0; bottom: 0; 
            width: 100%; 
            background-color: #333; 
            color: white; 
            text-align: center; 
            padding: 10px 0; 
        }
        /* Additional styles */
        .content { margin: 20px; }
        .navbar .username {
            padding: 14px 16px;
            pointer-events: none; /* Make the username non-interactive */
            background: none; /* Ensure consistent styling */
            float: none; /* Override float to allow for centering */
            position: absolute;
            top: 0;
            right: 10%;
        }
       
        /* Style for product container */
        .product {
            width: 30%;
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            display: inline-block;
            vertical-align: top;
            box-sizing: border-box;
            text-align: center;
        }

        /* Style for product image */
        .product img {
            max-width: 100%;
            height: auto;
        }

        /* Style for product description */
        .product p {
            margin: 10px 0;
        }
    </style>

</head>
<body>

<div class="navbar">
    <a href="index.php">Home</a>
    <a href="products.php">Products</a>
    <div class="search-container">
        <form action="search.php" method="get">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit">Search</button>
        </form>
    </div>
    <a href="contact_us.php">Contact</a>
    <a href="aboutus.php">About</a>
   
    <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true): ?>
        <?php if($_SESSION["is_admin"]): ?>
            <a href="admin_panel.php" class="right">Admin Panel</a>
        <?php endif; ?>
        <a href="logout.php" class="right">Logout</a>
        <span class="username right">Signed in as: <?php echo htmlspecialchars($_SESSION["username"]); ?></span>
    <?php else: ?>
        <button class="add-to-cart-btn">
    <i class="cart-icon">🛒</i> Add to Cart
</button>

        <a href="user_login.php" class="right">Login</a>
        <a href="signup.php" class="right">Sign Up</a>
    <?php endif; ?>
</div>

<div class="content">
    <h1>Welcome to Our Online Portal For Motor Parts</h1>
    <p>Your one-stop shop for all things shopping!</p>
</div>

<div class="product">
        <img src="img\399939449_1034715707564751_1877026995502142053_n.jpg" alt="product1">
        <h3>Tyres</h3>
        <p>Description of Product 1</p>
        <p>Price: 19.90</p>
        <a href="product1_details.php">View Details</a>
    </div>

    <div class="product">
        <img src="img\399939462_653039900310654_5193523669755840486_n.jpg" alt="Product 2">
        <h3>Brake Wires</h3>
        <p>Description of Product 1</p>
        <p>Price: $15.50</p>
        <a href="product1_details.php">View Details</a>
    </div>
    <div class="product">
        <img src="img\download.jpg" alt="Product 1">
        <h3>Air Filter</h3>
        <p>Description of Product 1</p>
        <p>Price: $10.0</p>
        <a href="product1_details.php">View Details</a>
    </div>

<div class="footer">
    <p>&copy; 2023 Our E-Commerce Site</p>
</div>

</body>
</html>
