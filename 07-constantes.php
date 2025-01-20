<?php
// Constantes

define("NOME", "José Carlos");
define("IDADE", 24);
define("CASADO", false);

var_dump(CASADO);

echo NOME;

define("TIMES", ['vasco', 'atletico', 'santos']);

echo 'O nome é '.NOME. ' e a idade é '.IDADE;
echo "<br>";
echo TIMES[0];
var_dump(TIMES);

// Obs: Constantes são globais de padrão