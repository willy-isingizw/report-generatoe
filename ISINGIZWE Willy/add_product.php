<?php
include "db_connect.php";
include "session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <style>
        /* General body styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9; /* Light background for contrast */
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-repeat: no-repeat;
            
        }

        /* Form container */
        form {
            background-color: gainsboro;
            padding: 30px 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        /* Form labels */
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            color: #333;
            text-align: left;
        }

        /* Form inputs */
        input[type="text"], 
        input[type="number"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
            color: #333;
        }

        /* Submit button */
        input[type="submit"] {
            width: 100%;
            background-color:blue;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            font-weight: bold;
            text-transform: uppercase;
        }

        input[type="submit"]:hover {
            background-color:rgb(179, 0, 170); /* Darker blue for hover effect */
        }

        /* Responsive design */
        @media (max-width: 480px) {
            form {
                padding: 20px 25px;
            }
        }
    </style>
</head>
<body>
    <form action="insert_product.php" method="POST">
        <label for="productname">Product Name</label>
        <input type="text" name="productname" id="productname" required><br><br>

        <label for="pquantity">Product Quantity</label>
        <input type="number" name="pquantity" id="pquantity" required><br><br>

        <label for="punityprice">Product Unity Price</label>
        <input type="number" name="punityprice" id="punityprice" required><br><br>

        <input type="submit" value="Add Product">
    </form>
</body>
</html>
