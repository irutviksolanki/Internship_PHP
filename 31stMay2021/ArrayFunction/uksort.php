<?php
// Define comparison function
function compare($a, $b){
    if($a == $b){
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

// Sample array
$numbers = array("a"=>1, "c"=>2, "f"=>3, "d"=>4, "b"=>5, "e"=>6);

// Sort numbers array using compare function
uksort($numbers, "compare");
print_r($numbers);
?>