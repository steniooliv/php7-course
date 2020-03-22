<?php

//include files of include path in php.ini
//include "sample-01.php";

//force file is working ok
require "sample-01.php";

//require if not was require before
require_once "sample-01.php";

$result = sum(10, 20);
echo $result;
echo "<br>";

?>