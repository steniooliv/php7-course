<?php

function hello($text = "World", $time = "Good Morning") {
    return "Hello $text! $time!<br>";
}

echo hello();

echo hello("Stenio","Good Night");

echo hello("John", "Good Afternoon");


?>