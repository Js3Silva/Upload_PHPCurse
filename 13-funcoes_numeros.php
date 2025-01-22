<?php
// Funções para Números
$db = 1234.56;
$preco = number_format($db, 2, ",", ".");
echo "O valor do produto é R$ $preco";
echo "<hr>";

echo round(3.55); //Arredonda os valores
echo "<br>";
echo ceil(8.3); //Arredonda sempre para cima
echo "<br>";
echo floor(8.5); //Arredonda sempre para baixo
echo "<hr>";

echo rand(1, 10); //Números aleatórios nessa faixa determinada