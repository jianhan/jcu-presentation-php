<?php

class Student {
    public $name = '';
    public $gender = null;
    public $courseResults = [];
    public $attendanceRate = 0;
}

class University {

    public $name = '';

    public $address = '';

    public $students = [];

}


function createJamesCookUniversity(): University {
    // students
    $andy = new Student();
    $andy->name = 'Andy';
    $andy->gender = 'Male';
    $andy->courseResults = ['Games Design' => 'D', 'Information Security' => 'P', 'Data mining' => 'F'];

    $bella = new Student();
    $bella->name = 'Bella';
    $bella->gender = 'Female';
    $bella->courseResults = ['Games Design' => 'Cr', 'Information Security' => 'HD', 'Data mining' => 'D'];

    $charlie = new Student();
    $charlie->name = 'Charlie';
    $charlie->gender = 'Male';
    $charlie->courseResults = ['Games Design' => 'F', 'Information Security' => 'D', 'Data mining' => 'Cr'];

    // university
    $jamesCookUniversity = new University();
    $jamesCookUniversity->name = 'James Cook University';
    $jamesCookUniversity->address = 'Ground Floor/349 Queen St, Brisbane City QLD 4000';
    $jamesCookUniversity->students = [$andy, $bella, $charlie];

    // return

    return $jamesCookUniversity;
}
