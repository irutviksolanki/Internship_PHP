<?php
// Define comparison function
function compare($a, $b){
    if($a == $b){
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

// Sample array
$numbers = array(2, 5, 4, 3, 6, 1);

// Sort numbers array using compare function
usort($numbers, "compare");
print_r($numbers);
?>