<?php
// Array Operators

$x = array("a" => "Red", "b" => "Green", "c" =>"Blue");
$y = array("y" => "Yellow", "v" => "Orange", "z" =>"Pink");
$z = $x + $y;

var_dump($z);
var_dump($x == $y);
var_dump($x === $y);
var_dump($x != $y);
var_dump($x <> $y);
var_dump($x !== $y);

echo "Program by Bhuvanyu Chhibber (2220100266)";
?>
