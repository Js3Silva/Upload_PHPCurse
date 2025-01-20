<?php

$nomes = array("Jonathan", "Rodrigo", "Pablo", "Marcos");

if(is_array($nomes)): //verifica se é um array
    echo "é um array";
else:
    echo "não é um array";
endif;
echo "<br>";

echo in_array("Rodrigo", $nomes); //verifica se possuí no array o valor comparado
echo "<br>";

// $keys = array_keys(($nomes));
// print_r(($keys));
// echo "<br>";

$values= array_values($nomes);
print_r($values);
echo "<br>";

$carros = array("Camaro", "Uno", "Voyage");
$motos = array("Pop100", "fan160", "f800");

$veiculos = array_merge($carros, $motos);
print_r($veiculos);
echo "<hr>";

print_r($carros);
array_pop($carros); //exclui a ultima posição do array
echo "<br>";
print_r($carros);
echo "<br>";

array_shift($carros); //exclui a primeira posição do array
print_r($carros);
echo "<hr>";

array_unshift($carros, "Mustang", "fusca"); //adiciona um ou mais elementos no inicio do array
print_r($carros);
echo "<br>";

array_push($carros, "Mustang", "fusca"); //adiciona um ou mais elementos no final do array
print_r($carros);
echo "<hr>";

$keys = array("Campeão", "Vice", "Terceiro");
$values = array("Atletico-mg", "Palmeiras", "River");

$campeonato = array_combine($keys, $values); //combina arrays
print_r($campeonato);
echo "<hr>";

$soma = array(95,6,7,8);
echo array_sum($soma);      //soma os valores do array
echo "<hr>";

$data = "20/01/2025";
$novaData = explode('/', $data); //tranforma uma string em array
print_r($novaData);
echo "<br>";

$frase = "meu nome não é Johnny"; 
$array = explode(" ", $frase);  //tranforma uma string em array
print_r($array);
echo "<br>";

$string = implode(", ", $nomes); //tranforma um array em uma string
echo $string;
echo "<br>";
