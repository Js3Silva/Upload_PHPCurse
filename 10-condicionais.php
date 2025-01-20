<?php

/** if, elseif e else **/

$numero = 10;

if($numero == 10):
    echo "É igual a 10";
elseif($numero == 11):
        echo "É igual a 11";
else:
    echo "Não é igual a 10";
endif;
echo "<hr>";

$media = 5;
echo($media >= 6) ? "Aprovado!" : "Reprovado!";
echo "<hr>";

/** switch case **/
switch($numero):
    case 1:
    echo "Boa sorte na sua jornada!";
    break;

    case 2:
    echo "Boa sorte na construsite!";
    break;

    default:
    echo "Já deu certo!";

endswitch;