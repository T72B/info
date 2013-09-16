<?php /* Smarty version Smarty-3.1.13, created on 2013-08-29 15:31:59
         compiled from "C:\xampp\htdocs\engine\templates\error\404err.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23099521f3e4752ead3-64079876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5390ac960cf19e94d94c8625d2ab5dbc01fd8575' => 
    array (
      0 => 'C:\\xampp\\htdocs\\engine\\templates\\error\\404err.tpl',
      1 => 1377779418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23099521f3e4752ead3-64079876',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_521f3e475d9789_08342481',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521f3e475d9789_08342481')) {function content_521f3e475d9789_08342481($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ("construct/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("construct/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
<div id="errormessage">
<div class='wg4'>&nbsp;</div>
<div class='wg12'>
<h1>Ошибка 404</h1>
<h3>Это означает, что в данный момент запрашиваемая страница не существует!
<br/>
Проверьте правильность адреса.</h3>
</div>
<div class='wg4'>&nbsp;</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("construct/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>