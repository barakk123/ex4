<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Barak Daniel edit</title>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $product_name = $_GET["product_name"];
            $product_color = $_GET["product_color"];
            $product_size = $_GET["product_size"];

            // Check if all fields are filled
            if (empty($product_name) || empty($product_color) || empty($product_size)) {
                echo "<p>Please fill out all fields.</p>";
            }
            else {
                // Check if the selected color is available in stock
                $available_colors = array("red", "blue", "green");
                if (in_array($product_color, $available_colors)) {
                echo "<p>Product updated successfully!</p>";
                }
                else {
                echo "<p>Selected color is not available.</p>";
                }
            }
        }
    ?>
</body>
</html>
