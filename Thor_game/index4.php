<?php
/* Challenge: 

Note: The left most digit can always be considered to a be a 0 

input: 1 represent true, 0 is false
output : printss ones and zeros 

contrainsts: 1 is true 0 is false
EXAMPLE:
INPUT      OUTPUT
0001010    0101010
0101010
*/


// Lee dos cadenas del mismo largo
$line1 = trim(fgets(STDIN));
$line2 = trim(fgets(STDIN));

// Recorrer ambos caracteres en paralelo
for ($i = 0; $i < strlen($line1); $i++) {
    if ($line1[$i] === '1' || $line2[$i] === '1') {
        echo '1';
    } else {
        echo '0';
    }
}

/**eN PYTHON
 * for x in zip(input(), input()):
    print(1 if '1' in x else 0, end='')

lEE Dos cadenas del mismo largo (por ejemplo, "101" y "110").
Las combina letra por letra con zip, o sea:
zip("101", "110") → [('1','1'), ('0','1'), ('1','0')]

Para cada par, imprime:

1 si al menos uno de los dos caracteres es '1'.
0 en otro caso.
Y todo en una sola línea, sin saltos (end='').

 */
?>

