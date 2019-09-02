<?php
    class Student {
        private $a = 100;
        public $b = 99;
        function test(){
            return $this->a + $this->b;
        }
    }

    class Teacher extends Student{

    }
    $t = new Student;
    echo $t->test();

    // $test = new Teacher;
    // echo $test->a;
    // echo $test->test();

