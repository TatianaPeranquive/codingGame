<?php
/* Challenge: 
You  have to split a text "t" by the first occurrence of the "match"
(case sensitive)
Return a tuple with three elements:
1 . Everything before the "match"
2 . The "match"
3 . everithyng after the "match"

Example Output: "I","love", "coding and I love apples" 

*/

// Leer texto y match
$text = trim(fgets(STDIN));
$match = trim(fgets(STDIN));

// Buscar la primera posición del match
$pos = strpos($text, $match);

if ($pos === false) {
    // No se encontró el match
    echo "[\"$text\", \"\", \"\"]\n";
} else {
    $before = substr($text, 0, $pos);
    $after = substr($text, $pos + strlen($match));
    
    // Imprimir como un arreglo tipo JSON
    echo "[\"$before\", \"$match\", \"$after\"]\n";
}

?>
