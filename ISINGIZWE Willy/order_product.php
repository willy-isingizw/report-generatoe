<?php 
include "db_connect.php" ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Product</title>
</head>
<body>
    <h1>Please Your Order</h1>
    <form method="POST" action="process_order_product.php" >
        <table border='1'>
            <tr>
                <td>Product Code</td>
                <td>product name</td>
                <td>Product Quantity</td>
                <td>Unity Price</td>
                <td>Order Quantity</td>
            </tr>
            <?php
            $query= mysqli_query($conn,"SELECT * FROM product");
            while($row=mysqli_fetch_assoc($query)){
                echo "<tr>";
                echo "<td>". $row['product_code']. "</td>";
                echo "<td>". $row['product_name']. "</td>";
                echo "<td>". $row['product_quantity']. "</td>";
                echo "<td>". $row['unit_price']. "</td>";
                echo "<td><input type ='number' name='order_quantities[". $row['product_code']."]' min='1' max='".$row['product_quantity']."'value='1'</td>";
            }
            ?>
        </table>
<br><br>
<h1>Place Your Order</h1>
        <label for="cust_name">Customer Name</label>
        <input type="text" name="cust_name" required><br><br>

        <label for="location">Location</label>
        <input type="text" name="location" required><br><br>

        <label for="telephone">Phone Number</label>
        <input type="tel" name="telephone" required><br><br>
        <button type="submit">Place Order</button>
    </form>
    
</body>
</html>