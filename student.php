<?php
    class Student extends DB {
        function showAll(){
            $sql = "SELECT * FROM students";
            $result = mysqli_query($this->connect(),$sql);
            $row = array();
            while($rows = mysqli_fetch_assoc($result)){
                $row[] = $rows;
            }
            return $row;
        }
    }
