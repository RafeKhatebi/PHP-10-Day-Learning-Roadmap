<?php
//while loop Ex.
$i = 1;
while ($i <= 5) {
    echo "Iteration:" . $i . "\n";
    $i++;
}
//do-while loop:
// $a = 0;
// do {
//     echo "Iteration:" . $i . "\n";
//     $a++;
// } while ($a <= 5);

// for loop
for ($i = 0; $i < 5; $i++) {
    echo " For Iteration:" . $i . "\n";
}

//For each example:
$fruits = ["Apple", "Orange", "PineApple", "Cherry"];
foreach ($fruits as $key => $value) {
    echo "index : " . $key . "  " . "value : " . $value . "\n";
    // echo $key;
}

for ($i = 1; $i < 10; $i++) {
    echo $i;
    if ($i == 3) {
        break;
    }

}
// continue
for ($i = 1; $i < 10; $i++) {
    echo $i;
    if ($i == 3) {
        continue;
    }

}
