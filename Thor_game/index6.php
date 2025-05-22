<?php
/* Challenge: 
An odious number is defined as a number with an odd amount 
of 1s in its binary expansion. 
4 is an example of this as it is "100" in binary and thus is an odious number.
*/

// Leer el número desde la entrada estándar
$n = intval(trim(fgets(STDIN)));

// Convertir a binario
$bin = decbin($n);

// Contar cuántos '1' hay en el binario
$count = substr_count($bin, '1');

// Verificar si es impar
if ($count % 2 === 1) {
    echo "true\n";
} else {
    echo "false\n";
}

// echo substr_count(decbin(trim(fgets(STDIN))), '1') % 2 ? "true\n" : "false\n";


?>
