<?php

function fillAttendanceRate(University $university) {

    $studentsCount = count($university->students);

    for($i = 0; $i < $studentsCount; $i++) {
        switch ($university->students[$i]->name) {
            case 'Andy':
                $university->students[$i]->attendanceRate = '0.5';
                break;
            case 'Bella':
                $university->students[$i]->attendanceRate = '0.9';
                break;
            case 'Charlie':
                $university->students[$i]->attendanceRate = '0.3';
                break;
        }
    }
}