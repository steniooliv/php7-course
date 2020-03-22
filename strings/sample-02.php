<?php

$name = "stenio oliveira";

echo $name;
echo "<br>";

//uppercase
echo strtoupper($name);
echo "<br>";

//lowercase
echo strtolower($name);
echo "<br>";

//uppercase on first word
$name = ucfirst($name);
echo $name;
echo "<br>";

//uppercase in each word
$name = ucwords($name);
echo $name;
echo "<br>";

?>