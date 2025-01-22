<?php
/* Validações
filter_input();    // Filtra/valida diretamente uma entrada de $_GET, $_POST, etc.
filter_var();      // Filtra/valida diretamente uma variável específica.

FILTER_VALIDATE_INT;   // Valida se o valor é um número inteiro.
FILTER_VALIDATE_EMAIL; // Valida se o valor é um endereço de e-mail válido.
FILTER_VALIDATE_FLOAT; // Valida se o valor é um número de ponto flutuante (float).
FILTER_VALIDATE_IP;    // Valida se o valor é um endereço IP (IPv4 ou IPv6) válido.
FILTER_VALIDATE_URL;   // Valida se o valor é uma URL válida.
*/

/* Sanitização
filter_input();    // Filtra/valida diretamente uma entrada de $_GET, $_POST, etc.
filter_var();      // Filtra/valida diretamente uma variável específica.

FILTER_SANITIZE_SPECIAL_CHARS; // Escapa caracteres especiais para evitar XSS.
FILTER_SANITIZE_EMAIL;         // Remove caracteres inválidos de um endereço de e-mail.
FILTER_SANITIZE_INT;           // Remove todos os caracteres, exceto dígitos, sinais de + e -.
FILTER_SANITIZE_URL;           // Remove caracteres inválidos de uma URL.
*/
?>

<?php
if(isset($_POST['enviar-formulario'])){
    //ARRAY DE ERROS
    $erros = array();
    
    //VALIDAÇÕES
    if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)){
        $erros[] = "Idade precisa ser um inteiro";
    }

    if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
        $erros[] = "Email inválido!";
    }

    if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)){
        $erros[] = "Peso precisa estar com casas decimais!";
    }

    if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)){
        $erros[] = "IP inválido!";
    }

    if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)){
        $erros[] = "URL inválido!";
    }

    //EXIBIR ERROS
    if(!empty($erros)){
        foreach($erros as $erro){
            echo "<li> $erro </li>";
        }
    } else {
        echo "Sucesso ao enviar os dados!";
    }
}
?>

<?php
if(isset($_POST['enviar-formulario2'])){
    //ARRAY DE ERROS
    $erros = array();
    
    //SANITIZE
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    if(filter_var($idade, FILTER_VALIDATE_INT)){
        $erros[] = "idade precisa ser um inteiro";
    }
    
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $erros[] = "Email inválido!";
    }

    $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
    if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)){
        $erros[] = "URL inválido!";
    }

        //EXIBIR ERROS
        if(!empty($erros)){
            foreach($erros as $erro){
                echo "<li> $erro </li>";
            }
        } else {
            echo "Sucesso ao enviar os dados!";
        }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Nome: <input type="text" name="nome"><br>
    Idade: <input type="text" name="idade"><br>
    Email: <input type="text" name="email"><br>
    URL: <input type="text" name="url"><br>
    <button type="submit" name="enviar-formulario2"> ENVIAR </button><br>
    </form>
    
    <!-- <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Idade: <input type="text" name="idade"><br>
    Email: <input type="text" name="email"><br>
    Peso: <input type="text" name="peso"><br>
    IP: <input type="text" name="ip"><br>
    URL: <input type="text" name="url"><br>
    <button type="submit" name="enviar-formulario"> ENVIAR </button><br>
    </form> -->

    <!-- <a  href="dados.php?idade=25&sobrenome=Sena"> Enviar dados</a> -->
</body>
</html>