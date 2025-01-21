<?php
//Funções para Strings

$nome = "JOnathan Sena";
$novoNome = strtoupper($nome); //Converte string em maiuscúlo e strtolower em minuscúlo

echo $novoNome;
echo "<hr>";

$mensagem = "Olá mundo!";
echo substr($mensagem, 4); //Retorna uma parte da string a partir do caractere informado
echo "<hr>";

$objeto = "mouse";
$novoObjeto = str_pad($objeto, 7, "*", STR_PAD_LEFT); //Aumenta e inclui na string através do tamanho informado e tipo de caractere
echo $novoObjeto;
echo "<hr>";

$string = str_repeat("Sucesso! ", 5);
echo $string;
echo "<hr>";

echo strlen($mensagem); //tamanho da string
echo "<hr>";

$texto = "A seleção do México será campeã!";
$novoTexto = str_replace("México", "Brasil", $texto);
echo $novoTexto;
echo "<hr>";

echo strpos($texto, "seleção");
