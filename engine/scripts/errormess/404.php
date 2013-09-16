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

$lang = 'ru';

$smarty->assign('title', 'Ошибочка');
$smarty->assign('lang', $lang);
$smarty->assign('menu_href', $menu_href);
$smarty->assign('menu_caption', $menu_caption[$lang]);
$smarty->assign('menu_class',$menu_arr );
$smarty->assign('description','Ошибка отсутствия файла');
$smarty->assign('keywords', 'ошибка, 404');
$smarty->display('error/404err.tpl');

?>