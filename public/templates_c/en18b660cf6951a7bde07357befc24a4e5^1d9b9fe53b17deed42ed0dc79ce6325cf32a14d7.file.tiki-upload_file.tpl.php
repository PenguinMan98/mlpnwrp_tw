<?php /* Smarty version Smarty-3.1-DEV, created on 2013-05-28 04:09:43
         compiled from "D:\wamp\www\mlpnwrp_tw\public\templates\tiki-upload_file.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1060851a42e07502ad9-63402792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d9b9fe53b17deed42ed0dc79ce6325cf32a14d7' => 
    array (
      0 => 'D:\\wamp\\www\\mlpnwrp_tw\\public\\templates\\tiki-upload_file.tpl',
      1 => 1352647796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1060851a42e07502ad9-63402792',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'filegals_manager' => 0,
    'editFileId' => 0,
    'fileInfo' => 0,
    'galleryId' => 0,
    'galleries' => 0,
    'tiki_p_list_file_galleries' => 0,
    'uploads' => 0,
    'simpleMode' => 0,
    'errors' => 0,
    'prefs' => 0,
    'files' => 0,
    'name' => 0,
    'fileChangedMessage' => 0,
    'user' => 0,
    'gal_info' => 0,
    'tiki_p_batch_upload_files' => 0,
    'treeRootId' => 0,
    'groupforalert' => 0,
    'tiki_p_admin_file_galleries' => 0,
    'showeachuser' => 0,
    'listusertoalert' => 0,
    'mimetypes' => 0,
    'type' => 0,
    'hit_limit' => 0,
    'insertion_syntax' => 0,
    'token_id' => 0,
    'upload_str' => 0,
    'tiki_p_admin' => 0,
    'max_upload_size_comment' => 0,
    'max_upload_size' => 0,
    'metarray' => 0,
    'PHPSESSID' => 0,
    'tiki_p_upload_files' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_51a42e07b4f708_19005359',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a42e07b4f708_19005359')) {function content_51a42e07b4f708_19005359($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_button')) include 'lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_function_cycle')) include 'D:\\wamp\\www\\mlpnwrp_tw\\public\\lib\\smarty\\libs\\plugins\\function.cycle.php';
if (!is_callable('smarty_modifier_sefurl')) include 'lib/smarty_tiki\\modifier.sefurl.php';
if (!is_callable('smarty_modifier_kbsize')) include 'lib/smarty_tiki\\modifier.kbsize.php';
if (!is_callable('smarty_block_remarksbox')) include 'lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_block_tr')) include 'lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_function_html_select_duration')) include 'lib/smarty_tiki\\function.html_select_duration.php';
if (!is_callable('smarty_function_user_selector')) include 'lib/smarty_tiki\\function.user_selector.php';
if (!is_callable('smarty_modifier_truncate')) include 'lib/smarty_tiki\\modifier.truncate.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_jq')) include 'lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_function_service')) include 'lib/smarty_tiki\\function.service.php';
?>

<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)&&!isset($_REQUEST['simpleMode'])){?>
	<?php $_smarty_tpl->tpl_vars['simpleMode'] = new Smarty_variable('y', null, 0);?>
<?php }else{ ?>
	<?php $_smarty_tpl->tpl_vars['simpleMode'] = new Smarty_variable('n', null, 0);?>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"File+Galleries",'admpage'=>"fgal")); $_block_repeat=true; echo smarty_block_title(array('help'=>"File+Galleries",'admpage'=>"fgal"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php if ($_smarty_tpl->tpl_vars['editFileId']->value){?>Edit File: <?php echo $_smarty_tpl->tpl_vars['fileInfo']->value['filename'];?>
<?php }else{ ?>Upload File<?php }?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"File+Galleries",'admpage'=>"fgal"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if (!empty($_smarty_tpl->tpl_vars['galleryId']->value)||(isset($_smarty_tpl->tpl_vars['galleries']->value)&&count($_smarty_tpl->tpl_vars['galleries']->value)>0&&$_smarty_tpl->tpl_vars['tiki_p_list_file_galleries']->value=='y')||(isset($_smarty_tpl->tpl_vars['uploads']->value)&&count($_smarty_tpl->tpl_vars['uploads']->value)>0)){?>
<div class="navbar">
	<?php if (!empty($_smarty_tpl->tpl_vars['galleryId']->value)){?>
		<?php echo smarty_function_button(array('galleryId'=>((string)$_smarty_tpl->tpl_vars['galleryId']->value),'href'=>"tiki-list_file_gallery.php",'_text'=>"Browse Gallery"),$_smarty_tpl);?>

	<?php }?>

	<?php if (isset($_smarty_tpl->tpl_vars['galleries']->value)&&count($_smarty_tpl->tpl_vars['galleries']->value)>0&&$_smarty_tpl->tpl_vars['tiki_p_list_file_galleries']->value=='y'){?>
		<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)){?>
			<?php $_smarty_tpl->tpl_vars['fgmanager'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['filegals_manager']->value, ENT_QUOTES, 'UTF-8', true), null, 0);?>
			<?php echo smarty_function_button(array('href'=>"tiki-list_file_gallery.php?filegals_manager=".((string)$_smarty_tpl->tpl_vars['fgmanager']->value),'_text'=>"List Galleries"),$_smarty_tpl);?>

		<?php }else{ ?>
			<?php echo smarty_function_button(array('href'=>"tiki-list_file_gallery.php",'_text'=>"List Galleries"),$_smarty_tpl);?>

		<?php }?>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['uploads']->value)&&count($_smarty_tpl->tpl_vars['uploads']->value)>0){?>
		<?php echo smarty_function_button(array('href'=>"#upload",'_text'=>"Upload File"),$_smarty_tpl);?>

	<?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)){?>
		<?php if ($_smarty_tpl->tpl_vars['simpleMode']->value=='y'){?><?php echo smarty_function_button(array('simpleMode'=>'n','galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value,'href'=>'','_text'=>"Advanced mode",'_ajax'=>"n"),$_smarty_tpl);?>
<?php }else{ ?><?php echo smarty_function_button(array('galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value,'href'=>'','_text'=>"Simple mode",'_ajax'=>"n"),$_smarty_tpl);?>
<?php }?>
		<span<?php if ($_smarty_tpl->tpl_vars['simpleMode']->value=='y'){?> style="display:none;"<?php }?>>
			<label for="keepOpenCbx">Keep gallery window open</label>
			<input type="checkbox" id="keepOpenCbx" checked="checked">
		</span>
	<?php }?>
</div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['errors']->value)&&count($_smarty_tpl->tpl_vars['errors']->value)>0){?>
	<div class="simplebox highlight">
	<h2>Errors detected</h2>
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['errors']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
		<?php echo $_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']];?>
<br />
	<?php endfor; endif; ?>
	<?php echo smarty_function_button(array('href'=>"#upload",'_text'=>"Retry"),$_smarty_tpl);?>

	</div>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y'){?>
	<div id='progress'>
		<div id='progress_0'></div>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_upload_progressbar']=='ajax_flash'){?>
		<div id="upload_progress">
			<div id="upload_progress_ajax_0" name="upload_progress_0" height="1" width="1"></div>
		</div>
	<?php }?>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['uploads']->value)&&count($_smarty_tpl->tpl_vars['uploads']->value)>0){?>
	<h2>
	<?php if (count($_smarty_tpl->tpl_vars['uploads']->value)==1){?>
		The following file was successfully uploaded:
	<?php }else{ ?>
		The following files have been successfully uploaded:
	<?php }?>
	</h2>

	<table border="0" cellspacing="4" cellpadding="4">
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['uploads']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
		<tr class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
">
			<td style="text-align: center">
				<img src="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['fileId'],'thumbnail');?>
" />
			</td>
			<td>
				<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)){?>
					<a href="#" onclick="window.opener.insertAt('<?php echo $_smarty_tpl->tpl_vars['filegals_manager']->value;?>
','<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['wiki_syntax'], ENT_QUOTES, 'UTF-8', true);?>
');checkClose();return false;" title="Click here to use the file"><?php echo $_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>
 (<?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['size']);?>
)</a>
				<?php }else{ ?>
					<b><?php echo $_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>
 (<?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['size']);?>
)</b>
				<?php }?>
				<?php echo smarty_function_button(array('href'=>"#",'_flip_id'=>("uploadinfos").($_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['fileId']),'_text'=>"Additional Info"),$_smarty_tpl);?>

				<div style="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y'){?>display:none;<?php }?>" id="uploadinfos<?php echo $_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['fileId'];?>
">
					You can download this file using: <div class="code"><a class="link" href="<?php echo $_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['dllink'];?>
"><?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['fileId'],'file');?>
</a></div>
					You can link to the file from a Wiki page using: <div class="code">[<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['fileId'],'file');?>
|<?php echo $_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>
 (<?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['size']);?>
)]</div>
					You can display an image in a Wiki page using: <div class="code">&#x7b;img src="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['fileId'],'preview');?>
" link="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['fileId'],'file');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>
 (<?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['size']);?>
)"}</div>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_shadowbox']=='y'){?>
						Or using as a thumbnail with ShadowBox: <div class="code">&#x7b;img src="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['fileId'],'thumbnail');?>
" link="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['fileId'],'preview');?>
" rel="shadowbox[gallery];type=img" alt="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 (<?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['size']);?>
)"}</div>
					<?php }?>
					You can link to the file from an HTML page using: <div class="code">&lt;a href="<?php echo $_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['dllink'];?>
"&gt;<?php echo $_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>
 (<?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['uploads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['size']);?>
)&lt;/a&gt;</div>
				</div>
			</td>
		</tr>
	<?php endfor; endif; ?>
	</table>
	<br />

	<h2>Upload File</h2>
<?php }elseif(isset($_smarty_tpl->tpl_vars['fileChangedMessage']->value)){?>
	<div align="center">
		<div class="wikitext">
			<?php echo $_smarty_tpl->tpl_vars['fileChangedMessage']->value;?>

		</div>
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['editFileId']->value&&isset($_smarty_tpl->tpl_vars['fileInfo']->value['lockedby'])&&$_smarty_tpl->tpl_vars['fileInfo']->value['lockedby']!=''){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Info",'icon'=>"lock")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Info",'icon'=>"lock"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php if ($_smarty_tpl->tpl_vars['user']->value==$_smarty_tpl->tpl_vars['fileInfo']->value['lockedby']){?>
		You locked the file
	<?php }else{ ?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The file is locked by <?php echo $_smarty_tpl->tpl_vars['fileInfo']->value['lockedby'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Info",'icon'=>"lock"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<div>

<?php $_smarty_tpl->_capture_stack[0][] = array('upload_file', 'upload_str', null); ob_start(); ?>
	<hr class="clear"/>
	
	<div class="fgal_file">
		<div class="fgal_file_c1">
			<table width="100%">
				
				<?php if ($_smarty_tpl->tpl_vars['simpleMode']->value!='y'){?>
					<tr>
						<td><label for="name">File title:</label></td>
						<td width="80%">
							<input style="width:100%" type="text" id="name" name="name[]"
								<?php if (isset($_smarty_tpl->tpl_vars['fileInfo']->value)&&$_smarty_tpl->tpl_vars['fileInfo']->value['name']){?>
								   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fileInfo']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"
								<?php }?>
								size="40"
							/>
							<?php if (isset($_smarty_tpl->tpl_vars['gal_info']->value['type'])&&($_smarty_tpl->tpl_vars['gal_info']->value['type']=="podcast"||$_smarty_tpl->tpl_vars['gal_info']->value['type']=="vidcast")){?>
								(required field for podcasts)
							<?php }?>
						</td>
					</tr>
					<tr>
						<td><label for="description">File description:</label></td>
						<td>
							<textarea style="width:100%" rows="2" cols="40" id="description" name="description[]"><?php if (isset($_smarty_tpl->tpl_vars['fileInfo']->value['description'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fileInfo']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea>
							<?php if (isset($_smarty_tpl->tpl_vars['gal_info']->value['type'])&&($_smarty_tpl->tpl_vars['gal_info']->value['type']=="podcast"||$_smarty_tpl->tpl_vars['gal_info']->value['type']=="vidcast")){?>
								<br /><em>Required for podcasts.</em>
							<?php }?>
						</td>
					</tr>
				<?php }?>
				<tr>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!='y'||!$_smarty_tpl->tpl_vars['editFileId']->value){?>
						<td><label for="userfile">Upload from disk:</label></td>
						<td>
							<?php if ($_smarty_tpl->tpl_vars['editFileId']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fileInfo']->value['filename'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_upload_progressbar']=='ajax_flash'){?>
								<table><tr><td><div id="divSWFUploadUI">
									<div class="fieldset flash" id="fsUploadProgress"></div>
									<div class="flashButton">
										<span class="button flashButtonText" id="btnBrowse" style="display:none"><a>Browse</a></span>
										<span id="spanButtonPlaceholder" />
										
										<span class="button" style="visibility:hidden" /><a>&nbsp;</a></span>
									</div>
								</div>
								<noscript>
									<div style="background-color: #FFFF66; border-top: solid 4px #FF9966; border-bottom: solid 4px #FF9966; padding: 10px 15px;">
										We're sorry.<br />
										Upload interface could not load.  You must have JavaScript enabled to enjoy Upload interface.
									</div>
								</noscript>
								<div id="divLoadingContent" style="display: none;">
									<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

										Upload interface is loading. Please wait a moment...
									<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								</div>
								<div id="divLongLoading" style="display: none;">
									<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

										Upload interface is taking a long time to load or the load has failed.<br />
										Please make sure that the Flash Plugin is enabled and that a working version of the Adobe Flash Player is installed.
									<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								</div>
								<div id="divAlternateContent" style="display: none;">
									<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"errors")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"errors"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

										We are sorry: Upload interface could not load.  You may need to install or upgrade Flash Player.<br />
										<a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">Visit the Adobe Website to get the Flash Player.</a>
									<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"errors"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								</div>
								
								</td></tr></table>
								<br />
							<?php }else{ ?>
								<input id="userfile" name="userfile[]" type="file" size="40"/>
							<?php }?>
						</td>
					<?php }?>
				</tr>
			</table>
		</div>

		<?php if ($_smarty_tpl->tpl_vars['simpleMode']->value!='y'){?>
			<div class="fgal_file_c2">
				<table width="100%">
					<?php if (!$_smarty_tpl->tpl_vars['editFileId']->value&&$_smarty_tpl->tpl_vars['tiki_p_batch_upload_files']->value=='y'){?>
						<tr><td>
							<label for="isbatch">Unzip zip files:</label>
						</td><td width="80%">
							<input type="checkbox" id="isbatch" name="isbatch[]" />
						</td></tr>
					<?php }?>
	
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_delete_after']=='y'){?>
						<tr><td>
							<label for="deleteAfter">File can be deleted after:</label>
						</td><td width="80%">
							<?php if ($_smarty_tpl->tpl_vars['editFileId']->value){?>
								<?php echo smarty_function_html_select_duration(array('prefix'=>'deleteAfter','default_value'=>$_smarty_tpl->tpl_vars['fileInfo']->value['deleteAfter']),$_smarty_tpl);?>

							<?php }else{ ?>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_jscalendar']=='y'){?>
									<input type="text" value="" name="deleteAfter[]" class="datePicker"/>
								<?php }else{ ?>
									<?php echo smarty_function_html_select_duration(array('prefix'=>'deleteAfter[]','default_unit'=>'week'),$_smarty_tpl);?>

								<?php }?>
							<?php }?>
						</td></tr>
					<?php }?>
				
					<?php if ($_smarty_tpl->tpl_vars['editFileId']->value){?>
						<input type="hidden" name="galleryId" value="<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
"/>
						<input type="hidden" name="fileId" value="<?php echo $_smarty_tpl->tpl_vars['editFileId']->value;?>
"/>
						<input type="hidden" name="lockedby" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fileInfo']->value['lockedby'], ENT_QUOTES, 'UTF-8', true);?>
" \>
					<?php }else{ ?>
						<?php if (count($_smarty_tpl->tpl_vars['galleries']->value)==0){?>
							<input type="hidden" name="galleryId" value="<?php echo $_smarty_tpl->tpl_vars['treeRootId']->value;?>
"/>
						<?php }elseif(empty($_smarty_tpl->tpl_vars['groupforalert']->value)){?>
							<tr><td>
								<label for="galleryId">File gallery:</label>
							</td><td width="80%">
								<select id="galleryId" name="galleryId[]">
									<option value="<?php echo $_smarty_tpl->tpl_vars['treeRootId']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['treeRootId']->value==$_smarty_tpl->tpl_vars['galleryId']->value){?>selected="selected"<?php }?> style="font-style:italic; border-bottom:1px dashed #666;">Root</option>
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['idx'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['name'] = 'idx';
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['galleries']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total']);
?>
										<?php if ($_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]['id']!=$_smarty_tpl->tpl_vars['treeRootId']->value&&$_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]['perms']['tiki_p_upload_files']=='y'){?>
											<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]['id'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]['id']==$_smarty_tpl->tpl_vars['galleryId']->value){?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
										<?php }?>
									<?php endfor; endif; ?>
								</select>
							</td></tr>
						<?php }else{ ?>
							<input type="hidden" name="galleryId" value="<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
"/>
						<?php }?>
					<?php }?>
	
					<tr><td>
						<label for="user">Uploaded by:</label>
					</td><td width="80%">
						<?php echo smarty_function_user_selector(array('id'=>'user','name'=>'user[]','select'=>$_smarty_tpl->tpl_vars['fileInfo']->value['user'],'editable'=>$_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value),$_smarty_tpl);?>

					</td></tr>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries_author']=='y'){?>
						<tr><td>
							<label for="author">Creator</label>
						</td><td width="80%">
							<input type="text" id="author"name="author[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fileInfo']->value['author'], ENT_QUOTES, 'UTF-8', true);?>
" /><br>
							<span class="description">Creator of file, if different from the 'Uploaded by' user</span>
						</td></tr>
					<?php }?>
					<?php if (!empty($_smarty_tpl->tpl_vars['groupforalert']->value)){?>
						<?php if ($_smarty_tpl->tpl_vars['showeachuser']->value=='y'){?>
							<tr><td>
								Choose users to alert
							</td><td width="80%">
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['idx'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['name'] = 'idx';
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['listusertoalert']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total']);
?>
							<?php if ($_smarty_tpl->tpl_vars['showeachuser']->value=='n'){?>
								<input type="hidden"  name="listtoalert[]" value="<?php echo $_smarty_tpl->tpl_vars['listusertoalert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]['user'];?>
">
							<?php }else{ ?>
								<input type="checkbox" name="listtoalert[]" value="<?php echo $_smarty_tpl->tpl_vars['listusertoalert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]['user'];?>
"> <?php echo $_smarty_tpl->tpl_vars['listusertoalert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]['user'];?>

							<?php }?>
						<?php endfor; endif; ?>
						<?php if ($_smarty_tpl->tpl_vars['showeachuser']->value=='y'){?>
							</td></tr>
						<?php }?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['editFileId']->value){?>
						<tr><td>
							<label for "filetype">File Type:</label>
						</td><td width="80%">
							<select id="filetype" name="filetype[]">
								<?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mimetypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
$_smarty_tpl->tpl_vars['type']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['fileInfo']->value['filetype']==$_smarty_tpl->tpl_vars['type']->value){?> selected="selected"<?php }?>><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['type']->value,60);?>
 (*.<?php echo $_smarty_tpl->tpl_vars['type']->key;?>
)</option>
								<?php } ?>
							</select>
						</td></tr>
					<?php }?>
				</table>
			</div>
			<div class="fgal_file_c3">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_limit_hits_per_file']=='y'){?>
					<label>
						<label for="hit_limit">Maximum number of downloads:</label>
						<input type="text" id="hit_limit" name="hit_limit[]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['hit_limit']->value)===null||$tmp==='' ? 0 : $tmp);?>
"/>
						<br /><em>Use -1 for no limit.</em>
					</label>
					<br/>
				<?php }else{ ?>
					<input type="hidden" id="hit_limit" name="hit_limit[]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['hit_limit']->value)===null||$tmp==='' ? -1 : $tmp);?>
"/>
				<?php }?>
	
				
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!='y'&&$_smarty_tpl->tpl_vars['editFileId']->value){?>
					<label>
						<label for="comment">Comment:</label>
						<input type="text" id="comment" name="comment[]" value="" size="40" />
					</label>
					<br/>
				<?php }?>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y'&&!$_smarty_tpl->tpl_vars['editFileId']->value){?>
				<?php echo $_smarty_tpl->getSubTemplate ('categorize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('notable'=>'y'), 0);?>
<br/>
			<?php }?>
		<?php }else{ ?>
			<input type="hidden" name="galleryId" value="<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
"/>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y'&&!$_smarty_tpl->tpl_vars['editFileId']->value){?>
			<input type="hidden" name="upload" />
		<?php }?>
	</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<div id="form">
<form method="post"
	action='tiki-upload_file.php' 
	enctype='multipart/form-data'
	id="file_0"
	<?php if (!$_smarty_tpl->tpl_vars['editFileId']->value&&$_smarty_tpl->tpl_vars['prefs']->value['fgal_upload_progressbar']=='ajax_flash'){?>
		onsubmit="return verifUploadFlash()"
	<?php }?>
	>
	<input type="hidden" name="simpleMode" value="<?php echo $_smarty_tpl->tpl_vars['simpleMode']->value;?>
"/>
	<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)){?>
		<input type="hidden" name="filegals_manager" value="<?php echo $_smarty_tpl->tpl_vars['filegals_manager']->value;?>
"/>
	<?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['insertion_syntax']->value)){?>
		<input type="hidden" name="insertion_syntax" value="<?php echo $_smarty_tpl->tpl_vars['insertion_syntax']->value;?>
"/>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['token_id']->value)&&$_smarty_tpl->tpl_vars['token_id']->value!=''){?>
		<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['token_id']->value;?>
" name="TOKEN" />
	<?php }?>

	<?php echo $_smarty_tpl->tpl_vars['upload_str']->value;?>


	<?php if ($_smarty_tpl->tpl_vars['editFileId']->value){?>
		<?php echo $_smarty_tpl->getSubTemplate ('categorize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('notable'=>'y'), 0);?>
<br/>
		<hr class="clear" />
		<div id="page_bar">
			<input name="upload" type="submit" value="Save"/>
		</div>
	<?php }elseif($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!='y'){?>
		<?php echo $_smarty_tpl->tpl_vars['upload_str']->value;?>

		<?php echo $_smarty_tpl->tpl_vars['upload_str']->value;?>

		<?php echo $_smarty_tpl->getSubTemplate ('categorize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('notable'=>'y'), 0);?>
<br/>
		<hr class="clear" />
		<div id="page_bar">
			<input type="submit" name="upload" value="Upload"/>
		</div>
	<?php }?>
</form>

<?php if (!$_smarty_tpl->tpl_vars['editFileId']->value){?>
	<div id="page_bar">
		<input type="submit"
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_upload_progressbar']=='n'){?>
				onClick="upload_files(); return false"
			<?php }elseif($_smarty_tpl->tpl_vars['prefs']->value['fgal_upload_progressbar']=='ajax_flash'){?>
				onclick="return verifUploadFlash()"
				disabled="disabled"
			<?php }?>
			id="btnUpload"
			name="upload"
			value="Upload File(s)"
		/>
		<hr class="clear" />
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_upload_progressbar']=='ajax_flash'){?>
			<input type="submit" id="btnCancel" style="display:none" value="Cancel Upload" onclick="return false" />
		<?php }elseif($_smarty_tpl->tpl_vars['simpleMode']->value!='y'){?>
			<input type="submit" onclick="javascript:add_upload_file('multiple_upload'); return false" value="Add Another File"/>
		<?php }?>
	</div>
<?php }?>
</div>
<?php if (!empty($_smarty_tpl->tpl_vars['fileInfo']->value['lockedby'])&&$_smarty_tpl->tpl_vars['user']->value!=$_smarty_tpl->tpl_vars['fileInfo']->value['lockedby']){?>
	<?php echo smarty_function_icon(array('_id'=>"lock",'class'=>'','alt'=>''),$_smarty_tpl);?>

	<span class="attention"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The file is locked by <?php echo $_smarty_tpl->tpl_vars['fileInfo']->value['lockedby'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
<?php }?>
<br />
<?php if (!$_smarty_tpl->tpl_vars['editFileId']->value){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		Maximum file size is around:
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'){?><a title="<?php echo $_smarty_tpl->tpl_vars['max_upload_size_comment']->value;?>
"><?php }?>
			<?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['max_upload_size']->value,true,0);?>

		<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'){?></a><?php }?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['metarray']->value)&&count($_smarty_tpl->tpl_vars['metarray']->value)>0){?>
	<?php echo $_smarty_tpl->getSubTemplate ('metadata/meta_view_tabs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['editFileId']->value){?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_ui']=='y'){?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$('.datePicker').datepicker({minDate: 0, maxDate: '+1m', dateFormat: 'dd/mm/yy'});<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_upload_progressbar']=='ajax_flash'){?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array('notonready'=>true)); $_block_repeat=true; echo smarty_block_jq(array('notonready'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	
			var swfu;

			function initSWFU() {

				if ( typeof(swfu) == 'object' )
					return true;

				swfu = new SWFUpload({
					flash_url : "lib/swfupload/src/swfupload.swf",
					upload_url: "tiki-upload_file.php?upload",
					post_params: {
						"PHPSESSID" : "<?php echo $_smarty_tpl->tpl_vars['PHPSESSID']->value;?>
"
					},
					file_post_name: "userfile[]",
					file_size_limit : "<?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['max_upload_size']->value,true,0,' ');?>
",
					file_types : "*.*",
					file_types_description : "All Files",
					file_upload_limit : 1,
					file_queue_limit : 1,
					custom_settings : {
						progressTarget : "fsUploadProgress",
						cancelButtonId : "btnCancel"
					},
					debug: false,
			
					// Button Settings
					button_placeholder_id : "spanButtonPlaceholder",
					button_width: 200,
					button_height: 22,
					button_window_mode: SWFUpload.WINDOW_MODE.TRANSPARENT,
					button_cursor: SWFUpload.CURSOR.HAND,
					button_action: SWFUpload.BUTTON_ACTION.SELECT_FILE,
		
					// The event handler functions are defined in handlers.js
					swfupload_loaded_handler : swfUploadLoadedFlash,
					file_queued_handler : fileQueuedFlash,
					file_queue_error_handler : fileQueueError,
					file_dialog_start_handler : fileDialogStartFlash,
					file_dialog_complete_handler : fileDialogComplete,
					upload_start_handler : uploadStart,
					upload_progress_handler : uploadProgress,
					upload_error_handler : uploadErrorFlash,
					upload_success_handler : uploadSuccessFlash,
					upload_complete_handler : uploadComplete,
					queue_complete_handler : queueComplete,	// Queue plugin event
					
					// SWFObject settings
					swfupload_pre_load_handler : swfUploadPreLoad,
					swfupload_load_failed_handler : swfUploadLoadFailed
				});
			}
	
			function swfUploadLoadedFlash() {
				initSWFU();

				clearTimeout(this.customSettings.loadingTimeout);
				$('#divLoadingContent').hide();
				$('#divLongLoading').hide();
				$('#divAlternateContent').hide();
				$('#btnCancel').bind('click', function() {
					swfu.cancelQueue();
				});
				$('#btnBrowse').show();
			}
	
			function fileDialogStartFlash() {
				initSWFU();
				$('#btnUpload').attr('disabled', 'disabled');
				swfu.cancelQueue();
			}
	
			function fileQueuedFlash(file) {
				fileQueued.call(this, file);
				$('#btnUpload').removeAttr('disabled');
			}
	
			function uploadErrorFlash(file, errorCode, message) {
				uploadError.call(this, file, errorCode, message);
				if ( errorCode && errorCode == SWFUpload.UPLOAD_ERROR.FILE_CANCELLED ) {
					$('#btnCancel').hide();
					$('#btnUpload').attr('disabled', 'disabled').show();
				}
			}
	
			function uploadSuccessFlash(file, serverData) {
				$('#upload_progress_ajax_0').html(serverData);
				uploadSuccess.call(this, file, serverData);
				$('#form').hide();
			}
	
			function verifUploadFlash(){
				initSWFU();

				// get all post values
				var $postValue = $($('#file_0').serializeArray());
				var post = {"PHPSESSID" : "<?php echo $_smarty_tpl->tpl_vars['PHPSESSID']->value;?>
"};			
	
				$postValue.each(function (iElement, oElement){
					post[oElement.name] = oElement.value;
				});
				swfu.setPostParams(post);
				
				// Start upload
				swfu.startUpload();
	
				$('#btnUpload').hide();
				$('#btnCancel').show();
			}

			initSWFU();
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array('notonready'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }else{ ?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array('notonready'=>true)); $_block_repeat=true; echo smarty_block_jq(array('notonready'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			$('#file_0').ajaxForm({target: '#progress_0', forceSync: true});	
			var nb_upload = 1;
	
			function add_upload_file() {
				var clone = $('#form form').eq(0).clone().resetForm().attr('id', 'file_' + nb_upload).ajaxForm({target: '#progress_' + nb_upload, forceSync: true});
				clone.insertAfter($('#form form').eq(-1));
				document.getElementById('progress').innerHTML += "<div id='progress_"+nb_upload+"'></div>";
				nb_upload += 1;
			}

			function upload_files(){
				$("#form form").each(function(n) {
					if ($(this).find('input[name="userfile\\[\\]"]').val() != '') {
						$('#progress_'+n).html("<img src='img/spinner.gif'>Uploading file...");
						$(this).submit();
						this.reset();
					} else {
						$('#progress_'+n).html("No File to Upload... <span class='button'><a href='#' onclick='location.replace(location.href);return false;'>Retry</a></span>");
					}
				});
				hide('form');
			}
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array('notonready'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_upload_from_source']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_upload_files']->value=='y'){?>
		<form class="remote-upload" method="post" action="<?php echo smarty_function_service(array('controller'=>'file','action'=>'remote'),$_smarty_tpl);?>
">
			<h3>Upload from URL</h3>
			<p>
				<input type="hidden" name="galleryId" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['galleryId']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
				<label>URL: <input type="url" name="url" placeholder="http://"/></label>
				<input type="submit" value="Add"/>
			</p>
			<div class="result"></div>
		</form>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			$('.remote-upload').submit(function () {
				var form = this;
				$.ajax({
					method: 'POST',
					url: $(form).attr('action'),
					data: $(form).serialize(),
					dataType: 'html',
					success: function (data) {
						$('.result', form).html(data);
						$(form.url).val('');
					},
					complete: function () {
						$('input', form).attr('disabled', 0);
					}
				});

				$('input', this).attr('disabled', 1);
				return false;
			});
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

<?php }?>

<?php }} ?>