<?php
    class Student
    {
       function __construct($name, $age){
            $this->name = $name;
            if($age < 4){
                throw new Exception("Student is too young", 1001);
            }elseif($age > 18){
                throw new Exception("Student is too old", 1002);
            }
            $this->age = $age;
        }
    }

    try{
        $student = new Student("John", 100);
    }catch(Exception $e){
        echo $e->getMessage();
        echo $e->getCode();
    } 