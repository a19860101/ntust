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
        function show($id){
            $sql = "SELECT * FROM students WHERE id = {$id}";
            $result = mysqli_query($this->connect(),$sql);
            $row = mysqli_fetch_assoc($result);
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
        function update($name,$phone,$email,$id){
            $sql = "UPDATE students 
                    SET name='$name',phone='$phone',email='$email' 
                    WHERE id = {$id} ";
            mysqli_query($this->connect(),$sql);
        }
    }
