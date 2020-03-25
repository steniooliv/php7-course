<form>

<input type="text" name="name">
<input type="date" name="date">
<input type="submit" value="OK">

</form>

<?php

if (isset($_GET)) {

    foreach ($_GET as $key => $value) {
        
        echo "Label name: " . $key . "<br>";
        echo "Label value: " . $value . "<br>";
        echo "<hr>";

    }
}

?>