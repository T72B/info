<?php

require_once ($_SERVER['DOCUMENT_ROOT'].'/config/settings.php');

require($smarty_path.'libs/Smarty.class.php');
require_once ($scripts_path.'menu.php');
require_once($scripts_path.'result.php');

$smarty = new Smarty;

$smarty->template_dir = $templates_path;
$smarty->compile_dir = $tpl_compile_path;
$smarty->config_dir = $tpl_config_path;
$smarty->cache_dir = $tpl_cache_path;

$lang = 'en';


$menu_index = 2;
$menu_arr[$menu_index] = "menu_action_item";

$table = 'val_rus';

$today_caption = date("d/m/Y");

$mas = array();



 if(isDateSet($table)){
  	$mas = showResult($table);
    }else{
		$smarty->assign('error_message', E_01);                          // доработать вывод сообщения об ошибке
		}

$curUrl = $_SERVER['SERVER_NAME'].$_SERVER['REDIRECT_URL'];
 $langEnUrl = preg_replace('/lang\/(\w+)\//','lang/en/',$curUrl);
 $langRuUrl = preg_replace('/lang\/(\w+)\//','lang/ru/',$curUrl);

$smarty->assign('title', 'Курсы валют ЦБ РФ');
$smarty->assign('massiv', $mas);
$smarty->assign('date', str_replace("/",".",$today_caption));
$smarty->assign('description','Курсы валют центрального банка на ');
$smarty->assign('lang', $lang);
$smarty->assign('langEnUrl', 'http://'.$langEnUrl);
$smarty->assign('langRuUrl', 'http://'.$langRuUrl);
$smarty->assign('keywords', 'Курсы валют, центральный банк, центробанк, банк, валюта, экономика, mysite, mysite13, mysite13.net, mysite13.net.78, mysite13.net78.net');
$smarty->assign('menu_href', $menu_href);
$smarty->assign('menu_caption', $menu_caption[$lang]);
$smarty->assign('menu_class',$menu_arr );
$smarty->assign('caption','Официальный курс российского рубля по отношению к иностранным валютам, устанавливаемый Центральным банком Российской Федерации ежедневно.');
$smarty->display('html.tpl');

?>