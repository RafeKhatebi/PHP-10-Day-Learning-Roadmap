<?php
// A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:

$x = 5; // global scope

// function myTest()
// {
//     // using x inside this function will generate an error
//     echo "<p>Variable x inside function is: $x</p>";
// }
// myTest();

//here With Global Keyword you can use it.
function myGlobal()
{
    global $x;
    echo "<h2>Variable x inside function is: $x</h2>";

}

echo "<h3>Variable x outside function is: $x</h3>";
