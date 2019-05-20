<?php 
date_default_timezone_set('America/Sao_Paulo');
$dataatual = date('Y-m-d H:i:s');
$servidor = "devn1.com.br";
$usuario = "devn1web_chat";
$senha = "U7?-FGbZL-iB";
$dbname = "devn1web_chat_golden";
$connchat = mysqli_connect($servidor, $usuario, $senha, $dbname) or die( ' Erro na conexão ' );


$servidor2 = "devn1.com";
$usuario2 = "devncom_painelmk";
$senha2 = "5esq(5l9V}Ya";
$dbname2 = "devncom_painelmk";
$conn2 = mysqli_connect($servidor2, $usuario2, $senha2, $dbname2);


$teste = "Teste de conexao";

 ?>