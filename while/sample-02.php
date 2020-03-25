<?php

$total = 150;
$off = 0.9;

//do something before checking the condition

do {
    $total *= $off;
}
while ($total > 100);

echo $total . " ";

?>