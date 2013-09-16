<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/config/settings.php');
require($smarty_path.'libs/Smarty.class.php');
require_once($scripts_path.'menu.php');


$smarty = new Smarty;

$smarty->template_dir = $templates_path;
$smarty->compile_dir = $tpl_compile_path;
$smarty->config_dir = $tpl_config_path;
$smarty->cache_dir = $tpl_cache_path;

$lang = 'ru';

$menu_index = 0;
$menu_arr[$menu_index] = "menu_action_item";

$today_caption = date("d/m/Y");

$curUrl = $_SERVER['SERVER_NAME'].$_SERVER['REDIRECT_URL'];
 $langEnUrl = preg_replace('/lang\/(\w+)\//','lang/en/',$curUrl);
 $langRuUrl = preg_replace('/lang\/(\w+)\//','lang/ru/',$curUrl);

$smarty->assign('title', 'Курсы валют');
$smarty->assign('date', str_replace("/",".",$today_caption));
$smarty->assign('lang', $lang);
$smarty->assign('langEnUrl', 'http://'.$langEnUrl);
$smarty->assign('langRuUrl', 'http://'.$langRuUrl);
$smarty->assign('description','Курсы валют банков центрально-европейского региона на ');
$smarty->assign('keywords', 'Курсы валют, центральный банк, центробанк, нацбанк, национальный банк, банк, валюта, экономика');
$smarty->assign('menu_href', $menu_href);
$smarty->assign('menu_caption', $menu_caption[$lang]);
$smarty->assign('menu_class',$menu_arr );
$smarty->assign('caption','Официальный курс национальной валюты по отношению к иностранным валютам, устанавливаемый Центральным банком ежедневно.');
$smarty->display('index.tpl');
?>

