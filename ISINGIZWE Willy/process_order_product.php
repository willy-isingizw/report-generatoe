<?php
include "db_connect.php";
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['order_quantities'])){

    $cust_name=$_POST['cust_name'];
    $location=$_POST['location'];
    $telephone=$_POST['telephone'];
    $order_date=date('Y-m-d H:i:s');
    $insert_order="INSERT INTO orders (order_date) values ('$order_date')";
    if(mysqli_query($conn,$insert_order)){
        $order_number=mysqli_insert_id($conn);

        foreach ($_POST['order_quantities'] as $productcode=>$quantity){
            $query="SELECT * FROM product WHERE product_code='$productcode'";
            $result=mysqli_query($conn,$query);
            $product=mysqli_fetch_assoc($result);


            if($quantity<=$product['product_quantity']){
                $new_quantity=$product['product_quantity']- $quantity;

                $update_product="UPDATE product SET product_quantity='$new_quantity' WHERE product_code='$productcode'";
                mysqli_query($conn,$update_product);

$insert_customer="INSERT INTO customer(cust_name,location,telephone,product_code,order_number,quantity_ordered)
VALUES('$cust_name',' $location',' $telephone','$productcode',' $order_number','$quantity')"; 
mysqli_query($conn,$insert_customer);

           
        }
            else{
                echo"<script>alert('Not enought stock for product:".$product['product_name']."');
                </script>";
            }
        }
        echo"<script>alert('Order placed succesful');
     window.location.href = 'view_product.php';
    </script>";
    }else{
        echo"<script>alert('failed to place order')
     window.location.href = 'order_product.php';
    </script>" ;
    }
}


?>