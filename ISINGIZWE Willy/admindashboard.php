<?php echo "<center>";
include "session.php";
echo "</center>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f4f6;
            color: #333;
    
        }

        h1 {
            background:orangered;
            color: white;
            padding: 20px;
            text-align: center;
            margin: 20px 0;
            font-size: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .button-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 20px auto;
            gap: 15px;
        }

        a {
            text-decoration: none;
            color: white;
            background-color: #17a2b8;
            padding: 15px 30px;
            font-size: 16px;
            border-radius: 50px;
            text-align: center;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        a:hover {
            background-color: #138496;
            transform: translateY(-3px);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
        }

        @media (max-width: 768px) {
            a {
                flex: 1 1 80%;
                padding: 12px;
            }
        }
    </style>
</head>
<body>

  <h1>Welcome to Admin Dashboard</h1>
  
  <!-- <p>Logged as: <?php echo $_SESSION['username']; ?></p> -->

  <div class="button-container">
    <a href="add_product.php">Add Product</a>
    <a href="view_product.php">View Products</a>
    <a href="daily_report.php">View Daily Report</a>
    <a href="logout.php">Logout</a>
  </div>

</body>
</html>
