<?php 
    $db_host="localhost";
    $db_user="admin";
    $db_pw="admin";
    $db_name="ntust";

    $conn = mysqli_connect($db_host,$db_user,$db_pw,$db_name)or die('mysql error');
    mysqli_query($conn,"SET NAMES utf8");