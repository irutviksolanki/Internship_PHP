<?php
// Define comparison function
function compare($a, $b){
    if($a == $b){
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

// Sample array
$numbers = array("a"=>2, "b"=>-1, "c"=>7, "d"=>-9, "e"=>5, "f"=>-4);

// Sort numbers array using compare function
uasort($numbers, "compare");
print_r($numbers);
?>