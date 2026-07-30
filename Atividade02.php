<?php
$dinheiro = 500000000;

if ($dinheiro < 2000) {
    echo "Liso";
} elseif ($dinheiro >= 2000 && $dinheiro < 10000) {
    echo "Classe Média";
} elseif ($dinheiro >= 10000 && $dinheiro < 60000) {
    echo "Riquinho";
} elseif ($dinheiro >= 60000 && $dinheiro < 100000000) {
    echo "Muito rico";
} else {
    echo "Alex(rtx 4090 é fraca segundo ele)";
}