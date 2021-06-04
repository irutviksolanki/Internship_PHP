<?php
// Sample associative array
$array = array("brand"=>"Porsche", "model"=>"911", "color"=>"blue");

// Extracting variables
extract($array);
echo "Brand: $brand, Model: $model, Color: $color";
?>