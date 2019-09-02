<?php
    class Student {
        private $a = 100;
        public $b = 99;
        protected $c = 66;
        function test(){
            // return $this->a + $this->b;
        }
    }

    class Teacher extends Student{
        function qq(){
            echo $this->c;
        }
    }
    $t = new Student;
    echo $t->test();
    // echo $t->c;

    $test = new Teacher;
    // echo $test->a;
    // echo $test->test();
    echo $test->qq();

