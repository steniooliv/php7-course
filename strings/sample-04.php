<?php

//word position
$phrase = "Repetition is the mother of retention";
$word = "mother";
$q = strpos($phrase, $word);

var_dump($q);

//text before mother
$text = substr($phrase, 0, $q);

echo $text;
echo "<br>";

//text after mother
$text2 = substr($phrase, $q+strlen($word),strlen($phrase));
echo $text2;
echo "<br>";

?>