<?php
// Conexão
require_once 'db_connect.php';

//Sessão
session_start();

//Botão enviar
if(isset($_POST['btn-entrar'])){
    $erros = array();
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if(empty($login) or empty($senha)){
        $erros[] = "<li> O campo login/senha precisa ser preenchido corretamente!</li>";
    } else {
        $sql = "SELECT login FROM usuarios WHERE login = '$login'";
        $resposta = mysqli_query($connect, $sql);

        if(mysqli_num_rows($resposta) > 0){
            $senha = md5($senha);
            $sql = "SELECT * FROM usuarios WHERE login = '$login' and senha = '$senha'";
            $resposta = mysqli_query($connect, $sql);

            if(mysqli_num_rows($resposta) == 1){
                $dados = mysqli_fetch_array($resposta);
                mysqli_close($connect);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                header('Location: home.php');
            } else {
                $erros[] = "<li> Usuário e senha não conferem </li>";
            }
        } else {
            $erros[] = "<li> Usuário inexistente </li>";
        }
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
    
    <h1>LOGIN</h1>
    <?php
    if(!empty($erros)):
        foreach($erros as $erros):
            echo $erros;
        endforeach;
    endif;
    ?>

    <hr>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    Login: <input type="text" name="login"><br>
    Senha: <input type="password" name="senha"><br>
    <button type="submit" name="btn-entrar"> Entrar </button>
    </form>

</body>
</html>