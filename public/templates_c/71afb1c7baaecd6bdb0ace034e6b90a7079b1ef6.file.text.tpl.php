<?php /* Smarty version Smarty-3.1-DEV, created on 2013-06-21 15:04:25
         compiled from "D:\wamp\www\mlpnwrp_tw\public\templates\prefs\text.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2213251c46b79e3da31-26624104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71afb1c7baaecd6bdb0ace034e6b90a7079b1ef6' => 
    array (
      0 => 'D:\\wamp\\www\\mlpnwrp_tw\\public\\templates\\prefs\\text.tpl',
      1 => 1329892083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2213251c46b79e3da31-26624104',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_51c46b79eedf42_57404435',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c46b79eedf42_57404435')) {function content_51c46b79eedf42_57404435($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_simplewiki')) include 'lib/smarty_tiki\\modifier.simplewiki.php';
?><!-- TPL: D:\wamp\www\mlpnwrp_tw\public\templates\prefs\text.tpl --><div class="adminoptionbox preference clearfix <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['tagstring'], ENT_QUOTES, 'UTF-8', true);?>
<?php if (isset($_REQUEST['highlight'])&&$_REQUEST['highlight']==$_smarty_tpl->tpl_vars['p']->value['preference']){?> highlight<?php }?>">
	<label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
:</label>
	<?php if (is_array($_smarty_tpl->tpl_vars['p']->value['value'])){?>
		<input name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['preference'], ENT_QUOTES, 'UTF-8', true);?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars(implode($_smarty_tpl->tpl_vars['p']->value['value'],$_smarty_tpl->tpl_vars['p']->value['separator']), ENT_QUOTES, 'UTF-8', true);?>
" size="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['p']->value['size'])===null||$tmp==='' ? 40 : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" 
			type="text" <?php echo $_smarty_tpl->tpl_vars['p']->value['params'];?>
/>
	<?php }else{ ?>
		<input name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['preference'], ENT_QUOTES, 'UTF-8', true);?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
" size="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['p']->value['size'])===null||$tmp==='' ? 40 : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" 
			type="text" <?php echo $_smarty_tpl->tpl_vars['p']->value['params'];?>
/>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['p']->value['shorthint']){?>
		<em><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['shorthint']);?>
</em>
	<?php }?>

	<?php echo $_smarty_tpl->getSubTemplate ("prefs/shared-flags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<?php if ($_smarty_tpl->tpl_vars['p']->value['detail']){?>
		<br/><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['detail']);?>

	<?php }?>	

	<?php if ($_smarty_tpl->tpl_vars['p']->value['hint']){?>
		<br/><em><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['hint']);?>
</em>
	<?php }?>

	<?php echo $_smarty_tpl->getSubTemplate ("prefs/shared-dependencies.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</div>
<!-- /TPL: D:\wamp\www\mlpnwrp_tw\public\templates\prefs\text.tpl --><?php }} ?>