<?php

require_once ($_SERVER['DOCUMENT_ROOT'].'/config/settings.php');
require($smarty_path.'libs/Smarty.class.php');
require_once ($scripts_path.'menu.php');
//require_once($scripts_path.'result.php');

$smarty = new Smarty;

$smarty->template_dir = $templates_path;
$smarty->compile_dir = $tpl_compile_path;
$smarty->config_dir = $tpl_config_path;
$smarty->cache_dir = $tpl_cache_path;

$smarty->assign('title', 'Ошибочка');
$smarty->assign('description','Ошибка доступа');
$smarty->assign('keywords', 'ошибка, 403');
$smarty->display('error/403err.tpl');

?>