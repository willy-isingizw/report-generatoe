<?php 
include "db_connect.php";
$pcode = $_GET['product_code'];
$delete_query = "DELETE FROM product where product_code='$pcode' ";




if(mysqli_query($conn,$delete_query)){
    echo"<script> 
    alert('Product deleted succesful')
     window.location.href = 'view_product.php';
    </script>";
}else{
     echo"<script>
     alert('failed to delete a product');
 window.location.href = 'view_product.php';
     </script> ";
    }
?>