<?php
// This is the start of a PHP script.

// echo is used to output text to the screen.
echo "Hello, World! This is Day 01 of the PHP course. \n";

// var_dump is used to display structured information about one or more variables.
var_dump("This is a test string.");

// print is another way to output text, similar to echo.
print("hello world \n");

// printf is used to output formatted strings.
printf("Hello", "World \n");

//print_r is used to print human-readable information about a variable.
print_r("This is an other way to print. \n");

//set the default timezone to Asia/Kabul
date_default_timezone_set('Asia/Kabul');

// date function is used to format the current date and time.
echo date("The Date is :" . 'd-m-Y H:i:s' . "\n");

// you can also use this format or any other way you want to use
echo date('Y-m-d H:i:s');

// d is for day of the month, m is for month, Y is for year,
// H is for hour in 24-hour format, i is for minutes, and s is for seconds.
// The date function is used to display the current date and time.
//This is the end of the PHP script.
