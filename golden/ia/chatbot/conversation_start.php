<?php
header('Content-type: text/html; charset=utf-8');
include_once("../../conexoes.php");
// 
$departmentId = 1; // departamento de atendimento
$idcliente = 3; 
$userId = $_POST['iddobot']; // Numero do Bot
$nome_cliente = utf8_decode($_POST['nome_cliente']); // Nome do cliente
// $mensagemcliente = $_GET['clientedisse']; // numero do bot
// $mensagemcliente1 = sanitizeString($mensagemcliente);
// $say = $mensagemcliente;


date_default_timezone_set('America/Sao_Paulo');
$diainserido = date('j');
$mesinserido = date('n');
$anoinserido = date('Y');


// função remover caracteres especiais
function sanitizeString($str) {
    // $str = preg_replace('/[áàãâä]/ui', 'A', $str);
    // $str = preg_replace('/[éèêë]/ui', 'E', $str);
    // $str = preg_replace('/[íìîï]/ui', 'I', $str);
    // $str = preg_replace('/[óòõôö]/ui', 'O', $str);
    // $str = preg_replace('/[úùûü]/ui', 'U', $str);
    // $str = preg_replace('/[ç]/ui', 'C', $str);
    // $str = preg_replace('/4 3/ui', 'C', $str);


    //$str = preg_replace('/[,(),;:|!"#$%&/=?~^><ªº-]/', '_', $str);
    // $str = preg_replace('/[^a-z0-9]/i', '_', $str);
    // $str = preg_replace('/_+/', '_', $str); // ideia do Bacco :)
    return $str;
}

/***************************************
 * http://www.program-o.com
 * PROGRAM O
 * Version: 2.6.11
 * FILE: chatbot/conversation_start.php
 * AUTHOR: Elizabeth Perreau and Dave Morton
 * DATE: FEB 01 2016
 * DETAILS: this file is the landing page for all calls to access the bots
 ***************************************/

set_time_limit(0);
$time_start = microtime(true);
$script_start = $time_start;
$last_timestamp = $time_start;
$thisFile = __FILE__;

$configPath = (defined('_CONF_PATH_')) ? _CONF_PATH_ : '../config/';
require_once("{$configPath}global_config.php");
//load shared files
/** @noinspection PhpIncludeInspection */
require_once(_LIB_PATH_ . 'PDO_functions.php');
/** @noinspection PhpIncludeInspection */
include_once(_LIB_PATH_ . "error_functions.php");
/** @noinspection PhpIncludeInspection */
include_once(_LIB_PATH_ . 'misc_functions.php');

ini_set('default_charset', $charset);

//------------------------------------------------------------------------
// Error Handler
//------------------------------------------------------------------------
// set to the user defined error handler
set_error_handler("myErrorHandler");
//open db connection
// Collect system specs for the first debug message

$versionCheckSQL = 'select version();';
$result = db_fetch($versionCheckSQL, null, __FILE__, __FUNCTION__, __LINE__);
$mySQL_version = $result['version()'];
$pgoVersion = VERSION;
$phpVersion = phpversion();
$serverSoftware = $_SERVER['SERVER_SOFTWARE'];
$mbEnabled = (IS_MB_ENABLED) ? 'true' : 'false';
$firstDebugMessage = "Conversation starting. Current system specs:
Program O version:            $pgoVersion
Server Software:              $serverSoftware
PHP Version:                  $phpVersion
OS:                           $os
OS Version:                   $osv
MySQL Version:                $mySQL_version
Multi-byte functions enabled: $mbEnabled";

//leave this first debug call in as it wipes any existing file for this session
runDebug(__FILE__, __FUNCTION__, __LINE__, $firstDebugMessage, 0);
//load all the chatbot functions
/** @noinspection PhpIncludeInspection */
include_once(_BOTCORE_PATH_ . "aiml" . $path_separator . "load_aimlfunctions.php");
//load all the user functions
/** @noinspection PhpIncludeInspection */
include_once(_BOTCORE_PATH_ . "conversation" . $path_separator . "load_convofunctions.php");
//load all the user functions
/** @noinspection PhpIncludeInspection */
include_once(_BOTCORE_PATH_ . "user" . $path_separator . "load_userfunctions.php");
//load all the user addons
/** @noinspection PhpIncludeInspection */
include_once(_ADDONS_PATH_ . "load_addons.php");
runDebug(__FILE__, __FUNCTION__, __LINE__, "Loaded all Includes", 4);

//initialise globals
$convoArr = array();
$convoArrStack = array();
$new_convo_id = false;
$old_convo_id = false;
$say = '';
$display = "";

$options = array(
    'convo_id'      => FILTER_SANITIZE_STRING,
    'bot_id'        => FILTER_SANITIZE_NUMBER_INT,
    'say' => array(
        'filter'    => FILTER_SANITIZE_STRING,
        'flags'     => FILTER_FLAG_NO_ENCODE_QUOTES
    ),
    'format'        => FILTER_SANITIZE_STRING,
    'debug_mode'    => FILTER_SANITIZE_NUMBER_INT,
    'debug_level'   => FILTER_SANITIZE_NUMBER_INT,
    'name'          => FILTER_SANITIZE_STRING
);


$form_vars_post = filter_input_array(INPUT_POST, $options);
$form_vars_get = filter_input_array(INPUT_GET, $options);

$form_vars = array_merge((array)$form_vars_get, (array)$form_vars_post);

if (!isset($form_vars['say']))
{
    $form_vars['say'] = '';
}

$say = ($say !== '') ? $say : trim($form_vars['say']);
$session_name = 'PGOv' . VERSION;

$cliente_escreveu = utf8_decode($say);
session_name($session_name);
session_start();

/** @noinspection PhpUndefinedVariableInspection */
$debug_level = (isset($_SESSION['programo']['conversation']['debug_level'])) ? $_SESSION['programo']['conversation']['debug_level'] : $debug_level;
$debug_level = (isset($form_vars['debug_level'])) ? $form_vars['debug_level'] : $debug_level;

/** @noinspection PhpUndefinedVariableInspection */
$debug_mode = (isset($form_vars['debug_mode'])) ? $form_vars['debug_mode'] : $debug_mode;

if (isset($form_vars['convo_id']))
{
    session_id($form_vars['convo_id']);
}

$convo_id = session_id();
$say = sanitizeString($say);

runDebug(__FILE__, __FUNCTION__, __LINE__, "Debug level: $debug_level" . PHP_EOL . "session ID = $convo_id", 0);

//if the user has said something
runDebug(__FILE__, __FUNCTION__, __LINE__, "Conversation continuing. User said '{$say}'.", 4);
if (!empty($say)) {
    // Chect to see if the user is clearing properties
    $lc_say = _strtolower($say);

    $convoArr = read_from_session();
    if ($lc_say == 'clear properties' || $lc_say == ':reset bot')
    {
        runDebug(__FILE__, __FUNCTION__, __LINE__, "Clearing client properties and starting over.", 4);

        $_SESSION = array();
        $user_id = (isset($convoArr['conversation']['user_id'])) ? $convoArr['conversation']['user_id'] : -1;

        /** @noinspection SqlDialectInspection */
        $sql = "DELETE FROM `$dbn`.`client_properties` WHERE `user_id` = :user_id;";
        $params = array(':user_id' => $user_id);
        $numRows = db_write($sql, $params, false, __FILE__, __FUNCTION__, __LINE__);
        $convoArr['client_properties'] = null;
        $convoArr['conversation'] = array();
        $convoArr['conversation']['user_id'] = $user_id;

        // Get old convo id, to use for later
        $old_convo_id = session_id();

        // Note: This will destroy the session, and not just the session data!
        // Finally, destroy the session.
        runDebug(__FILE__, __FUNCTION__, __LINE__, "Generating new session ID.", 4);

        session_regenerate_id(true);

        $new_convo_id = session_id();
        $params = session_get_cookie_params();

        setcookie($session_name, $new_convo_id, time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);

        // Update the users table, and clear out any unused client properties as needed
        /** @noinspection SqlDialectInspection */
        $sql = "UPDATE `$dbn`.`users` SET `session_id` = '$new_convo_id' WHERE `session_id` = '$old_convo_id';";
        runDebug(__FILE__, __FUNCTION__, __LINE__, "Update user - SQL:\n$sql", 3);

        $confirm = db_write($sql, null, false, __FILE__, __FUNCTION__, __LINE__);
        // Get user id, so that we can clear the client properties
        /** @noinspection SqlDialectInspection */
        $sql = "SELECT `id` FROM `$dbn`.`users` WHERE `session_id` = :new_convo_id limit 1;";
        $params = array(':new_convo_id' => $new_convo_id);
        $row = db_fetch($sql, $params, __FILE__, __FUNCTION__, __LINE__);

        if ($row !== false) {
            $user_id = $row['id'];
            $convoArr['conversation']['user_id'] = $user_id;
            $convoArr['conversation']['convo_id'] = $new_convo_id;

            runDebug(__FILE__, __FUNCTION__, __LINE__, "User ID = $user_id.", 4);
            /** @noinspection SqlDialectInspection */
            $sql = "DELETE FROM `$dbn`.`client_properties` WHERE `user_id` = $user_id;";
            runDebug(__FILE__, __FUNCTION__, __LINE__, "Clear client properties from the DB - SQL:\n$sql", 4);
        }

        $say = "Hello";
    }

    // Load bot and user stored values
    $convoArr = load_default_bot_values($convoArr);
    $convoArr = check_set_convo_id($convoArr);
    $convoArr = check_set_bot($convoArr);
    $convoArr = check_set_user($convoArr);

    // run any pre-processing addons
    $convoArr = run_pre_input_addons($convoArr, $say);
    $say = $convoArr['say'];
    $rawSay = $say;
    $conversa_cliente = $say;
    $convoArr['conversation']['rawSay'] = $rawSay;
    $say = normalize_text($say);
    $bot_id = (isset($form_vars['bot_id'])) ? $form_vars['bot_id'] : $bot_id;

    runDebug(__FILE__, __FUNCTION__, __LINE__, "Details:\nUser say: " . $say . "\nConvo id: " . $convo_id . "\nBot id: " . $bot_id . "\nFormat: " . $form_vars['format'], 2);

    if (!empty($form_vars['name']))
    {
        $user_name = $form_vars['name'];
        $convoArr['conversation']['user_name'] = $user_name;
        $convoArr['client_properties']['name'] = $user_name;
    }
    if (!isset($convoArr['conversation']['user_id']) && isset($user_id))
    {
        $convoArr['conversation']['user_id'] = $user_id;
    }

    $convoArr = check_set_format($convoArr);
    $convoArr = load_that($convoArr);
    //save_file(_LOG_PATH_ . 'ca.txt', print_r($convoArr,true));
    $convoArr = buildNounList($convoArr);
    $convoArr['time_start'] = $time_start;
    $convoArr = load_bot_config($convoArr);
    //if totallines isn't set then this is new user
    runDebug(__FILE__, __FUNCTION__, __LINE__, "Default debug level = $debug_level", 0);
    $debug_level = isset($convoArr['conversation']['debug_level']) ? $convoArr['conversation']['debug_level'] : $debug_level;
    runDebug(__FILE__, __FUNCTION__, __LINE__, "Current debug level = $debug_level", 0);

    if (!isset ($convoArr['conversation']['totallines'])) {
        //load the chatbot configuration for a new user
        $convoArr = intialise_convoArray($convoArr);
        //add the bot_id dependant vars
        $convoArr = add_firstturn_conversation_vars($convoArr);
        $convoArr['conversation']['totallines'] = 0;
        $convoArr = get_user_id($convoArr);
    }

    $convoArr['aiml'] = array();
    //add the latest thing the user said
    runDebug(__FILE__, __FUNCTION__, __LINE__, "Say = $say: raw say = $rawSay", 0);
    $convoArr = add_new_conversation_vars($say, $convoArr);

    //parse the aiml
    $convoArr = make_conversation($convoArr);
    $convoArr = run_mid_level_addons($convoArr);
    $convoArr = log_conversation($convoArr);
    #$convoArr = log_conversation_state($convoArr);
    $convoArr = write_to_session($convoArr);
    $convoArr = get_conversation($convoArr);
    $convoArr = run_post_response_useraddons($convoArr);
    //return the values to display
    $display = $convoArr['send_to_user'];
    $time_start = $convoArr['time_start'];
    unset($convoArr['nounList']);
}
else
{
    $convoArr = intialise_convoArray($convoArr);
    runDebug(__FILE__, __FUNCTION__, __LINE__, "Conversation initialized, awaiting user", 2);
    $convoArr['send_to_user'] = 'User input not detected.';
    $cva = print_r($convoArr, true);
    //error_log("Convo Array:\n$cva", 3, _LOG_PATH_ . 'convoArr.txt');
}

runDebug(__FILE__, __FUNCTION__, __LINE__, "Closing Database", 2);

$time_end = microtime(true);
$time = number_format(round(($time_end - $script_start) * 1000, 7), 3);
display_conversation($convoArr);

runDebug(__FILE__, __FUNCTION__, __LINE__, "Conversation Ending. Elapsed time: $time milliseconds.", 0);
$convoArr = handleDebug($convoArr, $time); // Make sure this is the last line in the file, so that all debug entries are captured.
pgo_session_gc();

$telefoneapi = str_replace("+", "", $convo_id);

$botsay = str_replace("quebralinha", "\r\n", $botsay);
$conversa_cliente = str_replace("/", "", $conversa_cliente);
$conversa_cliente = str_replace("PCT-", "", $conversa_cliente);
$conversa_cliente = str_replace("â€ª", "", $conversa_cliente);
$conversa_cliente = str_replace(" MINUS ", "-", $conversa_cliente);
$conversa_cliente = str_replace(":", "doisponto", $conversa_cliente);
$conversa_cliente = str_replace("DIVIDEDBY", "", $conversa_cliente);
$conversa_cliente = str_replace($diainserido."  ".$mesinserido, " <br> ", $conversa_cliente);
$conversa_bot = utf8_decode($botsay);
$conversa_cliente = utf8_decode($conversa_cliente);
$conver_id = $convo_id;



// $conver_id = str_replace(" ", "", $conver_id);
// $conver_id = str_replace("-", "", $conver_id);
// echo $conversa_bot;
// echo "<br>";
// echo "Conversa: ".$conversa_cliente;
// echo "<br>";
// echo "Usuario Chat ".$userId;
// echo "<br>";
// echo "Id ".$conver_id;
// echo "<br>";



// echo "<br>".$userId;            // id co bot
// echo "<br>".$conver_id;         // Telefone Cliente
// echo "<br>".$nome_cliente;      // Nome do cliente
// echo "<br>".$conversa_cliente;  // Mensagem do Cliente
// echo "<br>".$botsay;            // Resposta do Bot

echo $botsay;

// Novo Chat
// $numerotelefone = $_GET['numerotelefone'];
$numerotelefone = $conver_id;
$nomedocliente = $nome_cliente;
$mensagemdocliente = $cliente_escreveu;
$gerarcor = $rand_color = '#' . substr(md5(mt_rand()), 0, 6);
$telefonecefonec2 = $numerotelefone;
$telefonecefonec2 = substr($telefonecefonec2, 2);
$millitime = round(microtime(true) * 1000);
// função remove caractes extras
function ReformatCSVString($strInput)
{ 
       // Replace accented characters 
   $strInput = str_replace("+5541", "", $strInput);
   $strInput = str_replace("+55", "", $strInput);
   return $strInput; 
}

$telefonec = ReformatCSVString($convo_id);
$telefonec = substr($telefonec,-8);
$contacatacteres = strlen($convo_id);

// FUNÇÃO MASCARA
function mask($val, $mask){
 $maskared = '';
 $k = 0;
 for($i = 0; $i<=strlen($mask)-1; $i++) {
 if($mask[$i] == '#') {
 if(isset($val[$k]))
 $maskared .= $val[$k++]; }
 else {
 if(isset($mask[$i]))
 $maskared .= $mask[$i]; } }
 return $maskared;}
 $telefonecefonec2 = mask($telefonecefonec2, '(##)####-####');


// Verifica se o usuario ja existe
$selectnumerotelefone = "SELECT id, email FROM chatbull_users WHERE email = '$numerotelefone'";
$conectanumerotelefone = mysqli_query($connchat, $selectnumerotelefone);
  while($rowstel = mysqli_fetch_assoc($conectanumerotelefone)){
  $idresultadotel = $rowstel['id']; 
  $telefonecefoneresultado = $rowstel['email']; 
} 
//Verifica se o telefone esta cadastrado
if (empty($telefonecefoneresultado)){ // Se não estiver cadastrado
// Insere usuario chatbull_users
$chatbull_users ="INSERT INTO chatbull_users (name, email, display_name, profile_color, bot_responsavel) VALUES ('$nomedocliente', '$numerotelefone', '$nomedocliente', '$gerarcor', '$userId')";
$chatbull_users1 = mysqli_query($connchat, $chatbull_users); 
$iddousuario = mysqli_insert_id($connchat);

// Registra chatbull_users_to_sites
$chatbull_users_to_sites ="INSERT INTO chatbull_users_to_sites (user_id, site_id) VALUES ('$iddousuario', '1')";
$chatbull_users_to_sites1 = mysqli_query($connchat, $chatbull_users_to_sites); 

// Registra chatbull_user_address
$chatbull_user_address ="INSERT INTO chatbull_user_address (site_id, user_id, country) VALUES ('1', '$iddousuario', '$telefonecefonec2')";
$chatbull_user_address1 = mysqli_query($connchat, $chatbull_user_address); 

// Registra chatbull_user_visit_info
$chatbull_user_visit_info ="INSERT INTO chatbull_user_visit_info (site_id, user_id) VALUES ('1', '$iddousuario')";
$chatbull_user_visit_info1 = mysqli_query($connchat, $chatbull_user_visit_info); 

// Registra chatbull_chat_sessions
$chatbull_chat_sessions ="INSERT INTO chatbull_chat_sessions (site_id) VALUES ('1')";
$chatbull_chat_sessions1 = mysqli_query($connchat, $chatbull_chat_sessions);  
$chatdasessao = mysqli_insert_id($connchat);

// Registra a mensagem chatbull_chat_messages
$chatbull_chat_messages ="INSERT INTO chatbull_chat_messages (chat_session_id, sender_id, local_id, sort_order, chat_message, created_at) VALUES ('$chatdasessao', '$iddousuario', '$millitime', '$millitime', '$mensagemdocliente', '$dataatual')";
$chatbull_chat_messages1 = mysqli_query($connchat, $chatbull_chat_messages); 

// Registra chatbull_chat_users
$chatbull_chat_users ="INSERT INTO chatbull_chat_users (chat_session_id, user_id) VALUES ('$chatdasessao', '$iddousuario')";
$chatbull_chat_users1 = mysqli_query($connchat, $chatbull_chat_users);  

// Registra chatbull_chat_requests
$chatbull_chat_requests ="INSERT INTO chatbull_chat_requests (chat_session_id, sender_id, requested_to, message) VALUES ('$chatdasessao', '$iddousuario', '1', '$mensagemdocliente')";
$chatbull_chat_requests1 = mysqli_query($connchat, $chatbull_chat_requests);  

// Se pediu pra remover o nome
if ($botsay == 'Seu nome foi removido de nossa lista, desculpe o inconveniente.' && $contacatacteres >= 7) {
    // Registra usuario na conversa
    $chatbull_chat_users2 ="INSERT INTO chatbull_chat_users (chat_session_id, user_id, user_role) VALUES ('$chatdasessao', '1', 'agent')";
    $chatbull_chat_users3 = mysqli_query($connchat, $chatbull_chat_users2); 
    // Altera o status pra aceito
    $sql = "UPDATE chatbull_chat_requests SET request_status = 'accepted' WHERE chat_session_id = '$chatdasessao'";
    mysqli_query($connchat, $sql);
    // Fecha a conversa pra não responder
    $sql = "UPDATE chatbull_chat_sessions SET session_status = 'closed' WHERE id = '$chatdasessao'";
    mysqli_query($connchat, $sql); 
    $registramensagem ="INSERT INTO chatbull_chat_messages (chat_session_id, sender_id, local_id, sort_order,message_status, chat_message, created_at) 
                         VALUES ('$chatdasessao', '2', '$millitime', '$millitime', 'read', '$botsay', '$dataatual')";
    $registramensagem1 = mysqli_query($connchat, $registramensagem); }

} else{ // Se Não encontrar o telefone no registro
// Busca ultima mensagem enviada
$dadosdasessao ="
SELECT
    ccr.id,
    ccr.chat_session_id,
    ccr.sender_id,
    cu.id AS userid 
FROM
    chatbull_chat_requests AS ccr
    INNER JOIN chatbull_users AS cu ON ccr.sender_id = cu.id 
    AND ccr.sender_id = '$idresultadotel'";
$dadosdasessao1 = mysqli_query($connchat, $dadosdasessao);
  while($rowsbuscaultima2 = mysqli_fetch_assoc($dadosdasessao1)){
  $dadosdasessaoid = $rowsbuscaultima2['id'];  // id da solicitação do chat
  $dadosdasessaochat_session_id = $rowsbuscaultima2['chat_session_id']; // sessão do chat
  $dadosdasessaosender_id = $rowsbuscaultima2['sender_id'];     // id de quem esta enviando
}
// Atualiza o bot responsavel pelo cliente
$sql = "UPDATE chatbull_users SET bot_responsavel = '$userId' WHERE id = '$dadosdasessaosender_id'";
mysqli_query($connchat, $sql);

// Cadastra mensagem na conversa
$registramensagem ="INSERT INTO chatbull_chat_messages (chat_session_id, sender_id, local_id, sort_order, chat_message, created_at) VALUES ('$dadosdasessaochat_session_id', '$dadosdasessaosender_id', '$millitime', '$millitime', '$mensagemdocliente', '$dataatual')";
$registramensagem1 = mysqli_query($connchat, $registramensagem); 

// Se pediu pra remover o nome
if ($botsay == 'Seu nome foi removido de nossa lista, desculpe o inconveniente.' && $contacatacteres >= 7) {
    // Registra usuario na conversa
    $chatbull_chat_users2 ="INSERT INTO chatbull_chat_users (chat_session_id, user_id, user_role) VALUES ('$dadosdasessaochat_session_id', '1', 'agent')";
    $chatbull_chat_users3 = mysqli_query($connchat, $chatbull_chat_users2); 
    // Altera o status pra aceito
   $sql = "UPDATE chatbull_chat_requests SET request_status = 'accepted' WHERE chat_session_id = '$dadosdasessaochat_session_id'";
    mysqli_query($connchat, $sql);
    // Fecha a conversa pra não responder
    $sql = "UPDATE chatbull_chat_sessions SET session_status = 'closed' WHERE id = '$dadosdasessaochat_session_id'";
    mysqli_query($connchat, $sql); 
    $registramensagem ="INSERT INTO chatbull_chat_messages (chat_session_id, sender_id, local_id, sort_order,message_status, chat_message, created_at) 
                         VALUES ('$dadosdasessaochat_session_id', '2', '$millitime', '$millitime', 'read', '$botsay', '$dataatual')";
    $registramensagem1 = mysqli_query($connchat, $registramensagem); }

} // finaliza se não tiver mensagem



?>