<?php
// Database connection
include "db_connect.php";
 
//Get form data
$pcode= $_POST['pcode'];
$productname= $_POST['productname'];
$pquantity=$_POST['pquantity'];
$punitprice=$_POST['punitprice'];
//calculate total price
$total_price=$pquantity*$punitprice;

//update query

$sql_command = "UPDATE product SET product_name='$productname',product_quantity='$pquantity', 
unit_price='$punitprice',total_price='$total_price' WHERE product_code='$pcode' ";

if(mysqli_query($conn,$sql_command)){
    echo "<script>
    alert('Product updated succesful');
 window.location.href = 'view_product.php';
    </script>";
}else{
    echo"<script>
    alert('Failed to update product');
   window.location.href = 'view_product.php';
    </script>".$sql_command."<br>".$conn->error;
}
$conn->close();

