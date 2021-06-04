<?php
// Defining a callback function
function myFunction($value, $key){
    echo "<p>$key for $value</p>";
}

// Sample array
$alphabets = array("a"=>"apple", "b"=>"ball", "c"=>"cat");
array_walk($alphabets, "myFunction");
?>
