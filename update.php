<?php
    include("conn.php");
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $id = $_POST["id"];
    $sql = "UPDATE students 
            SET
            name = '$name',
            phone = '$phone',
            email = '$email'
            WHERE id = {$id}";
    mysqli_query($conn,$sql);
    header("location:index.php");