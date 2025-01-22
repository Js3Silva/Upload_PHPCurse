<?php
if (isset($_POST['enviar-formulario'])) { // Verifica se o formulário foi enviado
    $formatosPermitidos = array("png", "jpeg", "jpg", "gif"); // Extensões permitidas
    $quantidadeArquivos = count($_FILES['arquivo']['name']); // Conta os arquivos enviados
    $contador = 0; // Inicializa o contador

    while ($contador < $quantidadeArquivos) { // Loop pelos arquivos
        $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION); // Obtém a extensão do arquivo

        if (in_array($extensao, $formatosPermitidos)) { // Verifica se a extensão é permitida
            $pasta = "arquivos/"; // Diretório de destino
            $temp = $_FILES['arquivo']['tmp_name'][$contador]; // Arquivo temporário
            $novoNome = uniqid() . ".$extensao"; // Nome único para o arquivo

            if (move_uploaded_file($temp, $pasta . $novoNome)) { // Move o arquivo
                echo "Upload feito com sucesso para $pasta$novoNome<br>";
            } else {
                echo "Erro, não foi possível fazer o upload do arquivo $novoNome<br>";
            }
        } else {
            echo "A extensão $extensao é inválida!<br>"; // Mensagem para extensão inválida
        }

        $contador++; // Incrementa o contador para o próximo arquivo
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data"> <!-- MUITO IMPORTANTE QUANDO SE TRATA DE ARQUIVO -->
    <input type="file" name="arquivo[]" multiple> <br> <!-- multiple permite a seleção de mais de um arquivo -->
    <input type="submit" name="enviar-formulario">
    </form>

</body>
</html>