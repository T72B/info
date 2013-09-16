<?php /* Smarty version Smarty-3.1.13, created on 2013-08-09 04:14:07
         compiled from "kyrs/templates/belarus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23691120952037a66779bf9-24289433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0be8f35776def17f2b504bed30f2c06ef53ce809' => 
    array (
      0 => 'kyrs/templates/belarus.tpl',
      1 => 1376035683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23691120952037a66779bf9-24289433',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52037a66a13345_45774134',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52037a66a13345_45774134')) {function content_52037a66a13345_45774134($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ("construct/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="menu_bar">
			<div class="menu_action_item">
				<a href="#">Беларусь</a>
			</div>
			<div class="devide"></div>
			<div class="menu_item">
				<a href="russia">Россия</a>
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