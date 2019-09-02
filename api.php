<?php
    include('conn.php');
    include('student.php');

    $student = new Student;
    $row = $student->showAll();
    echo json_encode($row);