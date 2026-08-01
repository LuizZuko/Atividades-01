<?php
$pessoa = [
    "Nome" => "Edinaldo pereira",
    "Idade" => 40,
    "Cidade" => "xixique-bahia",
    "Tchola" => "Não"
];

foreach ($pessoa as $chave => $valor) {
    echo "  " . $chave . ": " . $valor . "  /  ";
}