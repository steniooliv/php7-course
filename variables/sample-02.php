<?php

//Rules for variables
//First word and lowercase and second and uppercase

$yearBirthday = 1990;
$monthBirthday = 6;
$dayBirthday = 8;

$name1 = "João";

$lastname = "Rangel";

//Concatenate name with last name
$fullName = $name1 . " " . $lastname;

echo $fullName;

exit;

//Variables of system, it cannot be used
// $this;

echo $name1;

echo "<br/>";

// clean variable
unset($name1);

// if for print if name is not null
if (isset($name1)) {
    echo $name1;
}

?>