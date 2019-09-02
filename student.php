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
        function store($name,$phone,$email){
            $sql = "INSERT INTO students(name,phone,email)
            VALUES('$name','$phone','$email')";
            mysqli_query($this->connect(),$sql);
        }
        function delete($id){
            $sql = "DELETE FROM students WHERE id = {$id}";
            mysqli_query($this->connect(),$sql);
        }
    }
