<?php /* Smarty version Smarty-3.1.13, created on 2013-08-29 06:35:25
         compiled from "../../kyrs/templates/construct/body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118840411521f23ed3e5ca7-33221316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7ca342f54534629c15966af54a3820afa3ae06e' => 
    array (
      0 => '../../kyrs/templates/construct/body.tpl',
      1 => 1376569734,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118840411521f23ed3e5ca7-33221316',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'date' => 0,
    'caption' => 0,
    'error_message' => 0,
    'massiv' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_521f23ed4c9965_84476912',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521f23ed4c9965_84476912')) {function content_521f23ed4c9965_84476912($_smarty_tpl) {?>﻿<div id='header'>
			<div class='wg4'>&nbsp;</div>
			<div class='wg12'>
				<div id="logo"></div>
				<div style="float:left;">
				<div id="logo_caption"><h1>Курсы валют на <span id="date"><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</span></h1><div id="logo_line"></div></div>
				</div>
				
			</div>
			<div class='wg4'>&nbsp;</div>
		</div>
		<div id='content'>
			<div class='wg4'>&nbsp;</div>
			<div class='wg12'>
				<div id="caption"><?php echo $_smarty_tpl->tpl_vars['caption']->value;?>
</div>
				<div id="body_res">
					<table id="result" cellspacing=0 align="center">
						<thead><tr id="thead"><td id="tcode">Код</td><td id="tcount">Количество</td><td id="tval">Валюта</td><td id="tres">Курс</td></tr></thead>
						<tbody>
							<?php if (!$_smarty_tpl->tpl_vars['error_message']->value){?>
							<?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable(1, null, 0);?>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ind'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ind']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['name'] = 'ind';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['massiv']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ind']['total']);
?>
							
								<tr	<?php if ($_smarty_tpl->tpl_vars['i']->value==1){?> class="ftr" <?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable(0, null, 0);?><?php }else{ ?> class="str"	<?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable(1, null, 0);?><?php }?>><td> <?php echo $_smarty_tpl->tpl_vars['massiv']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ind']['index']][0];?>
</td>
								<td> <?php echo $_smarty_tpl->tpl_vars['massiv']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ind']['index']][1];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['massiv']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ind']['index']][2];?>
</td>
								<td> <?php echo $_smarty_tpl->tpl_vars['massiv']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ind']['index']][3];?>
</td></tr>
							<?php endfor; endif; ?>
							<?php }else{ ?>
								<tr><td colspan="4"><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
</td></tr>
							<?php }?>
						</tbody>
					</table>
				</div>
			</div>
			<div class='wg4'>&nbsp;</div>
		</div><?php }} ?>