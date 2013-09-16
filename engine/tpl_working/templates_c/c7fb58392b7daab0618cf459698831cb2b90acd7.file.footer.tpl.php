<?php /* Smarty version Smarty-3.1.13, created on 2013-08-15 09:39:10
         compiled from "../kyrs/templates/construct/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125195195152037deaadde66-03498124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7fb58392b7daab0618cf459698831cb2b90acd7' => 
    array (
      0 => '../kyrs/templates/construct/footer.tpl',
      1 => 1376555234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125195195152037deaadde66-03498124',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52037deaae0cf5_52950772',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52037deaae0cf5_52950772')) {function content_52037deaae0cf5_52950772($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/a6595204/public_html/Smarty/libs/plugins/modifier.date_format.php';
?>﻿<div id='footer'>
			
			<div id="line"></div>
			<div id="copyright">
			<div > &copy; Mysite <?php echo smarty_modifier_date_format(time(),"%Y");?>
.</div>
			<div>All right received</div>
			</div>
		</div>
	</body>
</html><?php }} ?>