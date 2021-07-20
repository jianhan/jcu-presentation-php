<?php
    
    // https://www.php.net/manual/en/language.operators.precedence.php

    // ternary
    $isTodayFriday = true;

    $activity = null;

    if ($isTodayFriday) {
        $activity = 'play basketball';
    } else {
        $activity = '';
    }

    var_dump($activity);

    $activity = $isTodayFriday ? 'play basketball': '';

    var_dump($activity);

    // increment
    $a = 1;
    $a++;
    var_dump($a);

    $a = 1;
    ++$a;
    var_dump($a);

    // increment assignment
    $a = 1;
    $aPlusPlus = $a++;
    var_dump('$aPlusPlus is ',$aPlusPlus);

    $a = 1;
    $plusPlusA = ++$a;
    var_dump('$plusPlusA is ',$plusPlusA);

    // https://www.php.net/manual/en/language.operators.increment.php

    // Associativity
    $a = 1;

    $a = 1 + 2 * 3;
    var_dump($a);

    $a = 5 * 10 / 10;
    var_dump($a);

    // comparison
    $one = 1;
    $oneStr = '1';
    var_dump($one == $oneStr);
    var_dump($one === $oneStr);

?>