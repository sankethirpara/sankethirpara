<?php 
    include("../connection/connection.php");
    session_start();
    session_destroy();
    header("location:../index.php");
 
?>