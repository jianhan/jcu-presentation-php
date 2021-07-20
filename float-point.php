<?php
$x = 8 - 6.4;
$y = 1.6;
var_dump("is $x == $y",$x == $y);
echo PHP_EOL;

$roundedX = round($x, 2);
$roundedY = round($y, 2);
var_dump("is $roundedX == $roundedY",$roundedX == $roundedY);
echo PHP_EOL;

$a = 0.1 + 0.3;
$b = 0.4;
var_dump("is $a == $b",$a == $b);
echo PHP_EOL;

$c = 0.1;
$d = 0.1;
var_dump("is $c == $d",$c == $d);
echo PHP_EOL;
?>