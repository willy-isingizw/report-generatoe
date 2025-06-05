<?php
$conn=new mysqli("localhost","root","","customer_info");
if($conn->connect_error){
    die("connect error".$conn->connect_error);
}
?>