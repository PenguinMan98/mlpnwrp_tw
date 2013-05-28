<?php /* Smarty version Smarty-3.1-DEV, created on 2013-05-28 00:18:20
         compiled from "D:\wamp\www\mlpnwrp_tw\public\templates\admin\include_gal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174551a3f7ccb2a6f3-73531368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91439650325caf90d7b6b53aae1774f7341d1d94' => 
    array (
      0 => 'D:\\wamp\\www\\mlpnwrp_tw\\public\\templates\\admin\\include_gal.tpl',
      1 => 1335707596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174551a3f7ccb2a6f3-73531368',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'max_img_upload_size' => 0,
    'prefs' => 0,
    'gdlib' => 0,
    'imagicklib' => 0,
    'catree' => 0,
    'maxRows' => 0,
    'rowImages' => 0,
    'thumbSizeX' => 0,
    'thumbSizeY' => 0,
    'scaleSize' => 0,
    'galleries' => 0,
    'movedimgs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_51a3f7ccd4ea66_83391554',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a3f7ccd4ea66_83391554')) {function content_51a3f7ccd4ea66_83391554($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_modifier_kbsize')) include 'lib/smarty_tiki\\modifier.kbsize.php';
if (!is_callable('smarty_function_preference')) include 'lib/smarty_tiki\\function.preference.php';
if (!is_callable('smarty_modifier_truncate')) include 'lib/smarty_tiki\\modifier.truncate.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

To add/remove image galleries, go to "Image Galleries" on the application menu, or <a class="rbox-link" href="tiki-galleries.php">Click Here</a>.
<hr />
You can upload images of a size of <?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['max_img_upload_size']->value);?>
. Alter the php.ini variables file_uploads, upload_max_filesize, post_max_size and database variables (max_allowed_packet for mysql) to change this value.
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<fieldset class="admin">
	<legend>Activate the feature</legend>
	<?php echo smarty_function_preference(array('name'=>'feature_galleries','visible'=>"always"),$_smarty_tpl);?>

</fieldset>

<fieldset class="admin">
	<legend>Home Gallery</legend>
	<form action="tiki-admin.php?page=gal" method="post">
		<?php echo smarty_function_preference(array('name'=>'home_gallery'),$_smarty_tpl);?>

		<input type="submit" name="galset" value="OK" />
	</form>
</fieldset>

<fieldset class="admin">
	<legend>Galleries features</legend>
	<form action="tiki-admin.php?page=gal" method="post">
		<table class="admin">
			<tr>
				<td><label>Rankings:</label></td>
				<td>
					<input type="checkbox" name="feature_gal_rankings" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_gal_rankings']=='y'){?>checked="checked"<?php }?>/>
				</td>
			</tr>
			<tr>
				<td><label>Comments:</label></td>
				<td>
					<input type="checkbox" name="feature_image_galleries_comments" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_image_galleries_comments']=='y'){?>checked="checked"<?php }?>/>
				</td>
			</tr>
			<tr>
				<td><label>Uses Slideshow:</label></td>
					<td>
						<input type="checkbox" name="feature_gal_slideshow" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_gal_slideshow']=='y'){?>checked="checked"<?php }?>/>
					</td>
				</tr>
				<tr>
					<td><label>Use database to store images:</label></td>
					<td>
						<input type="radio" name="gal_use_db" value="y" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_use_db']=='y'){?>checked="checked"<?php }?>/>
					</td>
				</tr>
				<tr>
					<td><label>Use a directory to store images:</label></td>
					<td>
						<input type="radio" name="gal_use_db" value="n" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_use_db']=='n'){?>checked="checked"<?php }?>/>
						<label>Directory path:</label>
						<br />
						<input type="text" name="gal_use_dir" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefs']->value['gal_use_dir'], ENT_QUOTES, 'UTF-8', true);?>
" size="50" />
						<br />
						(Note: if you change this directory, you have to move the contents to the new directory. You can also use the 'Mover' below.)
					</td>
				</tr>
				<tr>
					<td><label>Library to use for processing images:</label></td>
					<td>
						<input type="radio" name="gal_use_lib" value="gd" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_use_lib']!='imagick'){?>checked="checked"<?php }?>/>GD: <?php echo $_smarty_tpl->tpl_vars['gdlib']->value;?>

					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="radio" name="gal_use_lib" value="imagick" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_use_lib']=='imagick'){?>checked="checked"<?php }?>/>Imagick 0: <?php echo $_smarty_tpl->tpl_vars['imagicklib']->value;?>

					</td>
				</tr>
				<tr>
					<td><label>Uploaded image names must match regex:</label></td>
					<td>
						<input type="text" name="gal_match_regex" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefs']->value['gal_match_regex'], ENT_QUOTES, 'UTF-8', true);?>
"/>
					</td>
				</tr>
				<tr>
					<td><label>Uploaded image names cannot match regex:</label></td>
					<td>
						<input type="text" name="gal_nmatch_regex" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefs']->value['gal_nmatch_regex'], ENT_QUOTES, 'UTF-8', true);?>
"/>
					</td>
				</tr>
				<tr>
					<td colspan="2"><b>Directory Batch Loading</b>
					<br />
					If you enable Directory Batch Loading, you need to setup a web-readable directory (outside of your web space is better). Then setup a way to upload images in that dir, either by scp, ftp, or other protocols
				</td>
			</tr>
			<tr>
				<td><label>Enable directory batch loading:</label></td>
				<td>
					<input type="checkbox" name="feature_gal_batch" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_gal_batch']=='y'){?>checked="checked"<?php }?>/>
				</td>
			</tr>
			<tr>
				<td>
					<label>Batch loading directory:</label>
				</td>
				<td>
					<input type="text" name="gal_batch_dir" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefs']->value['gal_batch_dir'], ENT_QUOTES, 'UTF-8', true);?>
" size="50" />
				</td>
			</tr>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y'){?>
				<tr>
					<td>Force and limit categorization to within subtree of:</td>
					<td>
						<select name="feature_image_gallery_mandatory_category">
							<option value="-1" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_image_gallery_mandatory_category']==-1||$_smarty_tpl->tpl_vars['prefs']->value['feature_image_gallery_mandatory_category']==''){?>selected="selected"<?php }?>>None</option>
							<option value="0" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_image_gallery_mandatory_category']==0){?>selected="selected"<?php }?>>All</option>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['catree']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max']);
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
								<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['catree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['categId'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['catree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['categId']==$_smarty_tpl->tpl_vars['prefs']->value['feature_image_gallery_mandatory_category']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['catree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['categpath'];?>
</option>
							<?php endfor; endif; ?>
						</select>
					</td>
				</tr>
			<?php }?>
			<tr>
				<td><label>Display image information in a mouseover box:</label></td>
				<td>
					<input type="radio" name="gal_image_mouseover" value="n" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_image_mouseover']=='n'){?>checked="checked"<?php }?>/>No
					<input type="radio" name="gal_image_mouseover" value="y" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_image_mouseover']=='y'){?>checked="checked"<?php }?>/>Yes
					<input type="radio" name="gal_image_mouseover" value="only" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_image_mouseover']=='only'){?>checked="checked"<?php }?>/>yes, and don't display that information under the image
				</td>
			</tr>
				<tr>
				<td>
					<label>Use default max rows, images per row, thumbnails size and scale size for all galleries (set values below)</label>
				</td>
				<td>
					<input type="checkbox" name="preset_galleries_info" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['preset_galleries_info']=='y'){?>checked="checked"<?php }?> />
				</td>
			</tr>
			<tr>
				<td>Max Rows per page:</td>
				<td>
					<input type="text" name="maxRows" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['maxRows']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><i>Default: <?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['maxRowsGalleries'])){?><?php echo $_smarty_tpl->tpl_vars['prefs']->value['maxRowsGalleries'];?>
<?php }else{ ?>10<?php }?></i>
				</td>
			</tr>
			<tr>
				<td>Images per row:</td>
				<td>
					<input type="text" name="rowImages" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rowImages']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><i>Default: <?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['rowImagesGalleries'])){?><?php echo $_smarty_tpl->tpl_vars['prefs']->value['rowImagesGalleries'];?>
<?php }else{ ?>6<?php }?></i>
				</td>
			</tr>
			<tr>
				<td>
					Thumbnails size X:
				</td>
				<td>
					<input type="text" name="thumbSizeX" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thumbSizeX']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><i>Pixels Default: <?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['thumbSizeXGalleries'])){?><?php echo $_smarty_tpl->tpl_vars['prefs']->value['thumbSizeXGalleries'];?>
<?php }else{ ?>80<?php }?></i>
				</td>
			</tr>
			<tr>
				<td>Thumbnails size Y:</td>
				<td>
					<input type="text" name="thumbSizeY" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thumbSizeY']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><i>Pixels Default: <?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['thumbSizeYGalleries'])){?><?php echo $_smarty_tpl->tpl_vars['prefs']->value['thumbSizeYGalleries'];?>
<?php }else{ ?>80<?php }?></i>
				</td>
			</tr>
			<tr>
				<td>Default scale size:</td>
				<td>
					<input type="text" name="scaleSize" size="4" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['scaleSize']->value, ENT_QUOTES, 'UTF-8', true);?>
" />pixels
				</td>
			</tr>
			<tr>
				<td colspan="2" class="input_submit_container">
					<input type="submit" name="galfeatures" value="Set features" />
				</td>
			</tr>
		</table>
	</form>
</fieldset>

<fieldset class="admin">
	<legend>Exterminator</legend>
	<form action="tiki-admin.php?page=gal" method="post">
		<table class="admin">
			<tr>
				<td>
					<label>Remove images in the system gallery not being used in Wiki pages, articles or blog posts</label>
					<input type="hidden" name="rmvorphimg" value="1" />
				</td>
				<td>
					<input type="submit" name="button" value="Remove" />
				</td>
			</tr>
		</table>
	</form>
</fieldset>

<fieldset class="admin">
	<legend>Mover</legend>
		<form action="tiki-admin.php?page=gal" method="post">
		<table class="admin">
			<tr>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_use_db']=='n'){?>
						<label>Move images from database storage to filesystem storage</label>
						<input type="hidden" name="mvimg" value="to_fs" />
					<?php }else{ ?>
						<label>Move images from filesystem storage to database storage</label>
						<input type="hidden" name="mvimg" value="to_db" />
					<?php }?>
				</td>
				<td>
					<select name="move_gallery">
						<option value="-1">All galleries</option>
						<option value="0">System Gallery</option>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['galleries']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
							<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['galleryId'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'],20,"...",true);?>
</option>
						<?php endfor; endif; ?>
					</select>
				</td>
				<td>
					<input type="submit" name="button" value="Move" />
				</td>
			</tr>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_use_db']=='n'){?>
				<tr>
					<td>
						<label>Move images from old filesystem store to new directory<input type="hidden" name="newdir" value="to_newdir"></label>
					<td>
					<input type="text" name="gal_use_dir" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefs']->value['gal_use_dir'], ENT_QUOTES, 'UTF-8', true);?>
" size="50" />
				<td>
				<input type="submit" name="button" value="Move" /></td></tr>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['movedimgs']->value)&&$_smarty_tpl->tpl_vars['movedimgs']->value){?>
				<tr>
					<td colspan="3">Moved <?php echo $_smarty_tpl->tpl_vars['movedimgs']->value;?>
 Images</td>
				</tr>
			<?php }?>
		</table>
	</form>
</fieldset>

<fieldset class="admin">
	<legend>Gallery listing configuration</legend>
	<form method="post" action="tiki-admin.php?page=gal">
		<table class="admin">
			<tr>
				<td><label>Name</label></td>
				<td><input type="checkbox" name="gal_list_name" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_list_name']=='y'){?>checked="checked"<?php }?> /></td>
			</tr>
			<tr>
				<td><label>Parent</label></td>
				<td><input type="checkbox" name="gal_list_parent" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_list_parent']=='y'){?>checked="checked"<?php }?> /></td>
			</tr>
			<tr>
				<td><label>Description</label></td>
				<td><input type="checkbox" name="gal_list_description" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_list_description']=='y'){?>checked="checked"<?php }?> /></td>
			</tr>
			<tr>
				<td><label>Created</label></td>
				<td><input type="checkbox" name="gal_list_created" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_list_created']=='y'){?>checked="checked"<?php }?> /></td>
			</tr>
			<tr>
				<td><label>Last modified</label></td>
				<td><input type="checkbox" name="gal_list_lastmodif" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_list_lastmodif']=='y'){?>checked="checked"<?php }?> /></td>
			</tr>
			<tr>
				<td><label>User</label></td>
				<td><input type="checkbox" name="gal_list_user" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_list_user']=='y'){?>checked="checked"<?php }?> /></td>
			</tr>
			<tr>
				<td><label>Images</label></td>
				<td><input type="checkbox" name="gal_list_imgs" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_list_imgs']=='y'){?>checked="checked"<?php }?> /></td>
			</tr>
			<tr>
				<td><label>Visits</label></td>
				<td><input type="checkbox" name="gal_list_visits" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['gal_list_visits']=='y'){?>checked="checked"<?php }?> /></td>
			</tr>
			<tr>
				<td colspan="2" class="input_submit_container"><input type="submit" name="imagegallistprefs" value="Change configuration" /></td>
			</tr>
		</table>	
	</form>	
</fieldset>

<fieldset class="admin">
	<legend>Image galleries comments settings</legend>
	<form method="post" action="tiki-admin.php?page=gal">
		<table class="admin">
			<tr>
				<td><label>Default number of comments per page: </label></td>
				<td>
					<input size="5" type="text" name="image_galleries_comments_per_page" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefs']->value['image_galleries_comments_per_page'], ENT_QUOTES, 'UTF-8', true);?>
" />
				</td>
			</tr>
			<tr>
				<td><label>Comments default ordering</label></td>
				<td>
					<select name="image_galleries_comments_default_order">
						<option value="commentDate_desc" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['image_galleries_comments_default_order']=='commentDate_desc'){?>selected="selected"<?php }?>>Newest first</option>
						<option value="commentDate_asc" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['image_galleries_comments_default_order']=='commentDate_asc'){?>selected="selected"<?php }?>>Oldest first</option>
						<option value="points_desc" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['image_galleries_comments_default_order']=='points_desc'){?>selected="selected"<?php }?>>Points</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2" class="input_submit_container"><input type="submit" name="imagegalcomprefs" value="Change settings" /></td>
			</tr>
		</table>
	</form>
</fieldset>
<?php }} ?>