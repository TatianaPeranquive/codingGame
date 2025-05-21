<?php
/* Challenge: 
Must output "true" if the given number _n_ is a tall number
or "false" if _n_ is not a tall number.
A tall number is a number for which every digit is bigger or
equal to the digit on its left. 
Example: 123 is a tall number cause: 3>=2>=1
Note: The left most digit can always be considered to a be a 0 

input: an integer _n_ may have leading zeros 

*/

$n = trim(fgets(STDIN)); // $n es una string, como "12340"
$res = "true";

for ($i = 1; $i < strlen($n); $i++) {
    if ($n[$i] < $n[$i - 1]) {
        $res = "false";
        break;
    }
}

echo $res . "\n";
?>
