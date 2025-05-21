<?php
$lines = file('php://stdin'); // Leer todas las líneas de la entrada estándar
$numbers = array_slice($lines, 1); // Ignorar la primera línea

$sum = 0;
foreach ($numbers as $line) {
    $sum += (int)trim($line); // Convertir a entero y sumar
}

echo $sum ** 2; // Elevar al cuadrado e imprimir

/**
 * Ejemplo
 * Imput   Output
 * 5        225
 * 1
 * 2
 * 3
 * 4
 * 5
 * 
 * Constraints 
 * n- Integer
 * 0>=n>=65536
 * v-integer
 * -32767<=v>=32767
 * 
 * SOLUTION IN PYTHON: print(sum(map(int, open().readlines()[1:]))**2)

 */
?>
