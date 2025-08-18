<?php
function calculateArea($length, $width) {
    $area = $length * $width;
    return "The area of a rectangle with length $length and width $width is $area.";
}

echo calculateArea(5, 10);
?>
