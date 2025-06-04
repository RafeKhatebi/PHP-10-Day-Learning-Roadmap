<?php
// Functions with Examples : Arrray Functions
// The count methods is to count the numbers of indices in an array.
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
echo (count($array)); //output : 9

// The push method is adding the index at end of the array.
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
array_push($array, 10);
print_r($array); // output contain 10 value. 1,2,3,4,5,6,7,8,9,10

// The pop method wil be delete the last index from the end of array.
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
array_pop($array);
print_r($array); // Output : it'll delete the value index of 9

//The array_shift function will delete the 1st index of an array.
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
echo array_shift($array);
print_r($array); // OUTPUT: [0] => 2 not [0]=>1

// array_unshift method will add another index at the 1st of the array
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
array_unshift($array);
print_r($array);

// The array_merge will be combine two or mre than two in one array
$array1 = [1, 3];
$array2 = [5, 7];
$result =  array_merge($array1, $array2);
print_r($result); // output: 1,2,3,4

// The array_slice() will reverse partof the array.
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
print_r(array_slice($array, 1, 2));
print_r($array);

//The array_keys will bringback the keys of an array.
$array3 = ['a' => "Apple", 'b' => "Bananana", 'c' => "cucumber"];
print_r(array_keys($array3)); // OUTPUT: a,b,c

// The array_values bringback the values of an array.
$array3 = ['a' => "Apple", 'b' => "Bananana", 'c' => "cucumber"];
print_r(array_values($array3)); // output: [0] => Apple ,[1] => Bananana ,[2] => cucumber

// in_array will check that is a value is in an array or no!
$array4 = [5, 6, 7, 8, 9];
echo in_array(6, $array4) ? 'Yes' : 'No'; // output will be Yes

// array_map go throw all parts of an array it will check the indecies one by one and fo the wanted functions.
$array5 = [1, 2, 3];
$result5 = array_map(function ($value) {
    return $value * $value;
}, $array5);
print_r($result5);

// array_filter will filter the array elements with a function 
$array5 = [1, -2, 3];
$result5 = array_filter($array5);
print_r($result5);

// array_reduce 
$array6 = [1, 2, 3];
$result6 = array_reduce($array6, function ($carry, $item) {
    return $carry + $item;
}, 0);
print_r($array6);
print_r("The Output is equal to   : " . $result6);
