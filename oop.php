<?php
    class Student {
        public $a = 100;
        public $b;
        function test(){
            echo "hello";
        }
    }

    $test = new Student;
    echo $test->b = 999;
    echo $test->test();
    $test2 = new Student;
    echo $test->b = 123123123;
    echo $test->test();