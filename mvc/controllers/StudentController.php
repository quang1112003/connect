<?php

include "models/Student.php";

class StudentController
{
    public function getStudents(){
        $studentObj = new Student();
        $list = $studentObj->all();
        include_once "views/student-list.php";
    }
    public function addStudent(){
        include_once "views/addStudent.php";
    }
}