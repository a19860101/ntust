<?php 
    class DB {
        public $db_host="localhost";
        public $db_user="admin";
        public $db_pw="admin";
        public $db_name="ntust";

        function connect(){
            $conn = mysqli_connect($db_host,$db_user,$db_pw,$db_name)or die('mysql error');
            mysqli_query($conn,"SET NAMES utf8");
        }
        return $conn;
    }
    

    