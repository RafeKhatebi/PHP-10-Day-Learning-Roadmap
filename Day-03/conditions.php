<?php
$i = 4;
if ($i > 5) {
    echo $i . "is greater than 5";
} else {
    echo $i . "is smaller than 5";
}
$month = "june";
switch ($month) {
    case "july";
        echo "5th month of the year.";
        break;
    case "june";
        echo "6th month of the year.";
        break;
    default;
        echo "It's a regular month";

}

//Ternary Operators
$age = 22;
$status($age > 18) ? "Adult" : "Minor";
echo $status;

// (??) Null Coalescing Operator
$username = null;
$username = $username ?? "guest";
echo "Hello" . $username;
