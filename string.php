<?php

$str = "This is a string";
echo $str;
echo "<br>";

$str_len = strlen($str);
echo "The length of the string is ".$str_len;
echo "<br>";
echo "The number of words in the string is ".str_word_count($str);
// echo $str_len;
echo "<br>";
echo "The length of the string is ".strrev($str);
echo "<br>";

echo "The search for is in the string is ".strpos($str,"is");
echo "<br>";

echo "The replaced string is ".str_replace("This","That",$str);
echo "<br>";
?>