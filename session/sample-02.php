<?php

require_once("config.php");

echo $_SESSION["name"];

session_unset();

session_destroy();

?>