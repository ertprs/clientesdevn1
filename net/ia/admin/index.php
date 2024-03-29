<?PHP
/***************************************
 * http://www.devn1.com
 * Devn1 Bot
 * Version: 2.6.11
 * FILE: index.php
 * AUTHOR: Elizabeth Perreau and Dave Morton
 * DATE: FEB 01 2016
 * DETAILS: Gateway to the admin functions for the script
 ***************************************/

$thisFile = __FILE__;

if (!file_exists('../config/global_config.php'))
{
    header('location: ../install/install_programo.php');
    exit();
}

/** @noinspection PhpIncludeInspection */
require_once('../config/global_config.php');

// set up error logging and display
ini_set('log_errors', true);
ini_set('error_log', _LOG_PATH_ . 'admin.error.log');
ini_set('html_errors', false);
ini_set('display_errors', false);

//load shared files
/** @noinspection PhpIncludeInspection */
require_once(_LIB_PATH_ . 'PDO_functions.php');
/** @noinspection PhpIncludeInspection */
require_once(_LIB_PATH_ . 'error_functions.php');
/** @noinspection PhpIncludeInspection */
require_once(_LIB_PATH_ . 'misc_functions.php');
/** @noinspection PhpIncludeInspection */
require_once(_LIB_PATH_ . 'template.class.php');
/** @noinspection PhpIncludeInspection */
require_once(_ADMIN_PATH_ . 'allowedPages.php');

set_error_handler('handle_errors', E_ALL | E_USER_ERROR | E_USER_WARNING | E_USER_NOTICE);
$branches = array(
    'master' => 'Master',
    'dev' => 'Development',
    'person' => 'Person Tag Testing',
);

$editScript = '';
$editScriptTag = '';
// Set session parameters
$session_name = 'PGO_Admin';
session_name($session_name);
session_start();
$msg = '';

// Get form inputs
$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);
$page = ($page === false || $page === null) ? 'main' : $page;

if (!array_key_exists($page, $allowed_pages))
{
    $msg = 'Invalid argument!';
}

$allowed_functions_array = array('updateBot','addBotPersonality','getBot','showBugForm','sendMail');
$allowed_input_vars = (isset($allowed_pages[$page])) ? $allowed_pages[$page] : array();
$form_vars = clean_inputs($allowed_input_vars);

// Set default values
$bot_name = '<b class="red">not selected</b>';
$hide_logo = '';
$curPage = '';
$branch = (!empty($_SESSION['useBranch'])) ? $_SESSION['useBranch'] : 'master';

// Begin script execution
$thisPath = dirname(__FILE__);
$template = new Template("$thisPath/default.page.htm");
$githubVersion = trim(getCurrentVersion($branch));
$currentLocalVersion = VERSION;

$upToDate = <<<endUTD

<div class="vert"><strong>King Boot</strong></div>
<div class="vert">Versão Atual: $currentLocalVersion</div>
<!-- Current Database Name: {$dbn} -->
endUTD;

$newVersionAvailable = "Devn1 Bot $githubVersion is now available for the "
. $branches[$branch] . ' branch. <a href="https://github.com/Program-O/Program-O/archive/' . $branch
. '.zip">Click here</a> to download it.<br> (You are currently using version ' . VERSION . ' of the '
. $branches[$branch] . ' branch)';

$version = (version_compare(VERSION, $githubVersion, '>=')) ? $upToDate : $newVersionAvailable;

if ($page == 'logout')
{
    logout();
}

$logged_in = getLoginStatus();
$curPage = 'logout';

switch ($logged_in)
{
    case true:
    $curPage = (isset($form_vars['page'])) ? $form_vars['page'] : 'main';
    break;
    default:
    $curPage = (isset($form_vars['page']) && $form_vars['page'] == 'login') ? login() : 'logout';
}

$name       = (isset($_SESSION['poadmin']['name'])) ? $_SESSION['poadmin']['name'] : '';
$ip         = (isset($_SESSION['poadmin']['ip'])) ? $_SESSION['poadmin']['ip'] : '';
$last       = (isset($_SESSION['poadmin']['last_login'])) ? $_SESSION['poadmin']['last_login'] : '';
$lip        = (isset($_SESSION['poadmin']['lip'])) ? $_SESSION['poadmin']['lip'] : '';
$llast      = (isset($_SESSION['poadmin']['prior_login'])) ? $_SESSION['poadmin']['prior_login'] : '';
$bot_name   = (isset($_SESSION['poadmin']['bot_name'])) ? $_SESSION['poadmin']['bot_name'] : $bot_name;
$bot_id     = (isset($_SESSION['poadmin']['bot_id'])) ? $_SESSION['poadmin']['bot_id'] : 1;
$hide_logo  = (isset($_SESSION['display'])) ? $_SESSION['display'] : '';
$bot_format = (isset($_SESSION['poadmin']['bot_format'])) ? $_SESSION['poadmin']['bot_format'] : '';


# Build page sections
# ordered here in the order that the page is constructed
$logo           = $template->getSection('Logo');
$titleSpan      = $template->getSection('TitleSpan');
$main           = $template->getSection('Main');
$divDecoration  = '';
$mainContent    = $template->getSection('LoginForm');
$noLeftNav      = $template->getSection('NoLeftNav');
$noRightNav     = $template->getSection('NoRightNav');
$navHeader      = $template->getSection('NavHeader');
$footer         = $template->getSection('Footer');
$topNav         = '';
$leftNav        = '';
$rightNav       = '';
$rightNavLinks  = '';
$lowerScripts   = $template->getSection('LogoLinkScript');
$pageTitleInfo  = '';
$topNavLinks    = makeLinks('top', makeTopLinks());
$leftNavLinks   = makeLinks('left', makeLeftLinks());
$mediaType      = ' media="screen"';
$mainTitle      = 'King Boot - Login';
$FooterInfo     = '<p>&copy; 2019 King Boot<br /><a href="http://www.devn1.com.br">Devn1 Web</a></p>';
$headerTitle    = '';
$pageTitle      = 'King Boot - Login';
$upperScripts   = '';
$extraCSS       = '';

//if we get to the login page and we are still actually logged in
//just destroy the session to prevent weirdness
if ($curPage == 'login' && !empty($_SESSION['poadmin']['logged_in']))
{
    $_SESSION = array();
}

$_SESSION['poadmin']['curPage'] = $curPage;
($curPage != 'logout' || $curPage == 'login') ? require_once("{$curPage}.php") : false;

$bot_format_link = (!empty($bot_format)) ? "&amp;format=$bot_format" : '';
$curPage = (isset($curPage)) ? $curPage : 'main';
$upperScripts .= ($hide_logo == 'HideLogoCSS') ? $template->getSection('HideLogoCSS') : '';


# Build page content from the template

$content  = $template->getSection('Header');
#$content .= "hide_logo = $hide_logo";
$content .= $template->getSection('PageBody');

# Replace template labels with real data
$styleSheet = 'style.css';
$errMsgClass = (!empty($msg)) ? "ShowError" : "HideError";
$errMsgStyle = $template->getSection($errMsgClass);
$bot_id = ($bot_id == 'new') ? 0 : $bot_id;

switch ($branch)
{
    case 'master':
    $bSelOptD = '';
    $bSelOptM = ' selected="selected"';
    break;
    default:
    $bSelOptD = ' selected="selected"';
    $bSelOptM = '';
}
$searches = array(
    '[charset]'         => $charset,
    '[myPage]'          => $curPage,
    '[pageTitle]'       => $pageTitle,
    '[styleSheet]'      => $styleSheet,
    '[mediaType]'       => $mediaType,
    '[extraCSS]'        => $extraCSS,
    '[upperScripts]'    => $upperScripts,
    '[logo]'            => $logo,
    '[pageTitleInfo]'   => $pageTitleInfo,
    '[topNav]'          => $topNav,
    '[leftNav]'         => $leftNav,
    '[rightNav]'        => $rightNav,
    '[main]'            => $main,
    '[footer]'          => $footer,
    '[lowerScripts]'    => $lowerScripts,
    '[titleSpan]'       => $titleSpan,
    '[divDecoration]'   => $divDecoration,
    '[topNavLinks]'     => $topNavLinks,
    '[navHeader]'       => $navHeader,
    '[leftNavLinks]'    => $leftNavLinks,
    '[mainTitle]'       => $mainTitle,
    '[mainContent]'     => $mainContent,
    '[rightNavLinks]'   => $rightNavLinks,
    '[FooterInfo]'      => $FooterInfo,
    '[headerTitle]'     => $headerTitle,
    '[errMsg]'          => $msg,
    '[bot_id]'          => $bot_id,
    '[bot_name]'        => $bot_name,
    '[errMsgStyle]'     => $errMsgStyle,
    '[noRightNav]'      => $noRightNav,
    '[noLeftNav]'       => $noLeftNav,
    '[version]'         => $version,
    '[branch]'          => $branches[$branch],
    '[bSelOptD]'        => $bSelOptD,
    '[bSelOptM]'        => $bSelOptM,
    '[bot_format_link]' => $bot_format_link,
    '[editScriptTag]'   => $editScriptTag,
);

foreach ($searches as $search => $replace)
{
    $content = str_replace($search, $replace, $content);
}

$content = str_replace('[myPage]', $curPage, $content);
$content = str_replace('[divDecoration]', $divDecoration, $content);
$content = str_replace('[blank]', '', $content);

pgo_session_gc();
exit($content);

/**
 * Function makeLinks
 *
 * @param $section
 * @param     $linkArray
 * @return string
 */
function makeLinks($section, $linkArray)
{
    $out = "<!-- making links for section $section -->\n";
    global $template, $curPage;

    $curPage = (empty($curPage)) ? 'main' : $curPage;
    $botName = (isset($_SESSION['poadmin']['bot_name'])) ? $_SESSION['poadmin']['bot_name'] : '<b class="red">not selected</b>';
    $botId = (isset($_SESSION['poadmin']['bot_id'])) ? $_SESSION['poadmin']['bot_id'] : 1;
    $botId = ($botId == 'new') ? 1 : $botId;
    # [linkClass][linkHref][linkOnclick][linkAlt][linkTitle]>[linkLabel]
    $linkText = $template->getSection('NavLink');

    foreach ($linkArray as $needle)
    {
        $tmp = $linkText;

        foreach ($needle as $search => $replace)
        {
            $tmp = str_replace($search, $replace, $tmp);
        }

        $linkClass = $needle['[linkHref]'];
        $linkClass = str_replace(' href="index.php?page=', '', $linkClass);
        $linkClass = str_replace('"', '', $linkClass);
        $curClass = ($linkClass == $curPage) ? 'selected' : 'noClass';

        if ($curPage == 'main')
        {
            $curClass = (stripos($linkClass, 'main') !== false) ? 'selected' : 'noClass';
        }

        $tmp = str_replace('[curClass]', $curClass, $tmp);
        $out .= "$tmp\n";
    }
    #print "<!-- returning links for section $section:\n\n out = $out\n\n -->\n";
    $strippedBotName = preg_replace('~\<b class="red"\>(.*?)\</b\>~', '$1', $botName);
    $out = str_replace('[botId]', $botId, $out);
    $out = str_replace('[curBot]', $botName, $out);
    $out = str_replace('[curBot2]', $strippedBotName, $out);

    return trim($out);
}


/**
 * Function makeTopLinks
 *
 * @return array
 */
function makeTopLinks()
{
    $out = array(

        array(
            '[linkClass]' => ' class="[curClass]"',
            '[linkHref]' => ' href="#"',
            '[linkOnclick]' => '',
            '[linkAlt]' => ' alt="Em Desenvolvimento"',
            '[linkTitle]' => ' title="Em Desenvolvimento"',
            '[linkLabel]' => 'Desenvolvimento'
        ),
        array(
            '[linkClass]' => ' class="[curClass]"',
            '[linkHref]' => ' href="#"',
            '[linkOnclick]' => '',
            '[linkAlt]' => ' alt="Em Desenvolvimento"',
            '[linkTitle]' => ' title="Em Desenvolvimento"',
            '[linkLabel]' => 'Desenvolvimento'
        ),
        array(
            '[linkClass]' => ' class="[curClass]"',
            '[linkHref]' => ' href="#"',
            '[linkOnclick]' => '',
            '[linkAlt]' => ' alt="Em Desenvolvimento"',
            '[linkTitle]' => ' title="Em Desenvolvimento"',
            '[linkLabel]' => 'Desenvolvimento'
        ),
        array(
            '[linkClass]' => '',
            '[linkHref]' => ' href="index.php?page=logout"',
            '[linkOnclick]' => '',
            '[linkAlt]' => ' alt="Sair"',
            '[linkTitle]' => ' title="Sair"',
            '[linkLabel]' => 'Sair'
        )
    );
    return $out;
}

/**
 * Function makeLeftLinks
 *
 * @return array
 */
function makeLeftLinks()
{
    $out = array(
        array( # Change bot
            '[linkClass]' => ' class="[curClass]"',
            '[linkHref]' => ' href="index.php"',
            '[linkOnclick]' => '',
            '[linkAlt]' => ' alt="Admin Inicio"',
            '[linkTitle]' => ' title="Admin Inicio"',
            '[linkLabel]' => 'Inicio'
        ),
        array( # Home
            '[linkClass]' => ' class="[curClass]"',
            '[linkHref]' => ' href="index.php?page=select_bots"',
            '[linkOnclick]' => '',
            '[linkAlt]' => ' alt="Alterar ou editar o bot atual"',
            '[linkTitle]' => ' title="Change or edit the current bot"',
            '[linkLabel]' => 'Bot atual: ([curBot])'
        ),
        array( # Bot Personality
            '[linkClass]' => ' class="[curClass]"',
            '[linkHref]' => ' href="index.php?page=botpersonality"',
            '[linkOnclick]' => '',
            '[linkAlt]' => ' alt="Edite a personalidade do seu bot\'s"',
            '[linkTitle]' => ' title="Edite a personalidade do seu bot\'s"',
            '[linkLabel]' => 'Personalidade do Bot'
        ),
        array( # Conversation Logs
            '[linkClass]' => ' class="[curClass]"',
            '[linkHref]' => ' href="index.php?page=logs"',
            '[linkOnclick]' => '',
            '[linkAlt]' => ' alt="Visualizar os registros de conversas"',
            '[linkTitle]' => ' title="Visualizar os registros de conversas"',
            '[linkLabel]' => 'Registros de Conversa'
        ),
        array( # Unknown inputs
            '[linkClass]' => ' class="[curClass]"',
            '[linkHref]' => ' href="index.php?page=unknown_inputs"',
            '[linkOnclick]' => '',
            '[linkAlt]' => ' alt="Ver Entradas Desconhecidas para este bot"',
            '[linkTitle]' => ' title="Visualizar entradas desconhecidas"',
            '[linkLabel]' => 'Entradas Desconhecidas'
        ),
        array( # Teach
            '[linkClass]' => ' class="[curClass]"',
            '[linkHref]' => ' href="index.php?page=teach"',
            '[linkOnclick]' => '',
            '[linkAlt]' => ' alt="Treine seu bot"',
            '[linkTitle]' => ' title="Treine seu bot"',
            '[linkLabel]' => 'Ensinar'
        ),
        array( # Upload AIML
            '[linkClass]' => ' class="[curClass]"',
            '[linkHref]' => ' href="index.php?page=upload"',
            '[linkOnclick]' => '',
            '[linkAlt]' => ' alt="Carregar arquivos AIML"',
            '[linkTitle]' => ' title="Carregar arquivos AIML"',
            '[linkLabel]' => 'Carregar AIML'
        ),
        array( # Download AIML
            '[linkClass]' => ' class="[curClass]"',
            '[linkHref]' => ' href="index.php?page=download"',
            '[linkOnclick]' => '',
            '[linkAlt]' => ' alt="Download de arquivos AIML"',
            '[linkTitle]' => ' title="Download de arquivos AIML"',
            '[linkLabel]' => 'Download AIML'
        ),
        array( # Clear AIML categories
            '[linkClass]' => ' class="[curClass]"',
            '[linkHref]' => ' href="index.php?page=clear"',
            '[linkOnclick]' => '',
            '[linkAlt]' => ' alt="Limpar Categorias AIML"',
            '[linkTitle]' => ' title="Limpar Categorias AIML"',
            '[linkLabel]' => 'Limpar Categorias AIML'
        ),
        array( # Spellcheck
            '[linkClass]' => ' class="[curClass]"',
            '[linkHref]' => ' href="index.php?page=spellcheck"',
            '[linkOnclick]' => '',
            '[linkAlt]' => ' alt="Edite as entradas do SpellCheck"',
            '[linkTitle]' => ' title="Edite as entradas do SpellCheck"',
            '[linkLabel]' => 'Verificação ortográfica'
        ),
        array( # Word censor
            '[linkClass]' => ' class="[curClass]"',
            '[linkHref]' => ' href="index.php?page=wordcensor"',
            '[linkOnclick]' => '',
            '[linkAlt]' => ' alt="Edite as entradas do Word Censor"',
            '[linkTitle]' => ' title="Edite as entradas do Word Censor"',
            '[linkLabel]' => 'Censura'
        ),
/*
        array( # person tag
            '[linkClass]' => ' class="[curClass]"',
            '[linkHref]' => ' href="index.php?page=person"',
            '[linkOnclick]' => '',
            '[linkAlt]' => ' alt="Person Transformations"',
            '[linkTitle]' => ' title="Person Transformations"',
            '[linkLabel]' => 'Person Transformations'
        ),
*/
        array( # Edit AIML
            '[linkClass]' => ' class="[curClass]"',
            '[linkHref]' => ' href="index.php?page=editAiml"',
            '[linkOnclick]' => '',
            '[linkAlt]' => ' alt="Pesquise e edite categorias AIML específicas"',
            '[linkTitle]' => ' title="Pesquise e edite categorias AIML específicas"',
            '[linkLabel]' => 'Pesquisar / Editar AIML'
        ),
        array( # Edit user-defined AIML ( from <learn> tag)
            '[linkClass]' => ' class="[curClass]"',
            '[linkHref]' => ' href="index.php?page=editUDAiml"',
            '[linkOnclick]' => '',
            '[linkAlt]' => ' alt="Pesquise e edite categorias AIML específicas"',
            '[linkTitle]' => ' title="Pesquise e edite categorias AIML específicas"',
            '[linkLabel]' => 'AIML definido pelo usuário'
        ),
        array(
            '[linkClass]' => ' class="[curClass]"',
            '[linkHref]' => ' href="index.php?page=srai_lookup"',
            '[linkOnclick]' => '',
            '[linkAlt]' => ' alt="Pesquisar e editar entradas na tabela srai_lookup"',
            '[linkTitle]' => ' title="Pesquisar e editar entradas na tabela srai_lookup"',
            '[linkLabel]' => 'Pesquisa SRAI'
        ),
        array(
            '[linkClass]' => ' class="[curClass]"',
            '[linkHref]' => ' href="index.php?page=demochat"',
            '[linkOnclick]' => '',
            '[linkAlt]' => ' alt="Execute uma versão de demonstração do seu bot"',
            '[linkTitle]' => ' title="Execute uma versão de demonstração do seu bot"',
            '[linkLabel]' => 'Teste seu bot'
        ),
        array(
            '[linkClass]' => '',
            '[linkHref]' => ' href="index.php?page=members"',
            '[linkOnclick]' => '',
            '[linkAlt]' => ' alt="Editar contas de administrador"',
            '[linkTitle]' => ' title="Editar contas de administrador"',
            '[linkLabel]' => 'Editar contas de administrador'
        ),
        array(
            '[linkClass]' => '',
            '[linkHref]' => ' href="index.php?page=logout"',
            '[linkOnclick]' => '',
            '[linkAlt]' => ' alt="Sair"',
            '[linkTitle]' => ' title="Sair"',
            '[linkLabel]' => 'Sair'
        ),
        array(
            '[linkClass]' => '',
            '[linkHref]' => ' href="' . _BASE_URL_ . '?bot_id=[botId][bot_format_link]"',
            '[linkOnclick]' => ' target="_blank"',
            '[linkAlt]' => ' alt="abra a página para [King] em uma nova guia/janela"',
            '[linkTitle]' => ' title="abra a página para [King] em uma nova guia/janela""',
            '[linkLabel]' => 'Fale com [KingBoot]'
        ),
        array(
            '[linkClass]' => '',
            '[linkHref]' => ' href="' . _BASE_URL_ . 'chatbot/debug/"',
            '[linkOnclick]' => ' target="_blank"',
            '[linkAlt]' => ' alt="Visualizador de Arquivos de Depuração"',
            '[linkTitle]' => ' title="Visualizar os arquivos de depuração em uma nova guia / janela"',
            '[linkLabel]' => 'Visualizador de Arquivos de Depuração'
        ),
        array(
            '[linkClass]' => '',
            '[linkHref]' => ' href="../logs/"',
            '[linkOnclick]' => ' target="_blank"',
            '[linkAlt]' => ' alt="Log File Viewer"',
            '[linkTitle]' => ' title="Log File Viewer em uma nova aba/janela"',
            '[linkLabel]' => 'Visualizador de arquivos de log'
        ),
        array(
            '[linkClass]' => '',
            '[linkHref]' => ' href="#"',
            '[linkOnclick]' => ' onclick="toggleLogo(); return false;"',
            '[linkAlt]' => ' alt="Alternar o logo"',
            '[linkTitle]' => ' title="Alternar o logo"',
            '[linkLabel]' => 'Alternar o logo'
        ),
    );
return $out;
}


/**
 * Function getCurrentVersion
 *
 * @param $branch
 * @return bool|mixed|string
 */
function getCurrentVersion($branch)
{
    if(isset($_SESSION['GitHubVersion'])) return $_SESSION['GitHubVersion'];
    $versionURLtemplate = 'https://raw.githubusercontent.com/Program-O/Program-O/[branch]/version.txt';
    $url = str_replace('[branch]', $branch, $versionURLtemplate);
    //file_put_contents("../logs/index.getCurrentVersion.branch_url.txt", print_r($url, true));
    $out = false;

    if (function_exists('curl_init'))
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, 'KingBoot/KingBoot');
        $out = curl_exec($ch);

        if (false === $out)
        {
            trigger_error('Not sure what it is, but there\'s a problem with checking the current version on GitHub. Maybe this will help: "' . curl_error($ch) . '"');
        }

        curl_close($ch);
    }

    $_SESSION['GitHubVersion'] = $out;

    return ($out !== false) ? $out : VERSION;
}

/**
 * Function handle_exceptions
 *
 * @param exception $e
 * @return string
 */

function login()
{
    global $form_vars, $msg;

    if ((!isset($form_vars['user_name'])) || (!isset($form_vars['pw'])))
    {
        return 'logout';
    }

    //$_SESSION['poadmin']['display'] = $hide_logo;
    $user_name = $form_vars['user_name'];
    $pw_hash = md5($form_vars['pw']);

    /** @noinspection SqlDialectInspection */
    $sql = 'SELECT * FROM `myprogramo` WHERE user_name = :user_name AND password = :pw_hash;';
    $params = array(':user_name' => $user_name, ':pw_hash' => $pw_hash);
    $debugSQL = db_parseSQL($sql, $params);
    //save_file(_LOG_PATH_ . 'login.sql.txt', $debugSQL);
    $row = db_fetch($sql, $params, __FILE__, __FUNCTION__, __LINE__);

    if (!empty($row))
    {
        $_SESSION['poadmin']['uid'] = $row['id'];
        $_SESSION['poadmin']['name'] = $row['user_name'];
        $_SESSION['poadmin']['lip'] = $row['last_ip'];
        $_SESSION['poadmin']['prior_login'] = date('l jS \of F Y h:i:s A', strtotime($row['last_login']));

        switch (true)
        {
            case (!empty($_SERVER['HTTP_CLIENT_IP'])):
            $ip = $_SERVER['HTTP_CLIENT_IP'];
            break;
            case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])):
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            break;
            default:
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        /** @noinspection SqlDialectInspection */
        $sql = "UPDATE `myprogramo` SET `last_ip` = :ip, `last_login` = CURRENT_TIMESTAMP WHERE user_name = :user_name limit 1";
        $params = array(':ip' => $ip, ':user_name' => $user_name);
        $transact = db_write($sql, $params, false, __FILE__, __FUNCTION__, __LINE__);
        $_SESSION['poadmin']['ip'] = $ip;
        $_SESSION['poadmin']['last_login'] = date('l jS \of F Y h:i:s A');

        /** @noinspection SqlDialectInspection */
        $sql = "SELECT * FROM `bots` WHERE bot_active = '1' ORDER BY bot_id ASC LIMIT 1";
        $row = db_fetch($sql,null, __FILE__, __FUNCTION__, __LINE__);
        $count = count($row);

        if ($count > 0)
        {
            $_SESSION['poadmin']['bot_id'] = $row['bot_id'];
            $_SESSION['poadmin']['bot_name'] = $row['bot_name'];
        }
        else
        {
            $_SESSION['poadmin']['bot_id'] = -1;
            $_SESSION['poadmin']['bot_name'] = "unknown";
        }
    }
    else {
        $msg .= "Login ou senha ioncorreta<br>\n";
    }

    if (empty($msg))
    {
        $_SESSION['poadmin']['logged_in'] = true;
        header('Location: index.php');
        return 'main';
    }

    return 'logout';
}

function logout()
{
    global $session_name, $session_cookie_domain, $session_cookie_path;

    $_SESSION = array();
    session_destroy();
    setcookie($session_name, '', time() - 3600, $session_cookie_path, $session_cookie_domain, false, false);
    header('Location: ./');
    exit();
}

function getLoginStatus()
{
    return (isset($_SESSION['poadmin']['logged_in']) && $_SESSION['poadmin']['logged_in'] === true) ? true : false;
}
