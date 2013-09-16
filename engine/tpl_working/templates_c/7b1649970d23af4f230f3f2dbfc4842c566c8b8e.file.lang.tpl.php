<?php /* Smarty version Smarty-3.1.13, created on 2013-09-13 14:56:45
         compiled from "C:\xampp\htdocs\engine\templates\construct\lang.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81625232c0bbc15e39-58342132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b1649970d23af4f230f3f2dbfc4842c566c8b8e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\engine\\templates\\construct\\lang.tpl',
      1 => 1379073363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81625232c0bbc15e39-58342132',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5232c0bbc2b254_89738695',
  'variables' => 
  array (
    'langRuUrl' => 0,
    'lang' => 0,
    'langEnUrl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5232c0bbc2b254_89738695')) {function content_5232c0bbc2b254_89738695($_smarty_tpl) {?><div id='lang_bar'>
<a id='ru' class='link_lang' href='<?php echo $_smarty_tpl->tpl_vars['langRuUrl']->value;?>
' title='ru'><img <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>id='lang_active'<?php }?> src='../../img/flag_ru.png'></a>
<a id='en' class='link_lang' href='<?php echo $_smarty_tpl->tpl_vars['langEnUrl']->value;?>
' title='en'><img <?php if ($_smarty_tpl->tpl_vars['lang']->value=='en'){?>id='lang_active'<?php }?> src='../../img/flag_gb.png'></a>
</div><?php }} ?>