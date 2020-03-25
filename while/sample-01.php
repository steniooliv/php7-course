<?php

$condition = true;

//does something as long as the condition is true

while ($condition) {
    
    $number = rand(1,10);
    
    if ($number === 3) {
        echo "Three";
        $condition = false;
    }
  
  echo $number . " ";

}

?>