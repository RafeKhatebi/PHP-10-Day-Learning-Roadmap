<?php
$x           = 43;
$y           = 23;
$result      = $x + $y;
$subtraction = $x - $y;
echo $result;
echo $subtraction;
$z += $x;
$c *= $y;
echo $z;
echo $c;
if ($z == $c) {
    echo $z . "They are equal" . $c;
}
if ($z == $c || $x == $y) {
    echo $z . "They are equal" . $c;
}
