<?php 
// 'require' é usado para incluir o arquivo 'header.php'.
// Se o arquivo 'header.php' não for encontrado ou tiver algum erro fatal,
// o script será interrompido e não continuará a execução.
require 'header.php';

// 'require_once' funciona como 'require', mas verifica se o arquivo já foi incluído anteriormente.
// Caso já tenha sido incluído, ele não será incluído novamente, evitando duplicações.
require_once 'header.php';
?>

<!-- Exibe uma mensagem na página -->
<?php 
// O comando 'echo' é usado para imprimir texto ou conteúdo no navegador.
// Aqui, a mensagem "Olá pessoal" será exibida no navegador do usuário.
echo "Olá pessoal"; 
?>

<?php 
// 'include' é usado para incluir o arquivo 'footer.php'.
// Se o arquivo 'footer.php' não for encontrado, o script continuará executando,
// mas um aviso será emitido (não interrompe o fluxo da aplicação).
include 'footer.php'; 

// 'include_once' funciona como 'include', mas garante que o arquivo
// só será incluído uma única vez, mesmo que seja chamado várias vezes no código.
include_once 'footer.php'; 
?>
