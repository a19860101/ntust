<?php
    include("conn.php");
    include("student.php");
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $id = $_POST["id"];
        $student = new Student;
        $student->update($name,$phone,$email,$id);
    header("location:index.php");