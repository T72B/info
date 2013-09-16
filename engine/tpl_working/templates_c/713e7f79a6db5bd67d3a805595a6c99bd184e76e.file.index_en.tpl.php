<?php /* Smarty version Smarty-3.1.13, created on 2013-09-13 15:38:41
         compiled from "C:\xampp\htdocs\engine\templates\index_en.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10529523307225ea0b2-50091561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '713e7f79a6db5bd67d3a805595a6c99bd184e76e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\engine\\templates\\index_en.tpl',
      1 => 1379075906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10529523307225ea0b2-50091561',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52330722833d71_58413212',
  'variables' => 
  array (
    'date' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52330722833d71_58413212')) {function content_52330722833d71_58413212($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ("construct/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("construct/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("construct/lang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id='content'>
<div class='wg4'>&nbsp;</div>
<div class='wg12'>
<h1>Exchange Rates</h1>
<h3> On this website you will find the official exchange rates of central banks:</h3>
<h4>
	<ui>
		<li><a href='http://www.nbrb.by' target="_blank">Belarus</a></li>
		<li><a href='http://www.cbr.ru' target="_blank">Russia</a></li>
		<li><a href='http://www.bank.gov.ua' target="_blank">Ukraine</a></li>
		<li><a href='http://www.lb.lt' target="_blank">Lithuania</a></li>
		<li><a href='http://www.bank.lv' target="_blank">Latvia</a></li>
		<li><a href='http://www.nbp.pl' target="_blank">Poland</a></li>
	<ui>
</h4>
 
 <h4> Attention! All courses are displayed as at <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</h4>
 <h5>The update occurs every 4 hours</h5>

 <div class="fb-like" data-href="http://mysite13.net78.net" data-width="200" data-layout="button_count" data-show-faces="true" data-send="false"></div>
</div>
<div class='wg4'>&nbsp;</div>
</div>

<!-- START OF HIT COUNTER CODE -->
<br><script language="JavaScript" src="http://www.counter160.com/js.js?img=6"></script><br><a href="http://www.000webhost.com"><img src="http://www.counter160.com/images/6/left.png" alt="Free web hosting" border="0" align="texttop"></a><a href="http://www.hosting24.com"><img alt="Web hosting" src="http://www.counter160.com/images/6/right.png" border="0" align="texttop"></a>
<!-- END OF HIT COUNTER CODE -->

<?php echo $_smarty_tpl->getSubTemplate ("construct/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>