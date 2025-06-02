<?php

//Grade Calculator :
$score = 85;
if ($score > 90) {
    echo "Happy for you" . "Your grade is: A+";
} elseif ($score > 80) {
    echo "Happy for you" . "Your grade is: A";
} elseif ($score > 70) {
    echo "Great for you" . "Your grade is: B+";
} elseif ($score > 60) {
    echo "Good  for you" . "Your grade is: B";
} elseif ($score > 55) {
    echo "Okay Not Bad" . "Your grade is: C";
} else {
    echo "Sorry You Failed";
}
