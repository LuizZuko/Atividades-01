<?php
function operacoesIncreveis($num1, $num2) {
    $soma = $num1 + $num2;
    $subtracao = $num1 - $num2;
    $frase = "Com grandes números vêm grandes responsabilidades!";

    return [
        "soma" => $soma,
        "subtracao" => $subtracao,
        "frase" => $frase
    ];
}

$resultado = operacoesIncreveis(15, 7);

echo "Soma: " . $resultado['soma'] . "  /  ";
echo "Subtração: " . $resultado['subtracao'] . "  /  ";
echo "Mensagem: " . $resultado['frase'];