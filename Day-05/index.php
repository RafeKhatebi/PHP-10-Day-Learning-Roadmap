<?php
//User-defined Functions

function sum($a, $b)
{
    $result = $a + $b;
    echo $result;
}
sum(23, 23);
echo "\n";

function work(?string $name = "Guest")
{
    echo "Hello " . $name . "\n";
}
work("Ali");
work();

// Anonymous Functions
//Anonymous functions (closures) are functions without a name
$greet = function ($name) {
    return "Hello " . $name;
};
echo $greet("Ali");

// 2n Ex ample of Anonymous Function
$sum = function ($num1, $num2) {
    return $num1 + $num2;
};
echo $sum(10, 20);

// Arrow Functions
// Arrow functions are a shorter syntax for writing anonymous functions
//fn is used to define an arrow function in PHP
$sum = fn($num1, $num2): int => $num1 + $num2;
echo $sum(10, 20);

// 2nd Example of Arrow Function
$num     = 10;
$evenOdd = fn($num) => $num % 2 === 0 ? "Even" : "Odd";
echo $evenOdd($num);
echo "\n";
//closures with use of use keyword
$num1    = 5;
$closure = function () use ($num1) {
    return $num1 * 2;
};
echo $closure();

//Built-in Functions
// I worked on some built-in functions in PHP, such as string methods, number methods, and array methods.
// in a speicific folder called Builtin-functions.

