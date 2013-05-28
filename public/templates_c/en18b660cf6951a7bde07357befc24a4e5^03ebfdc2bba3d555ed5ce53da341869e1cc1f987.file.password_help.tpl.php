<?php /* Smarty version Smarty-3.1-DEV, created on 2013-05-27 22:49:45
         compiled from "D:\wamp\www\mlpnwrp_tw\public\templates\password_help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:769351a3e3094507e4-43045560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03ebfdc2bba3d555ed5ce53da341869e1cc1f987' => 
    array (
      0 => 'D:\\wamp\\www\\mlpnwrp_tw\\public\\templates\\password_help.tpl',
      1 => 1318511782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '769351a3e3094507e4-43045560',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_51a3e309517551_55231513',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a3e309517551_55231513')) {function content_51a3e309517551_55231513($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tr')) include 'lib/smarty_tiki\\block.tr.php';
?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['min_pass_length']>1){?><div class="highlight"><em><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['min_pass_length'])); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['min_pass_length']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Minimum %0 characters long<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['min_pass_length']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</em></div><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['pass_chr_num']=='y'){?><div class="highlight"><em>Password must contain both letters and numbers</em></div><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['pass_chr_case']=='y'){?><div class="highlight"><em>Password must contain at least one alphabetical character in lower case like a and one in upper case like A.</em></div><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['pass_chr_special']=='y'){?><div class="highlight"><em>Password must contain at least one special character in lower case like " / $ % ? & * ( ) _ + ...</em></div><?php }?>
					<?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['pass_chr_repetition'])&&$_smarty_tpl->tpl_vars['prefs']->value['pass_chr_repetition']=='y'){?><div class="highlight"><em>Password must contain no consecutive repetition of the same character as 111 or aab</em></div><?php }?>
<?php }} ?>