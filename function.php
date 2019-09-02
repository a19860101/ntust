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