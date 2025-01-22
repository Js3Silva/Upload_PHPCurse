<?php 
// 'require' é usado para incluir o arquivo 'header.php'.
// Caso o arquivo não seja encontrado ou tenha algum erro, o script será interrompido.
require 'header.php';
?>

<!-- Exibe uma mensagem na página -->
<?php 
// O comando 'echo' é usado para imprimir "Olá pessoal" no navegador.
echo "Olá pessoal"; 
?>

<?php 
// 'include' é usado para incluir o arquivo 'footer.php'.
// Se o arquivo não for encontrado, o script continuará a execução (mas pode gerar um aviso).
include 'footer.php'; 
?>
