<?php /* Smarty version Smarty-3.1.13, created on 2013-08-15 04:27:23
         compiled from "kyrs/templates/construct/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99748206352037a67015c59-25860230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7bb5443b116c09f14b4e51b74b5bf3fb5307d15' => 
    array (
      0 => 'kyrs/templates/construct/footer.tpl',
      1 => 1376555234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99748206352037a67015c59-25860230',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52037a67018b67_85970419',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52037a67018b67_85970419')) {function content_52037a67018b67_85970419($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/a6595204/public_html/Smarty/libs/plugins/modifier.date_format.php';
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