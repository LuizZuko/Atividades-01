<?php
$numero1 = 10;
$numero2 = 5;
$operacao = "divisao"; 

switch ($operacao) {
    case "soma":
        $resultado = $numero1 + $numero2;
        break;
    case "subtracao":
        $resultado = $numero1 - $numero2;
        break;
    case "multiplicacao":
        $resultado = $numero1 * $numero2;
        break;
    case "divisao":
        if ($numero2 != 0) {
            $resultado = $numero1 / $numero2;
        } else {
            $resultado = "Divisão por zero não é permitida.";
        }
        break;
    default:
        $resultado = "Operação inválida.";
}

echo "Resultado: " . $resultado;