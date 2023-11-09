<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Motor Parts Store - Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        h1, h2 {
            text-align: center;
        }

        .products-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .product {
            width: calc(25% - 20px);
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 10px;
        }

        .product h3 {
            color: #333;
        }

        .product p {
            color: #777;
        }

        .product a {
            display: block;
            text-align: center;
            margin-top: 10px;
            background-color: #007bff;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
        }

        .product a:hover {
            background-color: #0056b3;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>Welcome to our Motor Parts Store</h1>
    <h2>Products</h2>

    <div class="products-container">
        <?php
        // In a real application, you would fetch product data from a database
        // For simplicity, we'll use an array with sample product data in this example
        $products = [
            ['id' => 1, 'name' => 'Brake Pads', 'description' => 'High-quality brake pads for your vehicle.', 'price' => 25.99],
            ['id' => 2, 'name' => 'Oil Filter', 'description' => 'Oil filter for engine maintenance.', 'price' => 9.99],
            ['id' => 3, 'name' => 'Spark Plugs', 'description' => 'Spark plugs for improved engine performance.', 'price' => 5.49],
            ['id' => 4, 'name' => 'Air Filter', 'description' => 'Air filter for clean air intake.', 'price' => 8.99],
            // Add more products as needed
        ];

        // Loop through the products and display them
        foreach ($products as $product) {
            echo '<div class="product">';
            echo '<h3>' . $product['name'] . '</h3>';
            echo '<p>' . $product['description'] . '</p>';
            echo '<p>Price: $' . number_format($product['price'], 2) . '</p>';
            echo '<a href="buy.php?id=' . $product['id'] . '">Buy Now</a>';
            echo '</div>';
        }
        ?>
    </div>

    <!-- You can add more content, filters, or sorting options as needed -->

    <!-- Footer section -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Motor Parts Store</p>
    </footer>
</body>
</html>
