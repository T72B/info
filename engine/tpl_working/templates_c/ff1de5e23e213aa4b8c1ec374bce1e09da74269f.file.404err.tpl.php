<?php /* Smarty version Smarty-3.1.13, created on 2013-08-16 08:58:08
         compiled from "../kyrs/templates/error/404err.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21231618452037deaa0b9a1-93004081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff1de5e23e213aa4b8c1ec374bce1e09da74269f' => 
    array (
      0 => '../kyrs/templates/error/404err.tpl',
      1 => 1376649886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21231618452037deaa0b9a1-93004081',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52037deaa8a423_10585029',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52037deaa8a423_10585029')) {function content_52037deaa8a423_10585029($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ("construct/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


clude file="construct/menu.tpl"}
		
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