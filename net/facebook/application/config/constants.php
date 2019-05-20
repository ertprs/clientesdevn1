<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| App version
*/
defined('APP_VERSION') OR define('APP_VERSION', '2.5.2');
defined('APP_VERSION_DEV') OR define('APP_VERSION_DEV', '252');
/*
| Assets version
*/
defined('ASSETS_VERSION') OR define('ASSETS_VERSION', 'kp2101198');
/*
| Facebook API version
*/
defined('FB_API_VERSION') OR define('FB_API_VERSION', '2.9');
defined('FB_IMPORT_MAX_GROUPS') OR define('FB_IMPORT_MAX_GROUPS', '2500');
defined('FB_IMPORT_MAX_PAGES') OR define('FB_IMPORT_MAX_PAGES', '1000');
defined('HTML_GROUPS_PATTERN') OR define('HTML_GROUPS_PATTERN', '~(<tr>(.*?)</tr>)~');
/*
| The author of the script
*/
defined('APP_AUTHOR') OR define('APP_AUTHOR', 'PandiSoft - pandisoft.com');
/*
| Enable SQL import
*/
defined('IMPORT_DB') OR define('IMPORT_DB', FALSE);
/*
| Date that will be injected on each post status position
*/
defined('FB_PDP_POSITTION') OR define('FB_PDP_POSITTION', 'bottom');
/*
| Send images as data instead of sending image URL
*/
defined('FB_SEND_IMAGE_AS_MP') OR define('FB_SEND_IMAGE_AS_MP', TRUE);
/*
| Using file_get_contens Instead of CURL
*/
defined('USE_GET_FILE_CONTENTS') OR define('USE_GET_FILE_CONTENTS', TRUE);
/*
| Using multi Thread to send posts
*/
defined('USE_MULTI_THREAD') OR define('USE_MULTI_THREAD', TRUE);
/*
| Unique post format (1 = Random string, 2 = Current Date time, 3 - Mixte of 1 - 2)
*/
defined('UNIQUE_POST_FORMAT') OR define('UNIQUE_POST_FORMAT', 1);
/*
|  Display less data
*/
defined('LESS_DATA_ON_DATATABLE') OR define('LESS_DATA_ON_DATATABLE', FALSE);
/*
|  Wither to Use Datatable plugin or not, if not sample table filter will be used instead and no pagination
*/
defined('USE_DT_PLUGIN') OR define('USE_DT_PLUGIN', TRUE);
/*
|--------------------------------------------------------------------------
| In some env the Constant is not difined
|--------------------------------------------------------------------------
*/
defined('GLOB_BRACE') OR define('GLOB_BRACE', 128);
/*
|--------------------------------------------------------------------------
| If the Exnteded version is True options to manage the users account will be activated
|--------------------------------------------------------------------------
*/
defined('EXTENDED_VERSION') OR define('EXTENDED_VERSION', FALSE);
/*
|--------------------------------------------------------------------------
| Enable Sale post type
|--------------------------------------------------------------------------
*/
defined('ENABLE_SALE_POST_TYPE') OR define('ENABLE_SALE_POST_TYPE', FALSE);
/*
|--------------------------------------------------------------------------
| Generate custom page for LINK post type in order to customize the link details
|--------------------------------------------------------------------------
*/
defined('ENABLE_LINK_CUSTOMIZE') OR define('ENABLE_LINK_CUSTOMIZE', FALSE);
/*
|--------------------------------------------------------------------------
| Ads file name
|--------------------------------------------------------------------------
*/
defined('ENABLE_ADS') OR define('ENABLE_ADS', FALSE);
defined('RAND_INT_SCHEDULE') OR define('RAND_INT_SCHEDULE', TRUE);
defined('ENABLE_PROXY') OR define('ENABLE_PROXY', FALSE);
defined('PROXYTYPE') OR define('PROXYTYPE', CURLPROXY_HTTP);
/*
|--------------------------------------------------------------------------
| Index File
|--------------------------------------------------------------------------
*/
defined('INDEX_PAGE') OR define('INDEX_PAGE', "");
/*
|--------------------------------------------------------------------------
| Enable / Disable Database debug
|--------------------------------------------------------------------------
*/
defined('DB_DEBUG') OR define('DB_DEBUG', FALSE);
defined('DEMO_LINK') OR define('DEMO_LINK', NULL);
defined('DEMO_LINK_TEXT') OR define('DEMO_LINK_TEXT', NULL);

defined('FAQ_TEXT') OR define('FAQ_TEXT', "FAQs");
defined('FAQ_PAGE') OR define('FAQ_PAGE', "faq");

/*------------------------------------*/
defined('MAX_NUM_IMG_POST') OR define('MAX_NUM_IMG_POST', "6");
/*
|--------------------------------------------------------------------------
| Module location
|--------------------------------------------------------------------------
*/
defined('MODULES_LOCATION') OR define('MODULES_LOCATION', "modules");
defined('MODULES_LOCATION_PATH') OR define('MODULES_LOCATION_PATH', "application/modules");
/*
| generate missing word on the translation file
*/
defined('GENERATE_LANG') OR define('GENERATE_LANG', FALSE);
defined('CSRF_TOKEN_NAME') OR define('CSRF_TOKEN_NAME', "csrf_kingposter");
defined('ENABLE_TWOCHECKOUT') OR define('ENABLE_TWOCHECKOUT', FALSE);
/*
| Email from header
*/
defined('EMAIL_FROM') OR define('EMAIL_FROM', 'no-reply@'.parse_url(BASE_URL, PHP_URL_HOST));
defined('ADMIN_EMAIL') OR define('ADMIN_EMAIL', 'no-reply@'.parse_url(BASE_URL, PHP_URL_HOST));
/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code
