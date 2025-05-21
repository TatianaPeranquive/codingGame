<?php
/* Challenge: 
Print N times a given word, on separate lines 
Example:
IMPUT     OUTPUT
2         Hello
Hello     Hello  

*/
// Leer número de repeticiones
// intval — Get the integer value of a variable
$n = intval(fgets(STDIN));

// Leer la palabra
// fgets - Gets line from file pointer
$w = trim(fgets(STDIN));

// Imprimir la palabra N veces, una por línea
for ($i = 0; $i < $n; $i++) {
    echo $w . "\n";
}
?>
