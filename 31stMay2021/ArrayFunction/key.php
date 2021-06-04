<?php
// Sample array
$alphabets = array("a"=>"apple", "b"=>"ball", "c"=>"cat", "d"=>"dog");

// Getting the current element's key
echo key($alphabets); // Prints: a

/* Moving the array's internal pointer to the next 
element then fetch the key */
next($alphabets);
echo key($alphabets); // Prints: b
?>