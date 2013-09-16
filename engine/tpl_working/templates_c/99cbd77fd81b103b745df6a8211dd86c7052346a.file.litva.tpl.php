<?php /* Smarty version Smarty-3.1.13, created on 2013-08-09 04:14:31
         compiled from "kyrs/templates/litva.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109782110352037ba65fc1d1-17888442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99cbd77fd81b103b745df6a8211dd86c7052346a' => 
    array (
      0 => 'kyrs/templates/litva.tpl',
      1 => 1376035677,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109782110352037ba65fc1d1-17888442',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52037ba6662257_19499003',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52037ba6662257_19499003')) {function content_52037ba6662257_19499003($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ("construct/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="menu_bar">
			<div class="menu_item">
				<a href="belarus">Беларусь</a>
			</div>
			<div class="devide"></div>
			<div class="menu_item">
				<a href="russia">Россия</a>
			</div>
			<div class="devide"></div>
			<div class="menu_action_item"><a href="#">Литва</a>
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