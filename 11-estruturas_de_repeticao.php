<?php
// While e Do While
$contador = 1;

while($contador <= 10): //ou com as {}
    echo "Contador é $contador <br>";
    $contador++;
endwhile;
echo "<hr>";

$contador = 1;
do{
    echo "Contador é $contador <br>";
    $contador++;
}while($contador <= 10);
echo "<hr>";

// for e foreach
$contador = 1;
for ($contador = 0; $contador <= 10; $contador++){ //ou com : e endfor;
    echo "8 x $contador = ".($contador*8)."<br>";
}
echo "<hr>";

$cores = array("Verde", "Vermelho", "Azul");

foreach($cores as $indice => $valor):
    echo $indice."-".$valor."<br>";
endforeach;