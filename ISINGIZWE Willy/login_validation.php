<?php
include "db_connect.php";
 include "session.php";

$username = $_POST['username'];
$password = $_POST['password'];

//selecting matching result in databse

$sql_query = mysqli_query($conn,"SELECT * FROM user
 WHERE user_name='$username' and user_password='$password' ");

if(mysqli_num_rows($sql_query)>0){
    $result = mysqli_fetch_assoc($sql_query);

    $_SESSION['username'] = $username;
    echo "<script>
    alert('Login Sucessfully');
    window.location.href = 'admindashboard.php';
    </script>";
}else{
    echo"<script>
    alert('Failed to login');
    window.location.href = 'index.php';
    </script>";
}
?>



