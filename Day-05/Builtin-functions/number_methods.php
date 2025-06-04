<?php
// abs function
$num =  -54;
echo abs($num . "\n"); // output will be  : 54 
//ceil method will round up the number
echo " \n";

$num1 = 23.3;
echo ceil($num1); //24
echo " \n";

//floor method will eound down the float number
$num1 = 23.3;
echo floor($num1); // 23
echo " \n";
//round to the near real number 
$num1 = 23.3;
echo round($num1); // 23
echo " \n";

$num1 = 23.6;
echo round($num1); // 24
echo " \n";

//max find the biggest number between the given numbers.
echo max(1, 2, 3, 4, 5, 6); // 6
echo "\n";
//min find the smallest number between the given numbers.
echo min(1, 2, 3, 4, 5, 6); // 1
echo "\n";
//rand it'll produce a random number
echo rand(1, 10);
echo "\n";

//number_format will show the number in a special format (more readable )
$num2 = 32323.45;
echo number_format($num2, 2);// 32,323.45
