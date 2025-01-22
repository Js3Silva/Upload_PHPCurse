<?php
session_start(); //no inicio de todas as páginas

$_SESSION['cor'] = "Verde";
$_SESSION['carro'] = "Veloster";

echo $_SESSION['cor']."<br>".$_SESSION['carro'];
