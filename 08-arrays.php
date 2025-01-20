<?php
// Arrays

$carros = array(1=>"Hilux",2=>"S10",3=>"fusca");
echo $carros[1];
echo "<hr>";
print_r($carros);
echo "<hr>";

$carros[] = "Amarok";
print_r($carros);
echo "<hr>";

$carros[6] = "Voyage";
print_r($carros);
echo "<hr>";

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Yamaha";
$motos[] = "Yamaha";
$motos[8] = "Yamaha";
print_r($motos);
echo "<hr>";

$clientes = ["Rodrigo", "Felipe", "Bia"];
print_r($clientes);
echo "<hr>";

// Count
echo count($motos);
echo "<hr>";
// ou 
$totalClientes = count($clientes);
echo $totalClientes;
echo "<hr>";

//Foreach
foreach($carros as $valor) {
    echo $valor."<br>";
}
echo "<hr>";

// Arrays associativos
$pessoa = array("nome"=> "Jonathan", "idade" => 21, "altura"=> 1.71);
$pessoa["cidade"] = "Belo Horizonte";

echo $pessoa["altura"]."<br>";

foreach($pessoa as $indice => $valor) {
    echo $indice.":".$valor."<br>";
}
echo "<hr>";

// Arrays multidimensionais
$times = array("cariocas" => array("vice"=>"vasco","cheirinho"=>"flamengo","bairro"=>"botafogo"),
               "mineiros" => array("campeao"=>"atletico-mg","vice-campeao"=> "cruzeiro","terceiro"=> "america"),
               "paulistas" => array("maior"=>"sao paulo","bom"=>"palmeiras","grande"=>"santos"));

echo $times["mineiros"]["campeao"]."<br>";
echo "<br>";

foreach($times["mineiros"] as $indice => $valor) {
    echo $indice.":".$valor."<br>";
}
echo "<br>";

foreach($times["cariocas"] as $indice => $valor) {
    echo $indice.":".$valor."<br>";
}
echo "<br>";

foreach($times["paulistas"] as $indice => $valor) {
    echo $indice.":".$valor."<br>";
}