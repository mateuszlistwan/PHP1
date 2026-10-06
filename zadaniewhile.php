<?php
function sumaTablicyWhile($tablica) {
    $suma = 0;
    $i = 0;
    $ile = count($tablica);

    while ($i < $ile) {
        $suma += $tablica[$i];
        $i++;
    }

    return $suma;
}

$tablica = [1, 2, 3, 4, 5];
echo sumaTablicyWhile($tablica); // Wynik: 15
?>