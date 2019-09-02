<?php
    include('conn.php');
    include('function.php');
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $store = store($name,$phone,$email);
    header("location:index.php");