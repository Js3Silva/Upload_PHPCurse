<?php
// Criando funções

function exibirNome($nome) {
    echo "Meu nome é $nome";
}

$nome = "Jonathan";
exibirNome($nome);
echo "<hr>";

function calcularMedia($nome, $n1, $n2, $n3, $n4) {
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    if($media >= 7){
        echo "$nome foi aprovado com a média $media";
    } else {
        echo "Reprovado com a média $media";
    }
}

$n1 = 10;
$n2 = 10;
$n3 = 10;
$n4 = 10;
calcularMedia($nome, $n1, $n2, $n3, $n4);