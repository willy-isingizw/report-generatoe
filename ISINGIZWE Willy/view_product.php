<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <style>
        /* General body styling */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f0f8f7;
            color: #333;
        }

        /* Header styling */
        h1 {
            text-align: center;
            font-size: 2.5rem;
            background:grey;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin: 20px 0;
        }

        /* Table styling */
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color:grey;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        /* Table borders */
        table, th, td {
            border: 1px solid #ddd;
        }

        /* Table header */
        table tr:first-child {
            background-color: grey;
            color: #fff;
            text-align: left;
            font-size: 1.2rem;
        }

        th, td {
            padding: 15px;
            text-align: center;
        }

        /* Alternating row colors */
        tr:nth-child(even) {
            background-color: #e9f9f8;
        }

        tr:hover {
            background-color: #d7f2f1;
        }

        /* Action links */
        a {
            text-decoration: none;
            color:black;
            font-weight: bold;
            transition: color 0.3s, transform 0.2s;
        }

        a:hover {
            color: #138496;
            text-decoration: underline;
            transform: scale(1.1);
        }

        /* Wrapper for the table */
        .table-wrapper {
            overflow-x: auto;
        }

        /* Media Query for Smaller Screens */
        @media (max-width: 768px) {
            table {
                font-size: 14px;
            }

            th, td {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
   <?php include "admindashboard.php"; ?>
   <h1>Product Management</h1>
   <div class="table-wrapper">
       <table>
           <tr>
               <th>Actions</th>
               <th>Product Code</th>
               <th>Product Name</th>
               <th>Product Quantity</th>
               <th>Unit Price</th>
               <th>Total Price</th>
           </tr>
           <?php
           error_reporting(0);
           include "db_connect.php";
           $query = mysqli_query($conn, "SELECT * FROM product");
           while ($row = mysqli_fetch_assoc($query)) {
               ?>
               <tr>
                   <td>
                       <a href="update_product.php?product_code=<?php echo $row['product_code']; ?>">Update</a> |
                       <a href="delete_product.php?product_code=<?php echo $row['product_code']; ?>">Delete</a>
                   </td>
                   <td><?php echo $row['product_code']; ?></td>
                   <td><?php echo $row['product_name']; ?></td>
                   <td><?php echo $row['product_quantity']; ?></td>
                   <td><?php echo $row['unit_price']; ?></td>
                   <td><?php echo $row['total_price']; ?></td>
               </tr>
               <?php
           }
           ?>
       </table>
   </div>
</body>
</html>
