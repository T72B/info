<?php /* Smarty version Smarty-3.1.13, created on 2013-08-29 06:35:24
         compiled from "../../kyrs/templates/construct/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:257403003521f23ecaedb49-97730796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1208c1ff526cf9550adce781a5f2cc757c1623c5' => 
    array (
      0 => '../../kyrs/templates/construct/head.tpl',
      1 => 1376657329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '257403003521f23ecaedb49-97730796',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'date' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_521f23ecd31b09_31594105',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521f23ecd31b09_31594105')) {function content_521f23ecd31b09_31594105($_smarty_tpl) {?>﻿<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html>
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
		<meta charset='UTF-8'>
		<meta name='keywords' content='<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
'>
		<meta name='Description' content='<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
'>
		
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
	</head>
	<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1&appId=613221925364769";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script><?php }} ?>