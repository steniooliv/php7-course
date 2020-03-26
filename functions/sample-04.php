<?php

function hello() {
    $arg = func_get_args();
    return $arg;
}

var_dump(hello("Good Morning", 10));

?>