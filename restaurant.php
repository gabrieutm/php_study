<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form</title>
</head>
<body>

    <form action="restaurant.php" method="post">
        <label>Quantity: </label><br>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>
    
</body>
</html>

<?php
    $item = "pizza";
    $price = "15.99";
    $quantity = $_POST["quantity"];
    $total = null;

    echo"You've ordered {$quantity} x {$item}/s <br>";

    $total = $quantity * $price;

    echo"Your total is: \${$total}";
?>