
<?php
    // In the following app we w'll print the odd and even numbers and

    // This is a simple way to do it using a for loop and if-else statements
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            echo "it is an even number :" . $i . "\n";

        } else {
            echo "it is an odd number :" . $i . "\n";

        }
    }

    // or even more professional way

    $evenNumbers = [];
    $oddNumbers  = [];

    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            $evenNumbers[] = $i;
        } else {
            $oddNumbers[] = $i;
        }
    }
    //implode ? a key function to convert array to string
    echo "Even numbers: " . implode(", ", $evenNumbers) . "\n";
    echo "Odd numbers: " . implode(", ", $oddNumbers) . "\n";
?>
