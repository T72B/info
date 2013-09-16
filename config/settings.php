<?php

//			PATH

$server = $_SERVER['DOCUMENT_ROOT'];

$smarty_path = $server.'/engine/Smarty/';
$templates_path = $server.'/engine/templates/';
$tpl_config_path = $server.'/engine/tpl_working/configs/';
$tpl_compile_path = $server.'/engine/tpl_working/templates_c/';
$tpl_cache_path = $server.'/engine/tpl_working/cache/';

$scripts_path = $server.'/engine/scripts/';

//			MySQL

// MySQL connect
/*
define('HOST','mysql2.000webhost.com');
define('USER','a6595204_user');
define('PASSWORD','igor198625');
define('BASE','a6595204_finance');
*/
define('HOST','localhost');
define('USER','root');
define('PASSWORD','');
define('BASE','valuta');

// tables for work
define('TBEL','val_byr');
define('TRUS','val_rus');
define('TLAT','val_lat');
define('TLIT','val_lit');
define('TPOL','val_pol');
define('TUKR','val_ukr');

define('E_01','В настоящее время база данных банка не доступна. Приносим свои извинения.');


?>