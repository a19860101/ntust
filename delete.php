<?php
    include("conn.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM students WHERE id = {$id}";
    mysqli_query($conn,$sql);
    header("location:index.php");