<?php

$yourAge = 30;

$ageChild = 12;
$ageAdult = 18;
$ageOld = 65;


if ($yourAge < $ageChild) {
    echo "Child";
}
else if ($yourAge < $ageAdult) {
    echo "Teen";
}
else if ($yourAge < $ageOld) {
    echo "Adult";
}
else {
    echo "Old";
}

echo "<br>";

echo ($yourAge < $ageAdult) ? "Not Adult" : "Adult";
?>