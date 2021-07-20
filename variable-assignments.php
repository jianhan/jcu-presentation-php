<?php
    // two
    $two = 2;
    var_dump('two is: '. $two);
    echo PHP_EOL;

    $copyOfTwo = $two;
    $copyOfTwo = 3;
    var_dump('two is: '. $two. ' after $copyOfTwo has changed');
    echo PHP_EOL;

    // three
    $three = 3;
    var_dump('three is: '. $three);
    echo PHP_EOL;

    $copyOfThree = &$three;
    $copyOfThree = 4;
    var_dump('three is: '. $three. ' after $copyOfThree has changed');
    echo PHP_EOL;
?>