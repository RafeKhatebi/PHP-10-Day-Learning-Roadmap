<?php
// prime number ex
// A Function to check if a number is prime or not
function isPrimeNumber($num)
{
    if ($num <= 1) {
        return false; // 0 and 1 are not prime numbers
    }
    for ($i = 2; $i * $i <= $num; $i++) {
        if ($num % $i == 0) {
            return false;

        }
    }
    return true;
}
echo "\n";
// Ex of  usage the function:
$myNumber = 29;
if (isPrimeNumber($myNumber)) {
    echo "$myNumber is a prime number.";
} else {
    echo "$myNumber is not a prime number.";
}
echo "\n";
// or an other example with an array of numbers and loop through it
$primeNumbers   = [];
$noPrimeNumbers = [];
for ($i = 1; $i <= 100; $i++) {
    if (isPrimeNumber($i)) {
        $primeNumbers[] = $i;
    } else {
        $noPrimeNumbers[] = $i;
    }
}
echo "Prime numbers: " . implode(", ", $primeNumbers) . "\n";
echo "Non prime numbers: " . implode(", ", $noPrimeNumbers) . "\n";
