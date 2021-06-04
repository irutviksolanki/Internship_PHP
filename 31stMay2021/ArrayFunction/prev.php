<?php
// Sample array
$colors = array("red", "green", "blue", "orange", "yellow", "black");

// Getting the values
echo current($colors);  // Prints: red 
echo next($colors);     // Prints: green 
echo prev($colors);     // Prints: red
?>