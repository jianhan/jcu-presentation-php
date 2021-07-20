<?php
$a = 1; /* global scope */ 

function echoA()
{ 
    echo $a; /* reference to local scope variable */ 
} 

function echoGlobalA() {
    global $a;
    echo $a;
}

function echoAWithParameter($a) {
    echo $a;
}

echoGlobalA();
echo PHP_EOL;
echoAWithParameter('Hello');
echo PHP_EOL;
echoA();
?>