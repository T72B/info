<?php /* Smarty version Smarty-3.1.13, created on 2013-08-09 04:14:20
         compiled from "kyrs/templates/russia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18617463352037ba3314f54-07253122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd771d618fa9241b9e6775e3e9372a3dd4942904c' => 
    array (
      0 => 'kyrs/templates/russia.tpl',
      1 => 1376035670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18617463352037ba3314f54-07253122',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52037ba3369dd7_25479134',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52037ba3369dd7_25479134')) {function content_52037ba3369dd7_25479134($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ("construct/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="menu_bar">
			<div class="menu_item">
				<a href="belarus">Беларусь</a>
			</div>
			<div class="devide"></div>
			<div class="menu_action_item">
				<a href="#">Россия</a>
			</div>
			<div class="devide"></div>
			<div class="menu_item"><a href="litva">Литва</a>
			</div>
			<div class="devide"></div>
			<div class="menu_item">
				<a href="latvia">Латвия</a>
			</div>
			<div class="devide"></div>
			<div class="menu_item">
				<a href="poland">Польша</a>
			</div>
			<div class="devide"></div>
			<div class="menu_item">
				<a href="ukraine">Украина</a>
			</div>
		</div>

<?php echo $_smarty_tpl->getSubTemplate ("construct/body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("construct/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>