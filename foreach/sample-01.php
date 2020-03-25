<?php

$month = array(
    "Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"
);

foreach ($month as $value) {
    echo "Month is $value" . "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";

foreach ($month as $index => $value) {
    echo "Index is: " . $index . "<br>";
    echo "Month is $value" . "<br>";
}

?>