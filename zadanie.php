<?php
function sumaTablicy($tablica){
        $suma = 0;

        foreach ($tablica as $element) {
            $suma += $element;
        }

        return $suma;
}

$tablica = [1,2,3,4,5];
echo sumaTablicy($tablica);
?>