<?php
// Sample array
$alphabets = array("a"=>"apple", "b"=>"ball", "c"=>"cat", "d"=>"dog");

// Prepending a single value to the alphabets array
array_unshift($alphabets, "elephant");
print_r($alphabets);
?>