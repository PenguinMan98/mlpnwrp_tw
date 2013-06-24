<?php /* Smarty version Smarty-3.1-DEV, created on 2013-06-21 15:03:28
         compiled from "D:\wamp\www\mlpnwrp_tw\public\templates\credits.tpl" */ ?>
<?php /*%%SmartyHeaderCode:918351c46b40c2f899-22181501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09b254b1d3d10f77834c9671d95ee61eb707ac1d' => 
    array (
      0 => 'D:\\wamp\\www\\mlpnwrp_tw\\public\\templates\\credits.tpl',
      1 => 1302758003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '918351c46b40c2f899-22181501',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_51c46b40c535c1_32539085',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c46b40c535c1_32539085')) {function content_51c46b40c535c1_32539085($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\wamp\\www\\mlpnwrp_tw\\public\\lib\\smarty\\libs\\plugins\\modifier.replace.php';
?><!-- TPL: D:\wamp\www\mlpnwrp_tw\public\templates\credits.tpl -->Theme: <?php echo ucwords(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['prefs']->value['style'],'.css',''),'None',''));?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['style_option']){?> - <?php echo ucwords(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['prefs']->value['style_option'],'.css',''),'None',''));?>
<?php }?>
<!-- /TPL: D:\wamp\www\mlpnwrp_tw\public\templates\credits.tpl --><?php }} ?>