<?php
include "db_connect.php" ;


$username=$_POST['username'];
$password=$_POST['password'];
$sql= ("INSERT INTO user(user_name,user_password) 
VALUES('$username','$password')");

if($conn->query($sql)=== true){
    echo"<script>alert('Account created succesful')
     window.location.href = 'index.php';
    </script>";
}
else{
     echo"<script>alert('Account created failed');
 window.location.href = 'create_account.php';
     </script>".$sql."<br>".$conn->error;

}

$conn->close();
?>