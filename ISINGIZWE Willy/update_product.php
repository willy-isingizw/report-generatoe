<?php
include "admindashboard.php";
?>
<?php
$pcode= $_GET['product_code'];
include "db_connect.php"; 
$sql_command = mysqli_query($conn,"SELECT * from product where product_code='$pcode' ");
while($row=mysqli_fetch_assoc($sql_command)){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <style>
form {
    background-color: #fff;
    padding: 20px 30px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
}

/* Form labels */
label {
    font-weight: bold;
    display: block;
    margin-bottom: 8px;
    font-size: 14px;
    color: #555;
}

/* Form inputs */
input[type="text"], 
input[type="number"] {
    width: 100%;
    padding: 10px;
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
    background-color:rgb(255, 0, 212);
    color: white;
    padding: 10px;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    font-weight: bold;
    text-transform: uppercase;
}

input[type="submit"]:hover {
    background-color:rgb(179, 0, 155);
}

/* Responsive adjustments */
@media (max-width: 480px) {
    form {
        padding: 15px 20px;
    }
}

    </style>
    <body>
        <form action="update_product_backend.php" method="POST">
            <input type="hidden" name="pcode" value="<?php echo $row['product_code'];?>">

            <label for="">Product Name</label> <br>
            <input type="text" name="productname" value="<?php echo $row['product_name'];?>"><br>
    
            <label for="">Product quantity</label> <br> 
            <input type="number" name="pquantity" value="<?php echo $row['product_quantity'];?>"><br><br>
            
            <label for="">Unity_price</label> <br> 
            <input type="number" name="punitprice" value="<?php echo $row['unit_price'];?>"><br><br>
        <input type="submit" value="Update Product"> <br>

       
        </form>
    <?php } ?>
    </body>
    </html>