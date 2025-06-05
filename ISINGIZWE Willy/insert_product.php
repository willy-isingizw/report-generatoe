<?php
include "db_connect.php" ;


$productname=$_POST['productname'];
$pquantity=$_POST['pquantity'];
$punityprice=$_POST['punityprice'];
$tatalprice=$pquantity*$punityprice;

$sql= ("INSERT INTO product(product_name,product_quantity,unit_price,total_price) 

VALUES('$productname','$pquantity','$punityprice','$tatalprice')");

if($conn->query($sql)=== true){
    echo"<script>alert('Product inserted succesful')
     window.location.href = 'view_product.php';
    </script>";
}
else{
     echo"<script>alert('Inserted product failed')
         window.location.href = 'add_product.php';
     </script>".$sql."<br>".$conn->error;

}

$conn->close();
?>