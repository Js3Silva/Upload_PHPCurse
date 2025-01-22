<?php
// COOKIE
setcookie('user', 'Jonathan Sena', time()+3600);
setcookie('email', 'jonathan@gmail.com', time()+3600);
setcookie('pesquisa', 'nike tênis', time()+3600);

var_dump($_COOKIE);

