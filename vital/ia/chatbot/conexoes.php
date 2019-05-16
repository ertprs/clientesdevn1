<?php 
date_default_timezone_set('America/Sao_Paulo');
$dataatual = date('Y-m-d H:i:s');
$servidor = "devn1.com.br";
$usuario = "devn1web_chat_te";
$senha = "Lucch9wgs9&w";
$dbname = "devn1web_chat_teste";
$connchat = mysqli_connect($servidor, $usuario, $senha, $dbname) or die( ' Erro na conexão ' );


 ?>