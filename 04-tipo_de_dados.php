<?php
/***** ESCALARES *****/
//String
$nome = "123";
var_dump($nome);
if(is_string($nome)):
    echo "É uma string";
else:
    echo "Não é uma string";
endif;
echo "<br><hr>";

//int
$idade = 21;
var_dump($idade);
if(is_int($idade)):
    echo "É um inteiro";
else:
    echo "Não é um inteiro";
endif;
echo "<br><hr>";

//float 
$idade = 21.1;
var_dump($idade);
if(is_float($idade)):
    echo "É um float";
else:
    echo "Não é um float";
endif;
echo "<br><hr>";

//float 
$idade = 21.1;
var_dump($idade);
if(is_float($idade)):
    echo "É um float";
else:
    echo "Não é um float";
endif;
echo "<br><hr>";

//boolean

//float 
$admin = false;
var_dump($admin);
if(is_bool($admin)):
    echo "É um boolean";
else:
    echo "Não é um boolean";
endif;
echo "<br><hr>";

/***** COMPOSTOS *****/
//array
$carros = array("Gol", "Mobi", "Fusca", 123, 20.6, true);
var_dump($carros);
if(is_array($carros)):
    echo "É um array";
else:
    echo "Não é um array";
endif;
echo "<br><hr>";

//object
class Cliente {
    public $nome;
    public function atribuirNome($nome){
        $this->$nome = $nome;
    }
}

$cliente = new Cliente();
$cliente->atribuirNome("Rodrigo");
var_dump($cliente);
if(is_object($cliente)):
    echo "É um object";
else:
    echo "Não é um object";
endif;
echo "<br><hr>";

/***** Especiais *****/
//NULL
$cidade = NULL;
var_dump($cidade);
