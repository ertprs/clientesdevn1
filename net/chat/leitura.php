<?php
include_once("../conexoes.php");
@$mensagementregue = $_POST['entregue'];
@$idmensagem = $_POST['idmensagem'];
@$bot_responsavel = $_POST['bot_responsavel'];
if (empty($mensagementregue)) { 
// Verifica se o usuario ja existe
$buscamensagem = "SELECT
ccm.lido,
ccm.chat_session_id,
ccm.id,
ccm.chat_session_id as ccrsessao,
cu.id as cuid,
cu.bot_responsavel,
cu.name as nomecliente,
cu.email as telefonecliente,
ccm.chat_message
FROM
chatbull_chat_messages as ccm
INNER JOIN chatbull_chat_requests as ccr ON ccr.chat_session_id = ccm.chat_session_id
INNER JOIN chatbull_users as cu ON ccr.sender_id = cu.id
WHERE
ccm.lido = 'naolido' and
bot_responsavel = '$bot_responsavel'
limit 0,1";
$buscamensagem1 = mysqli_query($connchat, $buscamensagem);
  while($rowmsg = mysqli_fetch_assoc($buscamensagem1)){
  $idmensagem = $rowmsg['id']; 
  $telefonecliente = $rowmsg['telefonecliente']; 
  $bot_responsavel = $rowmsg['bot_responsavel']; 
  $mensagemcliente = nl2br($rowmsg['chat_message']);
  echo $idmensagem."|";
  echo $telefonecliente = substr($telefonecliente, -8)."|";
  $mensagemcliente = str_replace('<br />', '', $mensagemcliente);
  echo $mensagemcliente = $mensagemcliente; 
} }

if (empty($idmensagem)) {
}else{
$mensagementregue ="UPDATE chatbull_chat_messages SET lido = 'entregue' WHERE id = '$idmensagem'";
$mensagementregue1 = mysqli_query($connchat, $mensagementregue); 
}
?>