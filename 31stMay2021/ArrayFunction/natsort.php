<?php
// Sample array
$images = array("img5.png", "img10.png", "img2.png", "img1.png");

// Standard sorting
sort($images);
print_r($images);

// Natural order sorting
natsort($images);
print_r($images);
?>