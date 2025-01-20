<?php
// ESCOPO GLOBAL
$nome = "Jonathan Sena";
$a = 1;
$b = 7;
$c = 5;

function exibeNome(){
    global $nome;
    echo $nome;
}

exibeNome();
echo "<hr>";

function exibeCidade() {
    //ESCOPO LOCAL
    global $cidade;
    $cidade = "Belo Horizonte";
}

exibeCidade();
echo $cidade;
echo "<hr>";

function soma() {
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();