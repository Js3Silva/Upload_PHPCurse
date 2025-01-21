<?php
// Superglobais

/*
$GLOBALS;    // Armazena todas as variáveis globais em um array associativo.
$_SERVER;    // Contém informações sobre cabeçalhos, caminhos e o ambiente do script.
$_REQUEST;   // Combina os dados de $_GET, $_POST e $_COOKIE (dependendo da configuração do PHP).
$_POST;      // Contém os dados enviados via método HTTP POST.
$_GET;       // Contém os dados enviados via método HTTP GET (na URL, como query string).
$_FILES;     // Contém informações sobre arquivos enviados via upload.
$_ENV;       // Contém variáveis de ambiente do sistema ou definidas no servidor.
$_COOKIE;    // Contém os valores dos cookies enviados pelo navegador.
$_SESSION;   // Contém os dados das variáveis de sessão iniciadas pelo script.
*/

$x = 10;
$y = 15;

function soma() {
    echo $GLOBALS['x'] + $GLOBALS['y'];
}

soma();