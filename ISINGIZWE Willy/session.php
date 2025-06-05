<?php
session_start();

echo "<h2>"."Your profile is: ".$_SESSION['username']."<br>";

if(!isset($_SESSION['username'])){
    //Redirect to ligin
    header("location:index.php");
    
}
?>