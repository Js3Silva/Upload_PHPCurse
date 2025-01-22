<?php
$senha = "SouGostoso";
$senha_db = '$2y$10$eUkvawu3j4gnXkXgHOBb7eVNjz6oNySA6fSfv5vHer51m6kQfUbPi';

$novaSenha = base64_encode($senha);
echo "base64: ".$novaSenha."<br>";
echo "Sua senha é: ".base64_decode($novaSenha);
echo "<hr>";

echo "Md5 :". md5($senha);
echo "<hr>";
echo "Sha1 :". sha1($senha);
echo "<hr>";

$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);
echo $senhaSegura;
echo "<hr>";

//Verificação usando o password_hash
if(password_verify($senha, $senha_db)){
    echo "Senha válida";
} else {
    echo "Senha inválida";
}
