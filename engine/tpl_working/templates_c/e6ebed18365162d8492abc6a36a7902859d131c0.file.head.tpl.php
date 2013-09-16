<?php /* Smarty version Smarty-3.1.13, created on 2013-09-13 12:36:35
         compiled from "C:\xampp\htdocs\engine\templates\construct\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23770521f36ad34eae8-06625038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6ebed18365162d8492abc6a36a7902859d131c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\engine\\templates\\construct\\head.tpl',
      1 => 1379064982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23770521f36ad34eae8-06625038',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_521f36ad3aa973_73657791',
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'date' => 0,
    'server' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521f36ad3aa973_73657791')) {function content_521f36ad3aa973_73657791($_smarty_tpl) {?>﻿<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
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
		
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['server']->value;?>
/css/style.css" />
		<script type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['server']->value;?>
/js/jquery-1.9.1.min.js'></script>
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