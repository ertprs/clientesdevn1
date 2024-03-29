<?php
/***************************************
 * http://www.devn1.com
 * Devn1 Bot
 * Version: 2.6.11
 * FILE: index.php
 * AUTHOR: Elizabeth Perreau and Dave Morton
 * DATE: FEB 01 2016
 * DETAILS: This is the interface for the Devn1 Bot JSON API
 ***************************************/

$cookie_name = 'Program_O_JSON_GUI';
$botId = filter_input(INPUT_GET, 'bot_id');
$convoId = filter_input(INPUT_GET, 'convo_id');
$convo_id = (isset($_COOKIE[$cookie_name])) ? $_COOKIE[$cookie_name] : ($convoId !== false && $convoId !== null) ? $convoId : jq_get_convo_id();
if (empty($convo_id)) $convo_id = jq_get_convo_id();
$bot_id = (isset($_COOKIE['bot_id'])) ? $_COOKIE['bot_id'] : ($botId !== false && $botId !== null) ? $botId : 1;

if (is_nan($bot_id) || empty($bot_id))
{
    $bot_id = 1;
}

setcookie('bot_id', $bot_id);

// Experimental code
$HXFP  = (isset($_SERVER['HTTP_X_FORWARDED_PORT'])) ? $_SERVER['HTTP_X_FORWARDED_PORT'] : '';
$HSP   = (isset($_SERVER['SERVER_PORT'])) ? $_SERVER['SERVER_PORT'] : '';
$HTTPS = (isset($_SERVER['HTTPS'])) ? $_SERVER['HTTPS'] : '';
$HHOST = (isset($_SERVER['HTTP_HOST'])) ? $_SERVER['HTTP_HOST'] : '';
$protocol = ((!empty($HTTPS) && $HTTPS != 'off') || $HSP == 443 || $HXFP == 443) ? "https://" : "http://";
$base_URL = $protocol . $HHOST;                                   // set domain name for the script
$this_path = str_replace(DIRECTORY_SEPARATOR, '/', realpath(dirname(__FILE__)));  // The current location of this file, normalized to use forward slashes
$this_path = str_replace($_SERVER['DOCUMENT_ROOT'], $base_URL, $this_path);       // transform it from a file path to a URL
$url = str_replace('gui/jquery', 'chatbot/conversation_start.php', $this_path);   // and set it to the correct script location
/*
  Example URL's for use with the chatbot API
  $url = 'http://api.devn1.com/v2.3.1/chatbot/';
  $url = 'http://localhost/Program-O/Program-O/chatbot/conversation_start.php';
  $url = 'chat.php';
*/

//$display = "The URL for the API is currently set as:<br />\n$url.<br />\n";
//$display .= 'Test this to make sure it is correct by <a href="' . $url . '?say=hello">clicking here</a>. Then remove this message from gui/jquery/index.php' . PHP_EOL;
//$display .= 'And don\'t forget to upload your AIML files in the admin area otherwise you will not get a response!' . PHP_EOL;
#$display = '';

/**
 * Function jq_get_convo_id
 *
 *
 * @return string
 */
function jq_get_convo_id()
{
    global $cookie_name;

    session_name($cookie_name);
    session_start();
    $convo_id = session_id();
    session_destroy();
    setcookie($cookie_name, $convo_id);

    return $convo_id;
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="Description" content="A Free Open Source AIML PHP MySQL Chatbot called Program-O. Version2"/>
    <meta name="keywords" content="Open Source, AIML, PHP, MySQL, Chatbot, Program-O, Version2"/>
    <title>KingBot Devn1</title>
    <link rel="stylesheet" type="text/css" href="main.css" media="all"/>
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon"/>
    <script type="text/javascript">
    var URL = '<?php echo $url ?>';
    </script>
</head>
<body>
<h3>King Boot</h3>
<p class="center">
    <!-- Esse é um sistema simples pra testar o sistema de chat do atendimento via whatsapp -->
</p>
<hr class="center">
<p class="center">
    <!-- Se tiver alguma duvida por favor entre em contato<a href="https://www.devn1.com.br">Aqui</a>. -->
</p>
<!-- The DIV below is for debugging purposes, and can be safely removed, if desired. -->
<!-- <div id="convo_id">Id da conversa: <?php echo $convo_id; ?></div> -->
<div class="centerthis">
    <div class="rightside">
        <div class="manspeech">
            <div class="triangle-border bottom blue">
                    <div class="botsay" id="textarea" contenteditable>&nbsp;&nbsp;&nbsp;&nbsp; Olá!</div>
            </div>
        </div>
        <div class="man"></div>
    </div>
    <div class="leftside">
        <div class="dogspeech">
            <div class="triangle-border-right bottom orange">
                <div class="usersay" id="textarea" contenteditable>&nbsp;</div>
            </div>
        </div>
        <br/>
        <div class="dog"></div>
    </div>
</div>
<div class="clearthis"></div>
<div class="centerthis">
    <form method="post" name="talkform" id="talkform" action="index.php">
        <div id="chatdiv">
            <label for="submit">Digite aqui:</label>
            <input type="text" name="say" id="say" size="20"/>
            <input type="submit" name="submit" id="submit" class="submit" value="Enviar"/>
            <input type="hidden" name="convo_id" id="convo_id" value="<?php echo $convo_id; ?>"/>
            <input type="hidden" name="bot_id" id="bot_id" value="<?php echo $bot_id; ?>"/>
            <input type="hidden" name="format" id="format" value="json"/>
        </div>
    </form>
</div>
<div id="shameless_plug">
    <!-- Envie um whats <a href="http://www.whatsapp.com">aqui</a>! -->
</div>
<!-- <div id="urlwarning"><?php echo $display ?></div> -->
<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        // put all your jQuery goodness in here.
        $('#talkform').submit(function (e) {
            e.preventDefault();
            $('#urlwarning').empty();
            $('.botsay').html('(Thinking...)');
            var user = $('#say').val();
            $('.usersay').text(user);
            var formdata = $("#talkform").serialize();
            $('#say').val('');
            $('#say').focus();
            $.get(URL, formdata, function (data) {
                console.info('Data =', data);
                var b = data.botsay;
                if (b.indexOf('[img]') >= 0) {
                    b = showImg(b);
                }
                if (b.indexOf('[link') >= 0) {
                    b = makeLink(b);
                }
                var usersay = data.usersay;
                if (user != usersay) {
                    $('.usersay').text(usersay);
                }
                $('.botsay').html(b);
                $('#urlwarning').hide();
            }, 'json').fail(function (xhr, textStatus, errorThrown) {
                console.error('XHR =', xhr.responseText);
                $('#urlwarning').html("Something went wrong! Error = " + errorThrown).show();
            });
            return false;
        });
    });
    function showImg(input) {
        var regEx = /\[img\](.*?)\[\/img\]/;
        var repl = '<br><a href="$1" target="_blank"><img src="$1" alt="$1" width="150" /></a>';
        var out = input.replace(regEx, repl);
        console.log('out = ' + out);
        return out
    }
    function makeLink(input) {
        var regEx = /\[link=(.*?)\](.*?)\[\/link\]/;
        var repl = '<a href="$1" target="_blank">$2</a>';
        var out = input.replace(regEx, repl);
        console.log('out = ' + out);
        return out;
    }
</script>
</body>
</html>