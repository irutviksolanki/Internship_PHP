<?php
// Defining a callback function
function myFunction($item, $key){
    echo "<p>$key holds $item</p>";
}

// Sample arrays
$pets = array("c" => "cat", "d" => "dog");
$animals = array("pets" => $pets, "wild" => "tiger");
array_walk_recursive($animals, "myFunction");
?>