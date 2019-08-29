<?php
    include('conn.php');
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $sql = "INSERT INTO students(name,phone,email)
    VALUES('$name','$phone','$email')";
    mysqli_query($conn,$sql);