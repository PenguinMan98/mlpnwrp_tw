<?php /* Smarty version Smarty-3.1-DEV, created on 2013-05-28 04:10:33
         compiled from "D:\wamp\www\mlpnwrp_tw\public\templates\tiki-upload_file_progress.tpl" */ ?>
<?php /*%%SmartyHeaderCode:964951a42e392a8387-00309204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f464d5df1ac2dd20f449bfb3f03b4cc730912e86' => 
    array (
      0 => 'D:\\wamp\\www\\mlpnwrp_tw\\public\\templates\\tiki-upload_file_progress.tpl',
      1 => 1347858119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '964951a42e392a8387-00309204',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'filegals_manager' => 0,
    'fileId' => 0,
    'syntax' => 0,
    'view' => 0,
    'alink' => 0,
    'name' => 0,
    'size' => 0,
    'feedback_message' => 0,
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_51a42e393f9f23_70866593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a42e393f9f23_70866593')) {function content_51a42e393f9f23_70866593($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_sefurl')) include 'lib/smarty_tiki\\modifier.sefurl.php';
if (!is_callable('smarty_modifier_kbsize')) include 'lib/smarty_tiki\\modifier.kbsize.php';
if (!is_callable('smarty_function_button')) include 'lib/smarty_tiki\\function.button.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)&&!isset($_REQUEST['simpleMode'])){?>
	<?php $_smarty_tpl->tpl_vars['simpleMode'] = new Smarty_variable('y', null, 0);?>
<?php }else{ ?>
	<?php $_smarty_tpl->tpl_vars['simpleMode'] = new Smarty_variable('n', null, 0);?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)){?>
	<?php $_smarty_tpl->tpl_vars['seturl'] = new Smarty_variable(smarty_modifier_sefurl($_smarty_tpl->tpl_vars['fileId']->value,'display'), null, 0);?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('alink', 'alink', null); ob_start(); ?>href="#" onclick="window.opener.insertAt('<?php echo $_smarty_tpl->tpl_vars['filegals_manager']->value;?>
','<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['syntax']->value, ENT_QUOTES, 'UTF-8', true);?>
');checkClose();return false;" title="Click here to use the file" class="tips"<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }else{ ?>
	<?php $_smarty_tpl->tpl_vars['alink'] = new Smarty_variable('', null, 0);?>
<?php }?>
<table border="0" cellspacing="4" cellpadding="4">
	<tr>
		<?php if ($_smarty_tpl->tpl_vars['view']->value!='page'){?>
			<td style="text-align: center">
				<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)){?>
					<a <?php echo $_smarty_tpl->tpl_vars['alink']->value;?>
><img src="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['fileId']->value,'thumbnail');?>
" /><br /><span class="thumbcaption">Click here to use the file</span></a>
				<?php }else{ ?>
					<img src="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['fileId']->value,'thumbnail');?>
" />
				<?php }?>
			</td>
			<td>
				<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)){?>
					<a <?php echo $_smarty_tpl->tpl_vars['alink']->value;?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
 (<?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['size']->value);?>
)</a>
				<?php }else{ ?>
					<b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
 (<?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['size']->value);?>
)</b>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['feedback_message']->value!=''){?>
					<div class="upload_note">
						<?php echo $_smarty_tpl->tpl_vars['feedback_message']->value;?>

					</div>
				<?php }?>
		<?php }else{ ?>
			<td>
		<?php }?>
			<div>
				<?php echo smarty_function_button(array('href'=>"#",'_onclick'=>"javascript:flip('uploadinfos".((string)$_smarty_tpl->tpl_vars['fileId']->value)."');flip('close_uploadinfos".((string)$_smarty_tpl->tpl_vars['fileId']->value)."','inline');return false;",'_text'=>"Syntax Tips"),$_smarty_tpl);?>

				<span id="close_uploadinfos<?php echo $_smarty_tpl->tpl_vars['fileId']->value;?>
" style="display:none">
					<?php echo smarty_function_button(array('href'=>"#",'_onclick'=>"javascript:flip('uploadinfos".((string)$_smarty_tpl->tpl_vars['fileId']->value)."');flip('close_uploadinfos".((string)$_smarty_tpl->tpl_vars['fileId']->value)."','inline');return false;",'_text'=>"(Hide)"),$_smarty_tpl);?>

				</span>
			</div>
			<div style="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y'){?>display:none;<?php }?>" id="uploadinfos<?php echo $_smarty_tpl->tpl_vars['fileId']->value;?>
">
				<table>
					<tr>
						<td style="text-align:right">
							Link to file from a Wiki page:
						</td>
						<td class="inline_syntax">
							[<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['fileId']->value,'file');?>
|<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
]
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<span style="font-weight:bold; font-style: italic">For image files:</span>
						</td>
					</tr>
					<tr>
						<td style="text-align:right">
							Display full size:
						</td>
						<td class="inline_syntax">
							&#x7b;img fileId="<?php echo $_smarty_tpl->tpl_vars['fileId']->value;?>
"}
						</td>
					</tr>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_shadowbox']=='y'){?>
						<tr>
							<td style="text-align:right">
								Display thumbnail that enlarges:
							</td>
							<td class="inline_syntax">
								&#x7b;img fileId="<?php echo $_smarty_tpl->tpl_vars['fileId']->value;?>
" thumb="y" rel="box[g]"}
							</td>
						</tr>
					<?php }?>
				</table>
			</div>
		</td>
	</tr>
</table>
<?php }} ?>