<?php
    include('conn.php');
    include('student.php');
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $student = new Student;
    $student->store($name,$phone,$email);
    header("location:index.php");