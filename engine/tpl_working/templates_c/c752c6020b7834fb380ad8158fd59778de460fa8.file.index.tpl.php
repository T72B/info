<?php /* Smarty version Smarty-3.1.13, created on 2013-08-16 08:50:37
         compiled from "kyrs/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16122533685200c6ac4c6088-97840928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c752c6020b7834fb380ad8158fd59778de460fa8' => 
    array (
      0 => 'kyrs/templates/index.tpl',
      1 => 1376657431,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16122533685200c6ac4c6088-97840928',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5200c6ac8008d1_90416461',
  'variables' => 
  array (
    'date' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5200c6ac8008d1_90416461')) {function content_5200c6ac8008d1_90416461($_smarty_tpl) {?>﻿
<?php echo $_smarty_tpl->getSubTemplate ("construct/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("construct/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id='content'>
<div class='wg4'>&nbsp;</div>
<div class='wg12'>
<h1>Курсы валют</h1>
<h3> На данном сайте вы найдете официальные курсы валют центральных банков:</h3>
<h4>
	<ui>
		<li><a href='http://www.nbrb.by' target="_blank">Беларуси</a></li>
		<li><a href='http://www.cbr.ru' target="_blank">России</a></li>
		<li><a href='http://www.bank.gov.ua' target="_blank">Украины</a></li>
		<li><a href='http://www.lb.lt' target="_blank">Литвы</a></li>
		<li><a href='http://www.bank.lv' target="_blank">Латвии</a></li>
		<li><a href='http://www.nbp.pl' target="_blank">Польши</a></li>
	<ui>
</h4>
 
 <h5> Внимание! Все курсы отображены по состоянию на <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
 11.00 </h5>

 <div class="fb-like" data-href="http://mysite13.net78.net" data-width="200" data-layout="button_count" data-show-faces="true" data-send="false"></div>
</div>
<div class='wg4'>&nbsp;</div>
</div>

<!-- START OF HIT COUNTER CODE -->
<br><script language="JavaScript" src="http://www.counter160.com/js.js?img=6"></script><br><a href="http://www.000webhost.com"><img src="http://www.counter160.com/images/6/left.png" alt="Free web hosting" border="0" align="texttop"></a><a href="http://www.hosting24.com"><img alt="Web hosting" src="http://www.counter160.com/images/6/right.png" border="0" align="texttop"></a>
<!-- END OF HIT COUNTER CODE -->

<?php echo $_smarty_tpl->getSubTemplate ("construct/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>