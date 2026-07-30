<?php
$numeros = [4, 7, 12879.5];

foreach ($numeros as $num) {
    echo "Tabuada do " . $num . ":  /";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $num * $i;
        echo $num . " x " . $i . " = " . $resultado . "  /";
    }
    echo " --/-- ";
}