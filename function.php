<?php

    // arguments vs parameter

    /**
     * add function perform addition on two numbers 
     *
     * @param int $x
     * @param int $y
     * @return int
     */
    function add(int $x, int $y): int {
        return $x + $y;
    }

    $result = add(1, 2);

    // default pass by value
    function inc(int $x): int {
        $x = $x + 1;

        return $x;
    }

    $a = 1;
    var_dump('$a is init as: '.$a);
    $resultOfInc = inc($a);
    var_dump('after inc function call, $a is : '.$a);

    // pass by reference
    function incRef(int &$x) {
        $x = $x + 1;
    }
    $b = 1;
    var_dump('$b is init as: '.$b);
    $resultOfInc = incRef($b);
    var_dump('after incRef function call, $b is : '.$b);

    // first class citizen old school way
    $arr = [1, 2, 3];
    var_dump('$arr is ', $arr);

    function incArr(array $arr): array {
        $output = [];
        foreach ($arr as $value) {
            $output[] = $value + 1;
        }

        return $output;
    }
    $incrementedArr = incArr($arr);
    var_dump('$incrementedArr is ', $incrementedArr);

    function doubleArr(array $arr): array {
        $output = [];
        foreach ($arr as $value) {
            $output[] = $value * 2;
        }

        return $output;
    }
    $doubledArr = doubleArr($arr);
    var_dump('$doubledArr is ', $doubledArr);

    // first class citizen new way with map
    $incFunc = function(int $x) {
        return $x + 1;
    };

    $doubleFunc = function(int $x) {
        return $x * 2;
    };

    function mapArr(array $arr, callable $func) {
        $output = [];
        foreach ($arr as $value) {
            $output[] = $func($value);
        }

        return $output;
    }

    $incrementedArr = mapArr($arr, $incFunc);
    var_dump('after mapArr $incrementedArr is ', $incrementedArr);

    $doubledArr = mapArr($arr, $doubleFunc);
    var_dump('after mapArr $doubledArr is ', $doubledArr);

?>