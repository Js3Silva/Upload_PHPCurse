<?php
// Manipulação de Arquivos em PHP

// fopen() - Abre um arquivo ou cria um novo, se não existir
// Modos comuns: 'r' (leitura), 'w' (escrita, sobrescreve), 'a' (escrita, adiciona ao final)
$arquivo = fopen("docs/exemplo.txt", "w");

// fwrite() - Escreve dados no arquivo aberto
// No exemplo, escrevemos a string "Olá, mundo!" no arquivo
fwrite($arquivo, "Olá, mundo!");

// fclose() - Fecha o arquivo aberto para liberar o recurso do sistema
fclose($arquivo);

// Reabrindo o arquivo em modo de leitura
$arquivo = fopen("docs/exemplo.txt", "r");

// !feof() - Verifica se ainda não chegamos ao final do arquivo
// Enquanto não for o final, continua lendo linha a linha
while (!feof($arquivo)) {
    // fgets() - Lê uma linha do arquivo
    $linha = fgets($arquivo);
    echo $linha; // Exibe a linha lida
}

echo "<hr>";
// filesize() - Retorna o tamanho do arquivo em bytes
// Útil para determinar o tamanho de leitura ou exibição
$tamanho = filesize("docs/exemplo.txt");
echo "Tamanho do arquivo: " . $tamanho . " bytes";

// Fechando o arquivo novamente
fclose($arquivo);
?>

