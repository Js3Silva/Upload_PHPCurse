<?php
// Datas
date_default_timezone_set('America/Sao_Paulo');
echo date('d/m/Y H:i:s');
echo "<hr>";

$date = date('Y-m-d'); //DATE
$datetime = date('Y-m-d H:i:s'); //DATETIME

// TIME
$time = time();
echo date('d/m/Y', $time);
echo "<hr>";

//MKTIME
$data_pagamento = mktime(15, 30, 00, 02, 30, 2025);
echo date('d/m - h:i A', $data_pagamento);
echo "<hr>";

// STRTOTIME
$data = '2019-04-10 13:30:00';  // Quando resgatar do banco de dados
$data = strtotime($data);

echo date('d/m/Y', $data);
