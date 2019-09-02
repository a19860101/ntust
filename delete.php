<?php
    include('conn.php');
    include('student.php');
    $id = $_GET["id"];
    $student = new Student;
    $student->delete($id);
    header("location:index.php");