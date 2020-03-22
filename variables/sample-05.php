<?php

//variables scope
$name = "Glaucio";

function test() {
    
    global $name;
    echo $name;

}

test();

function test2() {

    $name = "João";
    echo $name;

}

test2();

?>