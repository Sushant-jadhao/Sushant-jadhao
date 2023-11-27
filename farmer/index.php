<?php
include 'config.php';

// Initialize the session
session_start();

// Check if the Add to Cart button is clicked
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];

    // Retrieve product details from the database
    $sql = "SELECT * FROM products WHERE id = $product_id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $product = $result->fetch_assoc();

        // Add the product to the session cart array
        $_SESSION['cart'][] = array(
            'id' => $product['id'],
            'product_name' => $product['product_name'],
            'price' => $product['price'],
            'quantity' => 1,
        );
    }
}

// Retrieve products from the database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmers Market</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .product {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            width: 200px;
            float: left;
        }

        .cart {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            width: 300px;
            float: right;
        }
    </style>
</head>

<body>
    <h1>Farmers Market</h1>

    <!-- Display products -->
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="product">';
            echo '<h3>' . $row['product_name'] . '</h3>';
            echo '<p>' . $row['description'] . '</p>';
            echo '<p><strong>Price: $' . $row['price'] . '</strong></p>';
            echo '<form method="post">';
            echo '<input type="hidden" name="product_id" value="' . $row['id'] . '">';
            echo '<button type="submit" name="add_to_cart">Add to Cart</button>';
            echo '</form>';
            echo '</div>';
        }
    } else {
        echo '<p>No products available.</p>';
    }
    ?>

    <!-- Display shopping cart -->
    <div class="cart">
        <h2>Shopping Cart</h2>
        <?php
        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $item) {
                echo '<p>';
                echo '<strong>' . $item['product_name'] . '</strong>';
                echo ' - $' . $item['price'];
                echo ' - Quantity: ' . $item['quantity'];
                echo '</p>';
            }
        } else {
            echo '<p>Your cart is empty.</p>';
        }
        ?>
    </div>

</body>

</html>
