<?php

class Student {

    private $name;
    private $gender;
    private $courseResults;
    private $attendanceRate;

    public function __construct(string $name, string $gender, array $courseResults = []) {
        $this->name = $name;
        $this->gender = $gender;
        $this->courseResults = $courseResults;
        $this->attendanceRate = 0;
    } 

    public function getName(): string {
        return $this->name;
    }

    public function getGender(): string {
        return $this->gender;
    }

    public function getCourseResults(): array {
        return $this->courseResults;
    }

    public function setAttendanceRate($attendanceRate): void {
        $this->attendanceRate = $attendanceRate;
    }

    public function getAttendanceRate() {
        return $this->attendanceRate;
    }
}

class University {

    private $name;
    private $address;
    private $students;

    public function __construct(string $name, string $address) {
        $this->name = $name;
        $this->address = $address;
    }

    public function addStudent(Student $student): void {
        $this->students[] = $student;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getAddress(): string {
        return $this->address;
    }

    public function getStudents(): array {
        return $this->students;
    }
}


function createJamesCookUniversity(): University {
    // students
    $andy = new Student('Andy', 'Male', ['Games Design' => 'D', 'Information Security' => 'P', 'Data mining' => 'F']);
    $bella = new Student('Bella', 'Female', ['Games Design' => 'Cr', 'Information Security' => 'HD', 'Data mining' => 'D']);
    $charlie = new Student('Charlie', 'Male', ['Games Design' => 'F', 'Information Security' => 'D', 'Data mining' => 'Cr']);

    // university
    $jamesCookUniversity = new University('James Cook University', 'Ground Floor/349 Queen St, Brisbane City QLD 4000');
    $jamesCookUniversity->addStudent($andy);
    $jamesCookUniversity->addStudent($bella);
    $jamesCookUniversity->addStudent($charlie);

    return $jamesCookUniversity;
}
