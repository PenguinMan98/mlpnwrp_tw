<?php /* Smarty version Smarty-3.1-DEV, created on 2013-06-21 15:03:26
         compiled from "D:\wamp\www\mlpnwrp_tw\public\templates\modules\mod-logo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:831751c46b3ed23066-91467435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef105e786ddb639b515b3b45ce1a5a48f54eaead' => 
    array (
      0 => 'D:\\wamp\\www\\mlpnwrp_tw\\public\\templates\\modules\\mod-logo.tpl',
      1 => 1333374556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '831751c46b3ed23066-91467435',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_params' => 0,
    'tpl_module_title' => 0,
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_51c46b3ed92274_30246547',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c46b3ed92274_30246547')) {function content_51c46b3ed92274_30246547($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tikimodule')) include 'lib/smarty_tiki\\block.tikimodule.php';
?><!-- TPL: D:\wamp\www\mlpnwrp_tw\public\templates\modules\mod-logo.tpl -->

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tikimodule', array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"logo",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'])); $_block_repeat=true; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"logo",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

   <div id="sitelogo"<?php if ($_smarty_tpl->tpl_vars['prefs']->value['sitelogo_bgcolor']!=''){?> style="background-color: <?php echo $_smarty_tpl->tpl_vars['prefs']->value['sitelogo_bgcolor'];?>
;" <?php }?> class="floatleft">
      <?php if ($_smarty_tpl->tpl_vars['prefs']->value['sitelogo_src']){?><a href="./" title="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['sitelogo_title'];?>
"<?php if ($_smarty_tpl->tpl_vars['prefs']->value['mobile_mode']=="y"){?> rel="external"<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['sitelogo_src'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['sitelogo_alt'];?>
" style="border: none" /></a>
      <?php }?>
   </div>
   <div id="sitetitles" class="floatleft">
      <div id="sitetitle">
		  <?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['sitetitle'])){?><a href="./"<?php if ($_smarty_tpl->tpl_vars['prefs']->value['mobile_mode']=="y"){?> rel="external"<?php }?>><?php echo $_smarty_tpl->tpl_vars['prefs']->value['sitetitle'];?>
</a><?php }?>
	  </div>
      <div id="sitesubtitle"><?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['sitesubtitle'])){?><?php echo $_smarty_tpl->tpl_vars['prefs']->value['sitesubtitle'];?>
<?php }?></div>
   </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"logo",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<!-- /TPL: D:\wamp\www\mlpnwrp_tw\public\templates\modules\mod-logo.tpl --><?php }} ?>