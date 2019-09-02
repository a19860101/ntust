<?php
    include('conn.php');
    include('student.php');

    $student = new Student;
    
    if(isset($_GET["student"])&&$_GET["student"]=='all'){
        $row = $student->showAll();
        echo json_encode($row);
    }
    
  