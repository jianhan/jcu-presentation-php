<?php

    // define
    define('PI', 3.1415926);
    var_dump(PI);

    function circumference($radius) {
        return 2 * PI * $radius;
    }

    var_dump(circumference(12));

    // conditional
    $monday = 1;
    $tuesday = 2;
    $wednesday = 3; 
    $thursday = 4;
    $friday = 5;
    $saturday = 6;
    $sunday = 7;

    $weekDay = rand(1, 12);
    var_dump('$weekDay is '.$weekDay);

    $activity = null;

    // if condition
    if ($weekDay === $monday) {
        $activity = 'Watch movie';
    }
    var_dump('activity is (after if statement): '. $activity);

    // switch condition
    switch($weekDay) {
        case 1:
            $activity = 'Watch movie';
            break;
        case 2:
            $activity = 'Play video game';
            break;
        case 3:
            $activity = 'Hangout with friends';
            break;
        case 4:
            $activity = 'Study';
            break;
        case 5:
            $activity = 'Drinking';
            break;
        case 6:
            $activity = 'Shopping';
            break;
        case 7:
            $activity = 'Clean room';
            break;
        default:
            $activity = 'Do nothing';
    }
    var_dump('activity is (after switch statement) is: '. $activity);

    // loop
    $weekDays = [$monday, $tuesday, $wednesday, $thursday, $friday, $saturday, $sunday];
    var_dump($weekDays);

    // foreach
    foreach ($weekDays as $index => $weekDay) {
        var_dump('in foreach loop, index is '.$index. ' - $weekDay is :'. $weekDay);
    }

    // array access by index
    $valueForMonday = $weekDays[0];
    var_dump('value for monday is: '. $valueForMonday);

    // for loop
    $sizeOfWeekDays = count($weekDays);
    for ($i = 0; $i < $sizeOfWeekDays; $i++) {
        var_dump('in for loop, index is '.$i. ' - $weekDay is :'. $weekDays[$i]);
    }

    // while
    $index = 0;
    while($index < $sizeOfWeekDays) {
        var_dump('in while loop, index is '.$index. ' - $weekDay is :'. $weekDays[$index]);
        $index++;
    }

?>