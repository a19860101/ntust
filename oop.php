<?php
    class Student {
        public $a = 100;
        public $b = 99;
        function test(){
            return $this->a + $this->b;
        }
    }

    $test = new Student;
    echo $test->test();
