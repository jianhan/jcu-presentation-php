<?php

function fillAttendanceRateRevised(University $university) {
    $students = $university->getStudents();
    $studentsCount = count($students);

    for($i = 0; $i < $studentsCount; $i++) {
        switch ($students[$i]->getName()) {
            case 'Andy':
                $students[$i]->setAttendanceRate('0.5');
                break;
            case 'Bella':
                $students[$i]->setAttendanceRate('0.9');
                break;
            case 'Charlie':
                $students[$i]->setAttendanceRate('0.3');
                break;
        }
    }
}