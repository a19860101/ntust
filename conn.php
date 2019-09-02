<?php 
    class DB {
        public $db_host="localhost";
        public $db_user="admin";
        public $db_pw="admin";
        public $db_name="ntust";

        function connect(){
            $conn = mysqli_connect($this->db_host,$this->db_user,$this->db_pw,$this->db_name)or die('mysql error');
            mysqli_query($conn,"SET NAMES utf8");
            return $conn;
        }
    }