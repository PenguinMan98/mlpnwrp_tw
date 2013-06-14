<?php /* Smarty version Smarty-3.1-DEV, created on 2013-06-01 08:05:07
         compiled from "D:\wamp\www\mlpnwrp_tw\public\templates\list_file_gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1225351a9ab33deb0c3-98740066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a4323b62b616e5849d18451ea37f2ea11b84ee9' => 
    array (
      0 => 'D:\\wamp\\www\\mlpnwrp_tw\\public\\templates\\list_file_gallery.tpl',
      1 => 1352613054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1225351a9ab33deb0c3-98740066',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tree' => 0,
    'tiki_p_list_file_galleries' => 0,
    'fgal_options' => 0,
    'tiki_p_view_fgal_explorer' => 0,
    'gallery_path' => 0,
    'tiki_p_view_fgal_path' => 0,
    'prefs' => 0,
    'view' => 0,
    'maxRecords' => 0,
    'cant' => 0,
    'offset' => 0,
    'filegals_manager' => 0,
    'gal_info' => 0,
    'find' => 0,
    'sort_mode' => 0,
    'file_info' => 0,
    'page' => 0,
    'files' => 0,
    'tiki_p_admin_file_galleries' => 0,
    'tiki_p_upload_files' => 0,
    'tiki_p_assign_perm_file_gallery' => 0,
    'show_details' => 0,
    'tiki_p_remove_files' => 0,
    'all_galleries' => 0,
    'galleryId' => 0,
    'perms' => 0,
    'perm' => 0,
    'groups' => 0,
    'groupName' => 0,
    'reindex_file_id' => 0,
    'maxWidth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_51a9ab341e7489_21836629',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a9ab341e7489_21836629')) {function content_51a9ab341e7489_21836629($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_self_link')) include 'lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_block_pagination_links')) include 'lib/smarty_tiki\\block.pagination_links.php';
if (!is_callable('smarty_function_reindex_file_pixel')) include 'lib/smarty_tiki\\function.reindex_file_pixel.php';
?>

<?php if ((isset($_smarty_tpl->tpl_vars['tree']->value)&&count($_smarty_tpl->tpl_vars['tree']->value)>0&&$_smarty_tpl->tpl_vars['tiki_p_list_file_galleries']->value!='n'&&$_smarty_tpl->tpl_vars['fgal_options']->value['show_explorer']['value']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_fgal_explorer']->value=='y')||(!empty($_smarty_tpl->tpl_vars['gallery_path']->value)&&$_smarty_tpl->tpl_vars['fgal_options']->value['show_path']['value']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_fgal_path']->value=='y')){?>

	<div class="fgal_top_bar" style="height:16px; vertical-align:middle">

		<?php if (isset($_smarty_tpl->tpl_vars['tree']->value)&&count($_smarty_tpl->tpl_vars['tree']->value)>0&&$_smarty_tpl->tpl_vars['tiki_p_list_file_galleries']->value!='n'&&$_smarty_tpl->tpl_vars['fgal_options']->value['show_explorer']['value']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_fgal_explorer']->value=='y'){?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y'){?>
				<div id="fgalexplorer_close" style="float:left; vertical-align:middle; display:<?php if (!isset($_SESSION['tiki_cookie_jar']['show_fgalexplorer'])||$_SESSION['tiki_cookie_jar']['show_fgalexplorer']=='y'){?>none<?php }else{ ?>inline<?php }?>;">
					<a href="#" onclick="flip('fgalexplorer','');hide('fgalexplorer_close',false);show('fgalexplorer_open',false);return false;"><?php echo smarty_function_icon(array('_id'=>'application_side_tree','alt'=>"Show Tree"),$_smarty_tpl);?>
</a>
				</div>

				<div id="fgalexplorer_open" style="float:left; vertical-align:middle; display:<?php if (isset($_SESSION['tiki_cookie_jar']['show_fgalexplorer'])&&$_SESSION['tiki_cookie_jar']['show_fgalexplorer']!='y'){?>none<?php }else{ ?>inline<?php }?>;">
					<a href="#" onclick="flip('fgalexplorer','');hide('fgalexplorer_open',false);show('fgalexplorer_close',false);return false;"><?php echo smarty_function_icon(array('_id'=>'application_side_contract','alt'=>"Hide Tree"),$_smarty_tpl);?>
</a>
				</div>

			<?php }else{ ?>

				<div style="float:left; vertical-align:middle">
					<?php if (isset($_REQUEST['show_fgalexplorer'])&&$_REQUEST['show_fgalexplorer']=='y'){?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon'=>'application_side_contract','show_fgalexplorer'=>'n')); $_block_repeat=true; echo smarty_block_self_link(array('_icon'=>'application_side_contract','show_fgalexplorer'=>'n'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Hide Tree<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon'=>'application_side_contract','show_fgalexplorer'=>'n'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }else{ ?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon'=>'application_side_tree','show_fgalexplorer'=>'y')); $_block_repeat=true; echo smarty_block_self_link(array('_icon'=>'application_side_tree','show_fgalexplorer'=>'y'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Show Tree<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon'=>'application_side_tree','show_fgalexplorer'=>'y'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }?>
				</div>
			<?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['gallery_path']->value!=''&&$_smarty_tpl->tpl_vars['fgal_options']->value['show_path']['value']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_fgal_path']->value=='y'){?>
			<div class="gallerypath" style="vertical-align:middle">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['gallery_path']->value;?>
</div>
		<?php }?>
	</div>
<?php }?>

<table border="0" cellpadding="3" cellspacing="3" width="100%" style="clear: both">
	<tr>
		<?php if (isset($_smarty_tpl->tpl_vars['tree']->value)&&count($_smarty_tpl->tpl_vars['tree']->value)>0&&$_smarty_tpl->tpl_vars['tiki_p_list_file_galleries']->value!='n'&&$_smarty_tpl->tpl_vars['fgal_options']->value['show_explorer']['value']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_fgal_explorer']->value=='y'&&$_smarty_tpl->tpl_vars['view']->value!='page'){?>
			<td width="25%" class="fgalexplorer" id="fgalexplorer" style="<?php if ((isset($_SESSION['tiki_cookie_jar']['show_fgalexplorer'])&&$_SESSION['tiki_cookie_jar']['show_fgalexplorer']!='y')&&(!isset($_REQUEST['show_fgalexplorer'])||$_REQUEST['show_fgalexplorer']!='y')){?>display:none;<?php }?> width: 25%">
				<div>
					<?php echo $_smarty_tpl->tpl_vars['tree']->value;?>

				</div>
			</td>

			<td width="75%" class="fgallisting">
		<?php }else{ ?>
			<td width="100%" class="fgallisting">
		<?php }?>

		<div style="padding:1px; overflow-x:auto; overflow-y:hidden;">
			<?php if ($_smarty_tpl->tpl_vars['maxRecords']->value>20&&$_smarty_tpl->tpl_vars['cant']->value>$_smarty_tpl->tpl_vars['maxRecords']->value){?>
				<div class="clearboth" style="margin-bottom: 3px;">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</div>
			<?php }?>

			<form name="fgalformid" id="fgalform" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)){?>?filegals_manager=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filegals_manager']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" enctype="multipart/form-data">
				<input type="hidden" name="galleryId" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gal_info']->value['galleryId'], ENT_QUOTES, 'UTF-8', true);?>
" />
				<input type="hidden" name="find" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['find']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
				<?php if (!empty($_REQUEST['show_details'])){?><input type="hidden" name="show_details" value="<?php echo $_REQUEST['show_details'];?>
" /><?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_asynchronous_indexing']=='y'){?><input type="hidden" name="fast" value="y" /><?php }?>
				<?php if (!empty($_smarty_tpl->tpl_vars['sort_mode']->value)){?><input type="hidden" name="sort_mode" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort_mode']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['file_info']->value)){?><input type="hidden" name="fileId" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file_info']->value['fileId'], ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['page']->value)){?><input type="hidden" name="page" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['view']->value)){?><input type="hidden" name="view" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>

				<?php $_smarty_tpl->tpl_vars['nbCols'] = new Smarty_variable(0, null, 0);?>
				<?php $_smarty_tpl->tpl_vars['other_columns'] = new Smarty_variable('', null, 0);?>
				<?php $_smarty_tpl->tpl_vars['other_columns_selected'] = new Smarty_variable('', null, 0);?>

				<?php if ($_smarty_tpl->tpl_vars['view']->value=='browse'||$_smarty_tpl->tpl_vars['view']->value=='page'){?>
					<?php $_smarty_tpl->tpl_vars['show_infos'] = new Smarty_variable('y', null, 0);?>
					<?php echo $_smarty_tpl->getSubTemplate ('browse_file_gallery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<?php }else{ ?>
					<?php $_smarty_tpl->tpl_vars['show_infos'] = new Smarty_variable('n', null, 0);?>
					<?php echo $_smarty_tpl->getSubTemplate ('list_file_gallery_content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<?php }?>

				<?php if (($_smarty_tpl->tpl_vars['files']->value&&$_smarty_tpl->tpl_vars['gal_info']->value['show_checked']!='n'&&$_smarty_tpl->tpl_vars['prefs']->value['fgal_checked']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_upload_files']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_assign_perm_file_gallery']->value=='y')&&($_smarty_tpl->tpl_vars['prefs']->value['fgal_show_thumbactions']=='y'||$_smarty_tpl->tpl_vars['show_details']->value=='y'||$_smarty_tpl->tpl_vars['view']->value!='browse')&&$_smarty_tpl->tpl_vars['view']->value!='page')){?>
					<div id="sel">
						<div>
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_remove_files']->value=='y'||!isset($_smarty_tpl->tpl_vars['file_info']->value)||$_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value=='y'||$_smarty_tpl->tpl_vars['prefs']->value['fgal_display_zip_option']=='y'||$_smarty_tpl->tpl_vars['tiki_p_assign_perm_file_gallery']->value=='y'){?>
								Perform action with checked:
							<?php }?>
							<?php if (!isset($_smarty_tpl->tpl_vars['file_info']->value)){?>
								<?php if ($_smarty_tpl->tpl_vars['offset']->value){?><input type="hidden" name="offset" value="<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
" /><?php }?>
								<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value=='y'){?>
									<?php echo smarty_function_icon(array('_id'=>'arrow_right','_tag'=>'input_image','name'=>'movesel','alt'=>"Move",'title'=>"Move Selected Files",'style'=>'vertical-align: middle;'),$_smarty_tpl);?>

								<?php }?>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_remove_files']->value=='y'){?>
								<?php echo smarty_function_icon(array('_id'=>'cross','_tag'=>'input_image','_confirm'=>"Are you sure you want to delete the selected files?",'name'=>'delsel','alt'=>"Delete",'style'=>'vertical-align: middle;'),$_smarty_tpl);?>

							<?php }?>

							<?php echo smarty_function_icon(array('_id'=>'tag_green','_tag'=>'input_image','name'=>'refresh_metadata','alt'=>"Refresh Metadata",'style'=>'vertical-align: middle;'),$_smarty_tpl);?>


							<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value=='y'){?>
								<?php echo smarty_function_icon(array('_id'=>'arrow_refresh','_tag'=>'input_image','_confirm'=>"Are you sure you want to reset the default gallery list table settings?",'name'=>'defaultsel','alt'=>"Reset to default gallery list table settings",'style'=>'vertical-align: middle;'),$_smarty_tpl);?>

							<?php }?>
							
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_display_zip_option']=='y'){?>
								<?php echo smarty_function_icon(array('_id'=>'img/icons/mime/zip.png','_tag'=>'input_image','name'=>'zipsel','alt'=>"Download the zip",'style'=>'vertical-align: middle;'),$_smarty_tpl);?>

							<?php }?>
							
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_assign_perm_file_gallery']->value=='y'){?>
								<?php echo smarty_function_icon(array('_id'=>'key','_tag'=>'input_image','name'=>'permsel','alt'=>"Assign permissions to file galleries",'title'=>"Assign permissions to file galleries",'style'=>'vertical-align: middle;'),$_smarty_tpl);?>

							<?php }?>
						
						</div>
						
						<?php if (!empty($_REQUEST['movesel_x'])&&!isset($_smarty_tpl->tpl_vars['file_info']->value)){?>
							<div>
								Move to:
								<select name="moveto">
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['all_galleries']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
										<?php if ($_smarty_tpl->tpl_vars['all_galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['id']!=$_smarty_tpl->tpl_vars['galleryId']->value){?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['all_galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['id'];?>
">
												<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['all_galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['label'], ENT_QUOTES, 'UTF-8', true);?>

											</option>
										<?php }?>
									<?php endfor; endif; ?>
								</select>
								<input type='submit' name='movesel' value="Move" />
							</div>
						<?php }?>
					</div>
					<?php if (!empty($_smarty_tpl->tpl_vars['perms']->value)){?>
						<div>
							Assign permissions to file galleries
							<select name="perms[]" multiple="multiple" size="5">
								<option value="" />
								<?php  $_smarty_tpl->tpl_vars['perm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['perm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['perms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['perm']->key => $_smarty_tpl->tpl_vars['perm']->value){
$_smarty_tpl->tpl_vars['perm']->_loop = true;
?>
									<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['perm']->value['permName'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['perm']->value['permName'], ENT_QUOTES, 'UTF-8', true);?>
</option>
								<?php } ?>
							</select>
							<select name="groups[]" multiple="multiple" size="5">
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['grp'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['grp']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['name'] = 'grp';
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['groups']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['total']);
?>
									<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['grp']['index']]['groupName'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['groupName']->value==$_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['grp']['index']]['groupName']){?>selected="selected"<?php }?>>
										<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['grp']['index']]['groupName'], ENT_QUOTES, 'UTF-8', true);?>

									</option>
								<?php endfor; endif; ?>
							</select>
							<input type="submit" name="permsel" value="Assign" />
						</div>
					<?php }?>
					<br style="clear:both"/>
				<?php }?>
			</form>

			<?php echo smarty_function_reindex_file_pixel(array('id'=>$_smarty_tpl->tpl_vars['reindex_file_id']->value),$_smarty_tpl);?>
<br />

			<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<?php if ($_smarty_tpl->tpl_vars['view']->value=='page'){?>
					tiki-list_file_gallery.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
&maxWidth=<?php echo $_smarty_tpl->tpl_vars['maxWidth']->value;?>
&maxRecords=<?php echo $_smarty_tpl->tpl_vars['maxRecords']->value;?>
&view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>

				<?php }?>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</div>
		</td>
	</tr>
</table>
<?php }} ?>