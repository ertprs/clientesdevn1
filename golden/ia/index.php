<?php
/***************************************
* http://www.devn1.com
* PROGRAM O
* Version: 2.6.11
* FILE: index.php
* AUTHOR: Elizabeth Perreau and Dave Morton
* DATE: 02-13-2013
* DETAILS: King Bot's starting point
***************************************/

if (!file_exists('config/global_config.php'))
{
    # No config exists we will run install
    //header('Location: install/install_programo.php');
    exit('King Bot exists, but is not installed. <a href="install/install_programo.php">Install King Bot</a>');
}
else
{
    $get_vars = filter_input_array(INPUT_GET);
    $qs = '?';

    if (!empty($get_vars))
    {
        $qs .= http_build_query($get_vars);
    }
    # Config exists we will goto the bot
    $thisFile = __FILE__;

    /** @noinspection PhpIncludeInspection */
    require_once('config/global_config.php');
    require_once(_LIB_PATH_ . '/misc_functions.php');

    /** @noinspection PhpUndefinedVariableInspection */
    $format = (isset($get_vars['format'])) ? $get_vars['format'] : $format;
    $format = _strtolower($format);

    switch ($format)
    {
        case 'json':
            $gui = 'jquery';
            break;
        case 'xml':
            $gui= 'xml';
            break;
        default:
            $gui = 'plain';
    }

    if (!defined('SCRIPT_INSTALLED'))
    {
        header('Location: ' . _INSTALL_URL_ . 'install_programo.php');
    }
    else
    {
        header("Location: gui/$gui/$qs");
    }
}
