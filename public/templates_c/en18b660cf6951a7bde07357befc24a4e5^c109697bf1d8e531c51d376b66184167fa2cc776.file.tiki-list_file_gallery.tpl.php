<?php /* Smarty version Smarty-3.1-DEV, created on 2013-05-28 00:28:47
         compiled from "D:\wamp\www\mlpnwrp_tw\public\templates\tiki-list_file_gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1580951a3fa3fb032d2-62987370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c109697bf1d8e531c51d376b66184167fa2cc776' => 
    array (
      0 => 'D:\\wamp\\www\\mlpnwrp_tw\\public\\templates\\tiki-list_file_gallery.tpl',
      1 => 1352613054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1580951a3fa3fb032d2-62987370',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'edit_mode' => 0,
    'galleryId' => 0,
    'gal_info' => 0,
    'user' => 0,
    'name' => 0,
    'prefs' => 0,
    'tiki_p_admin_users' => 0,
    'tiki_p_admin' => 0,
    'user_watching_file_gallery' => 0,
    'view' => 0,
    'show_details' => 0,
    'treeRootId' => 0,
    'tiki_p_list_file_galleries' => 0,
    'tiki_p_view_file_gallery' => 0,
    'tiki_p_create_file_galleries' => 0,
    'dup_mode' => 0,
    'tiki_p_admin_file_galleries' => 0,
    'filescount' => 0,
    'tiki_p_assign_perm_file_gallery' => 0,
    'tiki_p_upload_files' => 0,
    'tiki_p_batch_upload_file_dir' => 0,
    'filegals_manager' => 0,
    'fileChangedMessage' => 0,
    'fileId' => 0,
    'category_watched' => 0,
    'watching_categories' => 0,
    'fgal_diff' => 0,
    'fgp_name' => 0,
    'find_durations' => 0,
    'offset' => 0,
    'maxWidth' => 0,
    'cant' => 0,
    'maxRecords' => 0,
    'tiki_p_read_comments' => 0,
    'tiki_p_post_comments' => 0,
    'tiki_p_edit_comments' => 0,
    'edited' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_51a3fa40285e05_88059038',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a3fa40285e05_88059038')) {function content_51a3fa40285e05_88059038($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_block_tr')) include 'lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_self_link')) include 'lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_function_button')) include 'lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_block_remarksbox')) include 'lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_block_pagination_links')) include 'lib/smarty_tiki\\block.pagination_links.php';
if (!is_callable('smarty_function_math')) include 'D:\\wamp\\www\\mlpnwrp_tw\\public\\lib\\smarty\\libs\\plugins\\function.math.php';
if (!is_callable('smarty_function_quotabar')) include 'lib/smarty_tiki\\function.quotabar.php';
if (!is_callable('smarty_function_service')) include 'lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_block_jq')) include 'lib/smarty_tiki\\block.jq.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"File+Galleries",'admpage'=>"fgal")); $_block_repeat=true; echo smarty_block_title(array('help'=>"File+Galleries",'admpage'=>"fgal"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php if ($_smarty_tpl->tpl_vars['edit_mode']->value=='y'&&$_smarty_tpl->tpl_vars['galleryId']->value==0){?>
		Create a File Gallery
	<?php }else{ ?>
		<?php if ($_smarty_tpl->tpl_vars['edit_mode']->value=='y'){?>
			Edit Gallery:
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['gal_info']->value['type']=='user'){?><?php if ($_smarty_tpl->tpl_vars['gal_info']->value['user']==$_smarty_tpl->tpl_vars['user']->value){?>My Files<?php }else{ ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Files of <?php echo $_smarty_tpl->tpl_vars['gal_info']->value['user'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
<?php }?>
	<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"File+Galleries",'admpage'=>"fgal"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if ($_smarty_tpl->tpl_vars['edit_mode']->value!='y'&&$_smarty_tpl->tpl_vars['gal_info']->value['description']!=''){?>
	<div class="description">
		<?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['gal_info']->value['description'], ENT_QUOTES, 'UTF-8', true));?>

	</div>
<?php }?>


<div class="navbar"<?php if ($_smarty_tpl->tpl_vars['prefs']->value['mobile_mode']=='y'){?> data-role="controlgroup" data-type="horizontal"<?php }?>>
	<?php if ($_smarty_tpl->tpl_vars['galleryId']->value>0){?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_group_watches']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_admin_users']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')){?>
			<a href="tiki-object_watches.php?objectId=<?php echo rawurlencode($_smarty_tpl->tpl_vars['galleryId']->value);?>
&amp;watch_event=file_gallery_changed&amp;objectType=File+Gallery&amp;objectName=<?php echo rawurlencode($_smarty_tpl->tpl_vars['gal_info']->value['name']);?>
&amp;objectHref=<?php echo rawurlencode(('tiki-list_file_gallery.php?galleryId=').($_smarty_tpl->tpl_vars['galleryId']->value));?>
" class="icon">
				<?php echo smarty_function_icon(array('_id'=>'eye_group','alt'=>"Group monitor",'align'=>'right','hspace'=>"1"),$_smarty_tpl);?>

			</a>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches']=='y'){?>
			<?php if (!isset($_smarty_tpl->tpl_vars['user_watching_file_gallery']->value)||$_smarty_tpl->tpl_vars['user_watching_file_gallery']->value=='n'){?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('galleryName'=>$_smarty_tpl->tpl_vars['name']->value,'watch_event'=>'file_gallery_changed','watch_object'=>$_smarty_tpl->tpl_vars['galleryId']->value,'watch_action'=>'add')); $_block_repeat=true; echo smarty_block_self_link(array('galleryName'=>$_smarty_tpl->tpl_vars['name']->value,'watch_event'=>'file_gallery_changed','watch_object'=>$_smarty_tpl->tpl_vars['galleryId']->value,'watch_action'=>'add'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php echo smarty_function_icon(array('_id'=>'eye','align'=>'right','alt'=>"Monitor this gallery",'hspace'=>"1"),$_smarty_tpl);?>

				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('galleryName'=>$_smarty_tpl->tpl_vars['name']->value,'watch_event'=>'file_gallery_changed','watch_object'=>$_smarty_tpl->tpl_vars['galleryId']->value,'watch_action'=>'add'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }else{ ?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('galleryName'=>$_smarty_tpl->tpl_vars['name']->value,'watch_event'=>'file_gallery_changed','watch_object'=>$_smarty_tpl->tpl_vars['galleryId']->value,'watch_action'=>'remove')); $_block_repeat=true; echo smarty_block_self_link(array('galleryName'=>$_smarty_tpl->tpl_vars['name']->value,'watch_event'=>'file_gallery_changed','watch_object'=>$_smarty_tpl->tpl_vars['galleryId']->value,'watch_action'=>'remove'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php echo smarty_function_icon(array('_id'=>'no_eye','align'=>'right','alt'=>"Stop monitoring this gallery",'hspace'=>"1"),$_smarty_tpl);?>

				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('galleryName'=>$_smarty_tpl->tpl_vars['name']->value,'watch_event'=>'file_gallery_changed','watch_object'=>$_smarty_tpl->tpl_vars['galleryId']->value,'watch_action'=>'remove'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feed_file_gallery']=='y'){?>
			<?php if ($_smarty_tpl->tpl_vars['gal_info']->value['type']=="podcast"||$_smarty_tpl->tpl_vars['gal_info']->value['type']=="vidcast"){?>
				<a href="tiki-file_gallery_rss.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
&amp;ver=PODCAST">
					<img src='img/rss_podcast_80_15.png' alt="RSS feed" title="RSS feed" align='right' />
				</a>
			<?php }else{ ?>
				<a href="tiki-file_gallery_rss.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
">
					<?php echo smarty_function_icon(array('_id'=>'feed','alt'=>"RSS feed",'title'=>"RSS feed",'align'=>'right'),$_smarty_tpl);?>

				</a>
			<?php }?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['view']->value=='browse'){?>
			<?php if ($_smarty_tpl->tpl_vars['show_details']->value=='y'){?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('show_details'=>'n')); $_block_repeat=true; echo smarty_block_self_link(array('show_details'=>'n'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php echo smarty_function_icon(array('_id'=>'no_information','align'=>'right','alt'=>"Hide file information from list view"),$_smarty_tpl);?>

				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('show_details'=>'n'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }else{ ?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('show_details'=>'y')); $_block_repeat=true; echo smarty_block_self_link(array('show_details'=>'y'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php echo smarty_function_icon(array('_id'=>'information','align'=>'right','alt'=>"Show file information from list view"),$_smarty_tpl);?>

				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('show_details'=>'y'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['treeRootId']->value==$_smarty_tpl->tpl_vars['prefs']->value['fgal_root_id']&&($_smarty_tpl->tpl_vars['tiki_p_list_file_galleries']->value=='y'||(!isset($_smarty_tpl->tpl_vars['tiki_p_list_file_galleries']->value)&&$_smarty_tpl->tpl_vars['tiki_p_view_file_gallery']->value=='y'))){?>
			<?php echo smarty_function_button(array('_text'=>"List Galleries",'href'=>"?"),$_smarty_tpl);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_create_file_galleries']->value=='y'&&$_smarty_tpl->tpl_vars['edit_mode']->value!='y'){?>
			<?php echo smarty_function_button(array('_keepall'=>'y','_text'=>"Create a Gallery",'edit_mode'=>1,'parentId'=>$_smarty_tpl->tpl_vars['galleryId']->value,'cookietab'=>1),$_smarty_tpl);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_create_file_galleries']->value=='y'&&$_smarty_tpl->tpl_vars['dup_mode']->value!='y'){?>
			<?php echo smarty_function_button(array('_text'=>"Duplicate Gallery",'dup_mode'=>1,'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value),$_smarty_tpl);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value=='y'||$_smarty_tpl->tpl_vars['user']->value==$_smarty_tpl->tpl_vars['gal_info']->value['user']){?>
			<?php if ($_smarty_tpl->tpl_vars['edit_mode']->value=='y'||$_smarty_tpl->tpl_vars['dup_mode']->value=='y'){?>
				<?php echo smarty_function_button(array('_keepall'=>'y','_text'=>"Browse Gallery",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value),$_smarty_tpl);?>

			<?php }else{ ?>
				<?php echo smarty_function_button(array('_keepall'=>'y','_text'=>"Edit Gallery",'edit_mode'=>"1",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value),$_smarty_tpl);?>

			<?php }?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['edit_mode']->value!='y'&&$_smarty_tpl->tpl_vars['dup_mode']->value!='y'){?>
			<?php if ($_smarty_tpl->tpl_vars['view']->value!='list'){?>
				<?php echo smarty_function_button(array('_keepall'=>'y','_text'=>"List Gallery",'view'=>"list",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value),$_smarty_tpl);?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['view']->value!='browse'){?>
				<?php echo smarty_function_button(array('_text'=>"Browse Images",'view'=>"browse",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value),$_smarty_tpl);?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['view']->value!='page'&&$_smarty_tpl->tpl_vars['filescount']->value>0){?>
				<?php echo smarty_function_button(array('_text'=>"Page View",'view'=>"page",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value,'maxRecords'=>1),$_smarty_tpl);?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['view']->value!='admin'&&$_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value=='y'){?>
				<?php echo smarty_function_button(array('_keepall'=>'y','_text'=>"Admin View",'view'=>"admin",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value),$_smarty_tpl);?>

			<?php }?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_assign_perm_file_gallery']->value=='y'){?>
			<?php echo smarty_function_button(array('_keepall'=>'y','_text'=>"Permissions",'href'=>"tiki-objectpermissions.php",'objectName'=>$_smarty_tpl->tpl_vars['name']->value,'objectType'=>'file+gallery','permType'=>'file+galleries','objectId'=>$_smarty_tpl->tpl_vars['galleryId']->value),$_smarty_tpl);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value=='y'||$_smarty_tpl->tpl_vars['user']->value==$_smarty_tpl->tpl_vars['gal_info']->value['user']||$_smarty_tpl->tpl_vars['gal_info']->value['public']=='y'){?>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_upload_files']->value=='y'){?>
				<?php echo smarty_function_button(array('_keepall'=>'y','_text'=>"Upload File",'href'=>"tiki-upload_file.php",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value),$_smarty_tpl);?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_upload_files']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_draw']=='y'){?>
				<?php echo smarty_function_button(array('_keepall'=>'y','_text'=>"Create Drawing",'href'=>"tiki-edit_draw.php",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value),$_smarty_tpl);?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries_batch']=="y"&&$_smarty_tpl->tpl_vars['tiki_p_batch_upload_file_dir']->value=='y'){?>
				<?php echo smarty_function_button(array('_keepall'=>'y','_text'=>"Directory Batch",'href'=>"tiki-batch_upload_files.php",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value),$_smarty_tpl);?>

			<?php }?>
		<?php }?>
	<?php }else{ ?>
		<?php if ($_smarty_tpl->tpl_vars['treeRootId']->value==$_smarty_tpl->tpl_vars['prefs']->value['fgal_root_id']&&($_smarty_tpl->tpl_vars['edit_mode']->value=='y'||$_smarty_tpl->tpl_vars['dup_mode']->value=='y')){?>
			<?php echo smarty_function_button(array('_text'=>"List Galleries",'href'=>'?'),$_smarty_tpl);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_create_file_galleries']->value=='y'&&$_smarty_tpl->tpl_vars['edit_mode']->value!='y'){?>
			<?php echo smarty_function_button(array('_keepall'=>'y','_text'=>"Create a Gallery",'edit_mode'=>"1",'parentId'=>"-1",'galleryId'=>"0"),$_smarty_tpl);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_upload_files']->value=='y'){?>
			<?php echo smarty_function_button(array('_text'=>"Upload File",'href'=>"tiki-upload_file.php"),$_smarty_tpl);?>

		<?php }?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['edit_mode']->value!='y'&&$_smarty_tpl->tpl_vars['prefs']->value['fgal_show_slideshow']=='y'&&$_smarty_tpl->tpl_vars['gal_info']->value['show_slideshow']['value']=='y'){?>
		<?php echo smarty_function_button(array('_text'=>"SlideShow",'href'=>"#",'_onclick'=>"javascript:window.open('tiki-list_file_gallery.php?galleryId=".((string)$_smarty_tpl->tpl_vars['galleryId']->value)."&amp;slideshow','','menubar=no,width=600,height=500,resizable=yes');return false;"),$_smarty_tpl);?>

	<?php }?>
</div>

<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Be careful to set the right permissions on the files you link to.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<label for="keepOpenCbx">Keep gallery window open</label>
	<input type="checkbox" id="keepOpenCbx" checked="checked">
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['fileChangedMessage']->value)&&$_smarty_tpl->tpl_vars['fileChangedMessage']->value!=''){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Note")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php echo $_smarty_tpl->tpl_vars['fileChangedMessage']->value;?>

		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)&&$_smarty_tpl->tpl_vars['filegals_manager']->value!=''){?>?filegals_manager=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filegals_manager']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
			<input type="hidden" name="galleryId" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['galleryId']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
			<input type="hidden" name="fileId" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fileId']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
			Your comment (optional): <input type="text" name="comment" size="40" />
			<?php echo smarty_function_icon(array('_id'=>'accept','_tag'=>'input_image'),$_smarty_tpl);?>

		</form>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches']=='y'){?>
	<div class="categbar" align="right">
		<?php if (isset($_smarty_tpl->tpl_vars['category_watched']->value)&&$_smarty_tpl->tpl_vars['category_watched']->value=='y'){?>
			Watched by categories:
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['watching_categories']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
				<?php echo smarty_function_button(array('_keepall'=>'y','_text'=>htmlspecialchars($_smarty_tpl->tpl_vars['watching_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'], ENT_QUOTES, 'UTF-8', true),'href'=>"tiki-browse_categories.php",'parentId'=>$_smarty_tpl->tpl_vars['watching_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['categId']),$_smarty_tpl);?>

			<?php endfor; endif; ?>
		<?php }?>
	</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['fgal_diff']->value)){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Modifications")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Modifications"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php  $_smarty_tpl->tpl_vars['fgp_prop'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fgp_prop']->_loop = false;
 $_smarty_tpl->tpl_vars['fgp_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fgal_diff']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fgp_prop']->key => $_smarty_tpl->tpl_vars['fgp_prop']->value){
$_smarty_tpl->tpl_vars['fgp_prop']->_loop = true;
 $_smarty_tpl->tpl_vars['fgp_name']->value = $_smarty_tpl->tpl_vars['fgp_prop']->key;
?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Property <b><?php echo $_smarty_tpl->tpl_vars['fgp_name']->value;?>
</b> Changed<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php } ?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Modifications"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['edit_mode']->value=='y'){?>
	<?php echo $_smarty_tpl->getSubTemplate ('edit_file_gallery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }elseif($_smarty_tpl->tpl_vars['dup_mode']->value=='y'){?>
	<?php echo $_smarty_tpl->getSubTemplate ('duplicate_file_gallery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_search']=='y'&&$_smarty_tpl->tpl_vars['view']->value!='page'){?>
		<?php echo $_smarty_tpl->getSubTemplate ('find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('find_show_num_rows'=>'y','find_show_categories_multi'=>'y','find_durations'=>$_smarty_tpl->tpl_vars['find_durations']->value,'find_show_sub'=>'y','find_other'=>"Gallery of this fileId",'find_in'=>"<ul><li>Name</li><li>Filename</li><li>Description</li></ul>"), 0);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_search_in_content']=='y'&&$_smarty_tpl->tpl_vars['galleryId']->value>0){?>
		<?php if ($_smarty_tpl->tpl_vars['view']->value!='page'){?>
			<div class="findtable">
				<form id="search-form" class="forms" method="get" action="tiki-search<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forum_local_tiki_search']=='y'){?>index<?php }else{ ?>results<?php }?>.php">
					<input type="hidden" name="where" value="files" />
					<input type="hidden" name="galleryId" value="<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
" />
					<label class="find_content">Search in content
						<input name="highlight" size="30" type="text" />
					</label>
					<input type="submit" class="wikiaction" name="search" value="Go"/>
				</form>
			</div>
		<?php }?>
	<?php }?>

<?php if ($_smarty_tpl->tpl_vars['view']->value=='page'){?>
	<div class="pageview">
		<form id="size-form" class="forms" action="tiki-list_file_gallery.php">
			<input type="hidden" name="view" value="page" />
			<input type="hidden" name="galleryId" value="<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
" />
			<input type="hidden" name="maxRecords" value=1 />
			<input type="hidden" name="offset" value="<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
" />
			<label for="maxWidth">
				Max width&nbsp;<input id="maxWidth" type="text" name="maxWidth" value="<?php echo $_smarty_tpl->tpl_vars['maxWidth']->value;?>
" />
			</label>
			<input type="submit" class="wikiaction" name="setSize" value="Go"/>
		</form>
	</div><br>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		tiki-list_file_gallery.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
&maxWidth=<?php echo $_smarty_tpl->tpl_vars['maxWidth']->value;?>
&maxRecords=<?php echo $_smarty_tpl->tpl_vars['maxRecords']->value;?>
&view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<br>
<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_quota_show']!='n'&&$_smarty_tpl->tpl_vars['gal_info']->value['quota']){?>
		<div style="float:right">
			<?php $_smarty_tpl->_capture_stack[0][] = array('use', null, null); ob_start(); ?>
				<?php echo smarty_function_math(array('equation'=>"round((100*x)/(1024*1024*y),2)",'x'=>$_smarty_tpl->tpl_vars['gal_info']->value['usedSize'],'y'=>$_smarty_tpl->tpl_vars['gal_info']->value['quota']),$_smarty_tpl);?>

			<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_quota_show']!='y'){?>
				<b><?php echo Smarty::$_smarty_vars['capture']['use'];?>
 %</b> space use on <b><?php echo $_smarty_tpl->tpl_vars['gal_info']->value['quota'];?>
 Mo</b>
				<br />
			<?php }?>
			
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_quota_show']!='text_only'){?>
				<?php echo smarty_function_quotabar(array('length'=>'100','value'=>Smarty::$_smarty_vars['capture']['use']),$_smarty_tpl);?>

			<?php }?>			
		</div>
	<?php }?>

	<?php echo $_smarty_tpl->getSubTemplate ('list_file_gallery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<?php if ($_smarty_tpl->tpl_vars['galleryId']->value>0&&$_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries_comments']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_read_comments']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_post_comments']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_edit_comments']->value=='y')){?>

		<div id="page-bar" class="clearfix">
			<span class="button">
				<a id="comment-toggle" href="<?php echo smarty_function_service(array('controller'=>'comment','action'=>'list','type'=>"file gallery",'objectId'=>$_smarty_tpl->tpl_vars['galleryId']->value),$_smarty_tpl);?>
#comment-container">
					Comments
				</a>
			</span>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				$('#comment-toggle').comment_toggle();
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>

		<div id="comment-container"></div>
	<?php }?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['galleryId']->value>0){?>
	<?php if ($_smarty_tpl->tpl_vars['edited']->value=='y'){?>
		<div class="wikitext">
			You can access the file gallery using the following URL: <a class="fgallink" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['url']->value;?>
?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
</a>
		</div>
	<?php }?>
<?php }?>

<?php }} ?>