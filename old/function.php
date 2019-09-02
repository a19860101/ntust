<?php
    function showAll(){
        global $conn;
        $sql = "SELECT * FROM students";
        $result = mysqli_query($conn,$sql);
        $row = array();
        while($rows = mysqli_fetch_assoc($result)){
            $row[] = $rows;
        }
        return $row;
    }
    function store($name,$phone,$email){
        global $conn;
        $sql = "INSERT INTO students(name,phone,email)
        VALUES('$name','$phone','$email')";
        mysqli_query($conn,$sql);
    }