<?php /* Smarty version Smarty-3.1-DEV, created on 2013-05-28 00:30:53
         compiled from "D:\wamp\www\mlpnwrp_tw\public\templates\edit_file_gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:680151a3fabdddd018-64200434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48c5d7617c0135d8955d64f1232d73d7da2e02a8' => 
    array (
      0 => 'D:\\wamp\\www\\mlpnwrp_tw\\public\\templates\\edit_file_gallery.tpl',
      1 => 1347896754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '680151a3fabdddd018-64200434',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tiki_p_create_file_galleries' => 0,
    'individual' => 0,
    'name' => 0,
    'galleryId' => 0,
    'filegals_manager' => 0,
    'treeRootId' => 0,
    'gal_info' => 0,
    'prefs' => 0,
    'templateId' => 0,
    'all_templates' => 0,
    'item' => 0,
    'parentId' => 0,
    'all_galleries' => 0,
    'tiki_p_admin' => 0,
    'tiki_p_admin_file_galleries' => 0,
    'creator' => 0,
    'groupforAlertList' => 0,
    'k' => 0,
    'i' => 0,
    'showeachuser' => 0,
    'options_sortorder' => 0,
    'sortorder' => 0,
    'key' => 0,
    'sortdirection' => 0,
    'max_desc' => 0,
    'maxRows' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_51a3fabe2ad0d1_74542169',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a3fabe2ad0d1_74542169')) {function content_51a3fabe2ad0d1_74542169($_smarty_tpl) {?><?php if (!is_callable('smarty_function_query')) include 'lib/smarty_tiki\\function.query.php';
if (!is_callable('smarty_block_tabset')) include 'lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_block_tr')) include 'lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_block_jq')) include 'lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_function_user_selector')) include 'lib/smarty_tiki\\function.user_selector.php';
if (!is_callable('smarty_modifier_kbsize')) include 'lib/smarty_tiki\\modifier.kbsize.php';
if (!is_callable('smarty_function_math')) include 'D:\\wamp\\www\\mlpnwrp_tw\\public\\lib\\smarty\\libs\\plugins\\function.math.php';
if (!is_callable('smarty_function_quotabar')) include 'lib/smarty_tiki\\function.quotabar.php';
?>
<?php if ($_smarty_tpl->tpl_vars['tiki_p_create_file_galleries']->value=='y'){?>
	<?php if (isset($_smarty_tpl->tpl_vars['individual']->value)&&$_smarty_tpl->tpl_vars['individual']->value=='y'){?>
		<br />
		<a class="fgallink" href="tiki-objectpermissions.php?objectName=<?php echo rawurlencode($_smarty_tpl->tpl_vars['name']->value);?>
&amp;objectType=file+gallery&amp;permType=file+galleries&amp;objectId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
">
			There are individual permissions set for this file gallery
		</a>
	<?php }?>
	<div>
		<form class="admin" action="<?php echo $_SERVER['PHP_SELF'];?>
?<?php echo smarty_function_query(array(),$_smarty_tpl);?>
" method="post">
			<input type="hidden" name="galleryId" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['galleryId']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
			<input type="hidden" name="filegals_manager" <?php if (isset($_smarty_tpl->tpl_vars['filegals_manager']->value)){?>value="<?php echo $_smarty_tpl->tpl_vars['filegals_manager']->value;?>
"<?php }?> />

			<div class="input_submit_container" style="text-align: right">
				<input type="submit" value="Save" name="edit" />
				&nbsp;
				<input type="checkbox" name="viewitem" checked="checked"/> View inserted gallery
			</div>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"list_file_gallery")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"list_file_gallery"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Properties")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Properties"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<table class="formcolor">
						<tr>
							<td>
								<label for="name">Name:</label>
							</td>
							<td>
								<?php if ($_smarty_tpl->tpl_vars['galleryId']->value==$_smarty_tpl->tpl_vars['treeRootId']->value){?>
									<b><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['gal_info']->value['name'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</b>
									<input type="hidden" name="name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gal_info']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" />
								<?php }else{ ?>
									<input type="text" size="50" id="name" name="name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gal_info']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" style="width:100%"/>
									<br/>
									<em>Required for podcasts.</em>
								<?php }?>
							</td>
						</tr>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries_templates']=='y'){?>
 						<tr>
 							<td>
								<label for="fgal_template">Template:</label>
							</td>
							<td>
								<select name="fgal_template" id="fgal_template">
									<option value=""<?php if (!isset($_smarty_tpl->tpl_vars['templateId']->value)||$_smarty_tpl->tpl_vars['templateId']->value==''){?> selected="selected"<?php }?>>None</option>
									<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['all_templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['gal_info']->value['template']==$_smarty_tpl->tpl_vars['item']->value['id']){?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
</option>
									<?php } ?>
									<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$('#fgal_template').change( function() {
	var otherTabs = $('span.tabinactive');
	var otherParams = $('#description').parents('tr').nextAll('tr');

	if ($(this).val() != '') {
		// Select template, hide parameters
		otherTabs.hide();
		otherParams.hide();
	} else {
		// No template, show parameters
		otherTabs.show();
		otherParams.show();
	}
}).change();
								<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								</select>
							</td>
						</tr>
						<?php }?>
						<tr>
							<td>
								<label for="fgal_type">Type:</label>
							</td>
							<td>
								<?php if ($_smarty_tpl->tpl_vars['galleryId']->value==$_smarty_tpl->tpl_vars['treeRootId']->value){?>
									<?php if ($_smarty_tpl->tpl_vars['gal_info']->value['type']=='system'){?>
										System
									<?php }elseif($_smarty_tpl->tpl_vars['gal_info']->value['type']=='user'){?>
										User
									<?php }else{ ?>
										<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['gal_info']->value['type'])); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['gal_info']->value['type']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Other (%0)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['gal_info']->value['type']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									<?php }?>
									<input type="hidden" name="fgal_type" value="<?php echo $_smarty_tpl->tpl_vars['gal_info']->value['type'];?>
" />
								<?php }else{ ?>
									<select name="fgal_type" id="fgal_type">
										<option value="default" <?php if ($_smarty_tpl->tpl_vars['gal_info']->value['type']=='default'){?>selected="selected"<?php }?>>Any file</option>
										<option value="podcast" <?php if ($_smarty_tpl->tpl_vars['gal_info']->value['type']=='podcast'){?>selected="selected"<?php }?>>Podcast (audio)</option>
										<option value="vidcast" <?php if ($_smarty_tpl->tpl_vars['gal_info']->value['type']=='vidcast'){?>selected="selected"<?php }?>>Podcast (video)</option>
									</select>
								<?php }?>
							</td>
						</tr>
						<tr>
							<td>
								<label for="description">Description:</label>
							</td>
							<td>
								<textarea rows="5" cols="40" id="description" name="description" style="width:100%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gal_info']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
								<br/>
								<em>Required for podcasts.</em>
							</td>
						</tr>
						<tr>
							<td>
								<label for="visible">Gallery is visible to non-admin users.<label>
							</td>
							<td>
								<input type="checkbox" id="visible" name="visible" <?php if ($_smarty_tpl->tpl_vars['gal_info']->value['visible']=='y'){?>checked="checked"<?php }?> />
							</td>
						</tr>

						<tr>
							<td>
								<label for="public">Gallery is public.</label>
							</td>
							<td>
								<input type="checkbox" id="public" name="public" <?php if (isset($_smarty_tpl->tpl_vars['gal_info']->value['public'])&&$_smarty_tpl->tpl_vars['gal_info']->value['public']=='y'){?>checked="checked"<?php }?>/>
								<br />
								<em>Any user with permission (not only the gallery owner) can upload files.</em>
							</td>
						</tr>
						<tr>
							<td>
								<label for="backlinkPerms">Perms of the backlinks are checked to view a file</label>
							</td>
							<td>
								<input type="checkbox" id="backlinkPerms" name="backlinkPerms" <?php if ($_smarty_tpl->tpl_vars['gal_info']->value['backlinkPerms']=='y'){?>checked="checked"<?php }?>/>
							</td>
						</tr>
						<tr>
							<td>
								<label for="lockable">Files can be locked at download.</label>
							</td>
							<td>
								<input type="checkbox" id="lockable" name="lockable" <?php if ($_smarty_tpl->tpl_vars['gal_info']->value['lockable']=='y'){?>checked="checked"<?php }?>/>
							</td>
						</tr>
						<tr>
							<td>
								<label for="archives">Maximum number of archives for each file:</label>
							</td>
							<td>
								<input size="5" type="text" id="archives" name="archives" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gal_info']->value['archives'], ENT_QUOTES, 'UTF-8', true);?>
" />
								<br />
								<em>Use 0=unlimited, -1=none.</em>
								<?php if ($_smarty_tpl->tpl_vars['galleryId']->value!=$_smarty_tpl->tpl_vars['treeRootId']->value){?>
							</td>
						</tr>
						<tr>
							<td>
								<label for="parentId">Parent gallery:</label>
							</td>
							<td>
								<select name="parentId" id="parentId">
									<option value="<?php echo $_smarty_tpl->tpl_vars['treeRootId']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['parentId']->value==$_smarty_tpl->tpl_vars['treeRootId']->value){?> selected="selected"<?php }?>>none</option>
									<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['all_galleries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
										<?php if ($_smarty_tpl->tpl_vars['galleryId']->value!=$_smarty_tpl->tpl_vars['item']->value['id']){?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['parentId']->value==$_smarty_tpl->tpl_vars['item']->value['id']){?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
</option>
										<?php }?>
									<?php } ?>
								</select>
								<?php }else{ ?>
								<input type="hidden" name="parentId" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parentId']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
								<?php }?>
							</td>
						</tr>

						<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value=='y'){?>
							<tr>
								<td><label for="user">Owner of the gallery:</label></td>
								<td>
									<?php echo smarty_function_user_selector(array('user'=>$_smarty_tpl->tpl_vars['creator']->value,'id'=>'user'),$_smarty_tpl);?>

								</td>
							</tr>

							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_quota_per_fgal']=='y'){?>
								<tr>
									<td>Quota</td>
									<td>
										<input type="text" id="quota" name="quota" value="<?php echo $_smarty_tpl->tpl_vars['gal_info']->value['quota'];?>
" size="5" />Mb <i>(0 for unlimited)</i>
										<?php if ($_smarty_tpl->tpl_vars['gal_info']->value['usedSize']){?><br />Used: <?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['gal_info']->value['usedSize']);?>
<?php }?>
										<?php if (!empty($_smarty_tpl->tpl_vars['gal_info']->value['quota'])){?>
											<?php $_smarty_tpl->_capture_stack[0][] = array('use', null, null); ob_start(); ?>
												<?php echo smarty_function_math(array('equation'=>"round((100*x)/(1024*1024*y))",'x'=>$_smarty_tpl->tpl_vars['gal_info']->value['usedSize'],'y'=>$_smarty_tpl->tpl_vars['gal_info']->value['quota']),$_smarty_tpl);?>

											<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
											<?php echo smarty_function_quotabar(array('length'=>'100','value'=>Smarty::$_smarty_vars['capture']['use']),$_smarty_tpl);?>

										<?php }?>
										<?php if (!empty($_smarty_tpl->tpl_vars['gal_info']->value['maxQuota'])){?><br />Max: <?php echo $_smarty_tpl->tpl_vars['gal_info']->value['maxQuota'];?>
 Mb<?php }?>
										<?php if (!empty($_smarty_tpl->tpl_vars['gal_info']->value['minQuota'])){?><br />Min: <?php echo $_smarty_tpl->tpl_vars['gal_info']->value['minQuota'];?>
 Mb<?php }?>
									</td>
								</tr>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_groupalert']=='y'){?>
								<tr>
									<td>Group of users alerted when file gallery is modified</td>
									<td>
										<select id="groupforAlert" name="groupforAlert">
											<option value="">&nbsp;</option>
											<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groupforAlertList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['i']->value;?>
><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</option>
											<?php } ?>
										</select>
									</td>
								</tr>

								<tr>
									<td>Allows each user to be selected for small groups</td>
									<td><input type="checkbox" name="showeachuser" <?php if ($_smarty_tpl->tpl_vars['showeachuser']->value=='y'){?>checked="checked"<?php }?>/ ></td>
								</tr>
							<?php }?>

						<?php }?>

						<tr>
							<td>
								Maximum width for images in gallery:
							</td>
							<td>
								<input size="5" type="text" name="image_max_size_x" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gal_info']->value['image_max_size_x'], ENT_QUOTES, 'UTF-8', true);?>
" /> px
								<br />
								<i>If an image is wider than this, it will be resized. Attention: In this case, the original image will be lost. (0=unlimited)</i>
							</td>
						</tr>
						<tr>
							<td>
								Maximum height for images in gallery:
							</td>
							<td>
								<input size="5" type="text" name="image_max_size_y" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gal_info']->value['image_max_size_y'], ENT_QUOTES, 'UTF-8', true);?>
" /> px
								<br />
								<i>If an image is higher than this, it will be resized. Attention: In this case, the original image will be lost. (0=unlimited)</i>
							</td>
						</tr>
						<tr>
							<td>
								Wiki markup to enter when image selected from "file gallery manager":
							</td>
							<td>
								<input size="80" type="text" name="wiki_syntax" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gal_info']->value['wiki_syntax'], ENT_QUOTES, 'UTF-8', true);?>
" />
								<br />
								<i>The default is "{img fileId="%fileId%" thumb="y" rel="box[g]"}")</i>
								<i>Field names will be replaced when enclosed in % chars. e.g. %fileId%, %name%, %filename%, %description%</i>
							</td>
						</tr>

		 				<?php echo $_smarty_tpl->getSubTemplate ('categorize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


					</table>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Properties"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<!-- display properties -->
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Display Properties")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Display Properties"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<table class="formcolor">
						<tr>
							<td><label for="sortorder">Default sort order:</label></td>
							<td colspan="3">
								<select name="sortorder" id="sortorder">
									<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['options_sortorder']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
										<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['sortorder']->value==$_smarty_tpl->tpl_vars['item']->value){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</option>
									<?php } ?>
								</select>
								<br />
								<input type="radio" id="sortdirection2" name="sortdirection" value="asc" <?php if ($_smarty_tpl->tpl_vars['sortdirection']->value=='asc'){?>checked="checked"<?php }?> />
								<label for="sortdirection2">Ascending</label>
								<br />
								<input type="radio" id="sortdirection1" name="sortdirection" value="desc" <?php if ($_smarty_tpl->tpl_vars['sortdirection']->value=='desc'){?>checked="checked"<?php }?> />
								<label for="sortdirection1">Descending</label>
							</td>
						</tr>
						<tr>
							<td>
								<label for="max_desc">Max description display size:</label>
							</td>
							<td>
								<input type="text" id="max_desc" name="max_desc" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['max_desc']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
							</td>
							<td>
								<label for="maxRows">Max rows per page:</label>
							</td>
							<td>
								<input type="text" id="maxRows" name="maxRows" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['maxRows']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
							</td>
						</tr>
						<tr>
							<td colspan="4">Select which items to display when listing galleries:
								<table>
									<?php echo $_smarty_tpl->getSubTemplate ('fgal_listing_conf.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

								</table>
							</td>
						</tr>
					</table>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Display Properties"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"list_file_gallery"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<input type="submit" value="Save" name="edit" />
		</form>
	</div>
	<br />
<?php }?>
<?php }} ?>