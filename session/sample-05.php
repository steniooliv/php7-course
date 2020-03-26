<?php

require_once("config.php");

echo session_save_path();
echo "<br>";

var_dump(session_status());
echo "<br>";

switch(session_status()) {
    case PHP_SESSION_DISABLED:
        echo " sessions are disable";
    break;

    case PHP_SESSION_NONE:
        echo " sessions are enable but not active";
    break;

    case PHP_SESSION_ACTIVE:
        echo " sessions are active";
    break;
}

?>