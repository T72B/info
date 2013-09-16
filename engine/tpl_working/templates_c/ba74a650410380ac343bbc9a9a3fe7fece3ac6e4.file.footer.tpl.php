<?php /* Smarty version Smarty-3.1.13, created on 2013-08-29 06:35:25
         compiled from "../../kyrs/templates/construct/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:762704789521f23ed4d1878-40318031%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba74a650410380ac343bbc9a9a3fe7fece3ac6e4' => 
    array (
      0 => '../../kyrs/templates/construct/footer.tpl',
      1 => 1376555234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '762704789521f23ed4d1878-40318031',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_521f23ed5bc9a8_89576174',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521f23ed5bc9a8_89576174')) {function content_521f23ed5bc9a8_89576174($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/a6595204/public_html/Smarty/libs/plugins/modifier.date_format.php';
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