<?php

//working with array

$people = array();

array_push($people, array(
    'name' => 'John',
    'age' => 20
));

array_push($people, array(
    'name' => 'Dario',
    'age' => 25
));

echo json_encode($people);

?>