<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Report</title>

    <script>
        // JavaScript function to print the report
        function printReport() {
            window.print();
        }
    </script>

    <style>
        /* General body styling */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f8fb;
            color: #333;
        }

        /* Header styling */
        header {
            background-color: #2c3e50;
            padding: 20px;
            color: white;
            text-align: center;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        header a {
            color: white;
            margin: 10px;
            padding: 10px 20px;
            text-decoration: none;
            background-color: #16a085;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.2s ease;
            font-weight: bold;
        }

        header a:hover {
            background-color: #138d75;
            transform: scale(1.05);
        }

        /* Page title styling */
        section h1 {
            text-align: center;
            font-size: 2.5rem;
            color: #2c3e50;
            margin: 20px 0;
        }

        /* Table styling */
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        /* Table borders */
        table, th, td {
            border: 1px solid #ddd;
        }

        /* Table header styling */
        table tr:first-child {
            background-color: #16a085;
            color: #fff;
            text-align: center;
            font-size: 1.2rem;
        }

        th, td {
            padding: 15px;
            text-align: center;
        }

        /* Alternating row colors */
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e8f8f5;
        }

        /* Print button styling */
        button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #16a085;
            color: white;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        button:hover {
            background-color: #138d75;
            transform: scale(1.05);
        }

        /* Adjustments for printing */
        @media print {
            header, button {
                display: none;
            }
        }
    </style>
</head>

<body>
    <header>
        <h1>Daily Report</h1>
        <a href="add_product.php">Add Product</a>
        <a href="view_product.php">View Products</a>
        <a href="daily_report.php">View Daily Report</a>
        <a href="logout.php">Logout</a>
    </header>

    <section>
        <h1>you are welcome on  Daily report</h1>
    </section>

    <table>
        <tr>
            <th>Product Code</th>
            <th>Product Name</th>
            <th>Product Quantity</th>
            <th>Unit Price</th>
            <th>Total Price</th>
        </tr>
        
        <?php
        error_reporting(0);
        include "db_connect.php"; // Include the database connection
        $query = mysqli_query($conn, "SELECT * FROM product");

        while ($row = mysqli_fetch_assoc($query)) {
        ?>
            <tr>
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

    <button onclick="printReport()">Print Report</button>

</body>
</html>
