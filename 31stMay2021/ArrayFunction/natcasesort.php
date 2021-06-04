<?php
// Sample array
$images = array("IMG5.png", "img10.png", "IMG2.png", "img1.png");

// Standard sorting
sort($images);
print_r($images);

// Natural order sorting
natcasesort($images);
print_r($images);
?>