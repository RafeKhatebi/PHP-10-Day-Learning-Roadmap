<?php
// Arrays & ManipulationIndexed and associative arrays, array functions (push,pop,sort, etc.)

// Usage array function
$fruits1 = ["Apple", "Banana", "Cherry"];
//Using array literal
$fruits2 = ["Apple", "Orange", "Kiwi"];
var_dump($fruits1);
// indexed array :
$names      = ["Ali", "Karim", "Jamil"];
$numbers    = [];
$numbers[0] = 1;
$numbers[1] = 2;
$numbers[2] = 3;
$numbers[3] = 4;
var_dump($names, $numbers);

// Associative array :
$person = [
    "name"   => "Ali",
    "age"    => 25,
    "city"   => "Herat",
    "skills" => ["PHP", "JavaScript", "Python"],
];
var_dump($person);

// Multi-dimensional array :
$people = [
    ["name" => "Ali", "age" => 25, "city" => "Herat"],
    ["name" => "Karim", "age" => 30, "city" => "Kabul"],
    ["name" => "Jamil", "age" => 20, "city" => "Mazar-e-Sharif"],
];
var_dump($people);
// Array functions
// Adding elements to an array
array_push($people, ["name" => "Zainab", "age" => 22, "city" => "Bamyan"]);

// Removing the last element from an array
array_pop($people);

// Accessing array elements
echo "Accessing array elements" . $people[0]["name"]; // Output: Ali

//looping through an array
foreach ($people as $person) {
    echo "Name: " . $person["name"] . ", Age: " . $person["age"] . "\n";
}

//add at the beginning of an array
array_unshift($people, ["name" => "Fatima", "age" => 28, "city" => "Herat"]);

//remove the first element of an array
array_shift($people);

//insert an element at a specific position
array_splice($people, 1, 0,
    ["name" => "Hassan", "age" => 26, "city" => "Kandahar"]); // Insert at index 1

//sorting an array
sort($people);

//reverse sorting an array
rsort($people);

//sorting an associative array by value
asort($person);

//sorting an associative array by key
ksort($person);
//sorting a multi-dimensional array by a specific key
// var_dump(usort($people, function ($a, $b) {
//     return $a['age'] <=> $b['age'];
// }));
