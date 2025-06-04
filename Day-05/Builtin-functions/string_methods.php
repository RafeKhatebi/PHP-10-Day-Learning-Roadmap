<?php
// strlen  give the numbers of chaecter
$str = "Hello I'm a developer";
echo strlen($str); // 21
echo "\n";
//mb_strlen
$str = "Hello I'm a frontend developer";
echo mb_strlen($str); // 21
echo "\n";
//strops find the place a string in an other string.
$str = "Hello I'm a frontend developer";
echo strpos($str, "frontend");
echo "\n";
//str replace replac a string insted of another
// in this example it'll print  Mobile Application instead of  frontend
$str = "Hello I'm a frontend developer";
echo str_replace("frontend", "Mobile Application", $str);
echo "\n";
//str ireplace  will checkeven with captilize ar smallize
$str = "Hello I'm a frontend developer";
echo str_ireplace("HELLO", "Hi", $str);
echo "\n";
// substr
$str = "Hello I'm a frontend developer";
echo substr($str, 5, 4); // I'm
echo "\n";
// trim it'll delete the spaces from the fitst and end of a string
$str = "   Hello I'm a frontend developer     ";
echo trim($str);
echo "\n";
//strtolower change the string to small letters
$str = "Hello I'm a frontend developer";
echo strtolower($str);
echo "\n";
//strtoupper change the string to captial letters
$str = "Hello I'm a frontend developer";
echo strtoupper($str);

echo "\n";
//ucfirst change the 1st letter to capital
$str = "hello I'm a frontend developer";
echo ucfirst($str);
echo "\n";
//lcfirst change the 1st letter to small.
$str = "Hello I'm a frontend developer";
echo lcfirst($str);

echo "\n";
// ucwords  change every first letter of a string to capital
$str = "Hello I'm a frontend developer";
echo ucwords($str);

echo "\n";
//htmlspecialchars  change the str to html format.
$str = "Hello I'm a frontend developer";
echo htmlspecialchars($str);
echo "\n";
// array section
//implode
$array = ['hello', 'world'];
echo implode(" ", $array);
echo "\n";
//explode
$str   = "Hello I'm a frontend developer";
$array = explode(" ", $str);
print_r($array);
