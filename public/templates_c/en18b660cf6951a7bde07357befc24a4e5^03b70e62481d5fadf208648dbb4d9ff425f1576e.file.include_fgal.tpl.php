<?php /* Smarty version Smarty-3.1-DEV, created on 2013-05-28 00:20:06
         compiled from "D:\wamp\www\mlpnwrp_tw\public\templates\admin\include_fgal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2092351a3f83693e001-67300518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03b70e62481d5fadf208648dbb4d9ff425f1576e' => 
    array (
      0 => 'D:\\wamp\\www\\mlpnwrp_tw\\public\\templates\\admin\\include_fgal.tpl',
      1 => 1351107247,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2092351a3f83693e001-67300518',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
    'feedbacks' => 0,
    'feedback' => 0,
    'usedSize' => 0,
    'prefs' => 0,
    'options_sortorder' => 0,
    'item' => 0,
    'fgal_sortorder' => 0,
    'key' => 0,
    'fgal_sortdirection' => 0,
    'section' => 0,
    'fgal_listing_conf_admin' => 0,
    'missingHandlers' => 0,
    'mime' => 0,
    'fgal_handlers' => 0,
    'cmd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_51a3f837153763_16041383',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a3f837153763_16041383')) {function content_51a3f837153763_16041383($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_block_tabset')) include 'lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_preference')) include 'lib/smarty_tiki\\function.preference.php';
if (!is_callable('smarty_function_button')) include 'lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_function_help')) include 'lib/smarty_tiki\\function.help.php';
if (!is_callable('smarty_modifier_kbsize')) include 'lib/smarty_tiki\\modifier.kbsize.php';
if (!is_callable('smarty_function_math')) include 'D:\\wamp\\www\\mlpnwrp_tw\\public\\lib\\smarty\\libs\\plugins\\function.math.php';
if (!is_callable('smarty_function_quotabar')) include 'lib/smarty_tiki\\function.quotabar.php';
if (!is_callable('smarty_function_cycle')) include 'D:\\wamp\\www\\mlpnwrp_tw\\public\\lib\\smarty\\libs\\plugins\\function.cycle.php';
?>
<?php if (!empty($_smarty_tpl->tpl_vars['errors']->value)){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"errors",'title'=>"Errors")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"errors",'title'=>"Errors"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8', true);?>

			<br />
		<?php } ?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"errors",'title'=>"Errors"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['feedbacks']->value)){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Feedback")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Feedback"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php  $_smarty_tpl->tpl_vars['feedback'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feedback']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feedbacks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feedback']->key => $_smarty_tpl->tpl_vars['feedback']->value){
$_smarty_tpl->tpl_vars['feedback']->_loop = true;
?>
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feedback']->value, ENT_QUOTES, 'UTF-8', true);?>

			<br />
		<?php } ?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Feedback"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	To create or remove file galleries, select <a class="rbox-link" href="tiki-list_file_gallery.php">File Galleries</a> from the application menu.
	<hr />
	If you decide to store files in a directory you must ensure that the user cannot access directly to the directory.
	You have two options to accomplish this:<br /><ul><li>Use a directory outside your document root, make sure your php script can read and write to that directory</li><li>Use a directory inside the document root and use .htaccess to prevent the user from listing the directory contents</li></ul>
	To configure the directory path use UNIX like paths for example files/ or c:/foo/files or /www/files/
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<form action="tiki-admin.php?page=fgal" method="post">
	<div class="heading input_submit_container" style="text-align: right">
		<input type="submit" name="filegalhandlers" value="Change preferences" />
	</div>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"fgal_admin")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"fgal_admin"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"General Settings")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"General Settings"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


			<fieldset class="admin">
				<legend>Activate the feature</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_file_galleries','visible'=>"always"),$_smarty_tpl);?>

			</fieldset>
			
			<fieldset class="admin">
				<legend>Plugins</legend>
				<?php echo smarty_function_preference(array('name'=>'wikiplugin_files'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_file'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_img'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_carousel'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_galleriffic'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_colorbox'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_draw'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_annotation'),$_smarty_tpl);?>
				
				<?php echo smarty_function_preference(array('name'=>'wikiplugin_flash'),$_smarty_tpl);?>
				
			</fieldset>

			<?php echo smarty_function_preference(array('name'=>'home_file_gallery'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_use_db'),$_smarty_tpl);?>

			<div class="adminoptionboxchild fgal_use_db_childcontainer n">
				<?php echo smarty_function_preference(array('name'=>'fgal_use_dir'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_button(array('href'=>"tiki-admin.php?page=fgal&amp;move=to_fs",'_text'=>"Move files from database to directory"),$_smarty_tpl);?>

			<?php echo smarty_function_button(array('href'=>"tiki-admin.php?page=fgal&amp;move=to_db",'_text'=>"Move files from directory to database"),$_smarty_tpl);?>


			<?php echo smarty_function_preference(array('name'=>'fgal_podcast_dir'),$_smarty_tpl);?>


			<input type="hidden" name="filegalfeatures" />

			<fieldset>
				<legend>Features<?php echo smarty_function_help(array('url'=>"File+Gallery+Config"),$_smarty_tpl);?>
</legend>

				<?php echo smarty_function_preference(array('name'=>'feature_file_galleries_rankings'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_file_galleries_comments'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_file_galleries_comments_childcontainer">
					<a class="link" href="tiki-admin.php?page=comments">Manage comment settings</a>
				</div>
				<?php echo smarty_function_preference(array('name'=>'fgal_display_zip_option'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_webdav'),$_smarty_tpl);?>

				
				<?php echo smarty_function_preference(array('name'=>'feature_draw'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_draw_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'feature_draw_hide_buttons'),$_smarty_tpl);?>

				</div>

				<?php echo smarty_function_preference(array('name'=>'feature_jcapture'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_jcapture_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'fgal_for_jcapture'),$_smarty_tpl);?>

				</div>


				<?php echo smarty_function_preference(array('name'=>'feature_docs'),$_smarty_tpl);?>
				

				<?php echo smarty_function_preference(array('name'=>'fgal_limit_hits_per_file'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'fgal_prevent_negative_score'),$_smarty_tpl);?>


				<?php echo smarty_function_preference(array('name'=>'fgal_allow_duplicates'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_file_galleries_batch'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_file_galleries_batch_childcontainer">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('title'=>"Note")); $_block_repeat=true; echo smarty_block_remarksbox(array('title'=>"Note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					You are highly recommended to use a file directory as the File Gallery storage, when using this feature
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('title'=>"Note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<br/>
					<?php echo smarty_function_preference(array('name'=>'fgal_batch_dir'),$_smarty_tpl);?>

				</div>

				<?php echo smarty_function_preference(array('name'=>'feature_file_galleries_author'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'fgal_delete_after'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="fgal_delete_after_childcontainer">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Cron")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Cron"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						A cron job must be set up in order to delete the files.
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Cron"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_delete_after_email'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'fgal_keep_fileId'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_use_fgal_for_user_files'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_use_fgal_for_wiki_attachments'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_file_galleries_save_draft'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_file_galleries_templates'),$_smarty_tpl);?>
				
				<?php echo smarty_function_preference(array('name'=>'fgal_upload_progressbar'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'fgal_tracker_existing_search'),$_smarty_tpl);?>


				<?php echo smarty_function_preference(array('name'=>'fgal_fix_mime_type'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="fgal_fix_mime_type_childcontainer">
				<input type="submit" name="updateMime" id="updateMime" value="Update mime of all non archived octet-stream files" />
				</div>

				<?php echo smarty_function_preference(array('name'=>'fgal_upload_from_source'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="fgal_upload_from_source_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'fgal_source_refresh_frequency'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_source_show_refresh'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'tiki_check_file_content'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'fgal_elfinder_feature'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>Quota<?php echo smarty_function_help(array('url'=>"File+Gallery+Config#Quota"),$_smarty_tpl);?>
</legend>
				<?php echo smarty_function_preference(array('name'=>'fgal_quota'),$_smarty_tpl);?>
Used: <?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['usedSize']->value);?>

				<div class="adminoptionboxchild" id="fgal_quota_childcontainer">
					<?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['fgal_quota'])){?>
						<?php $_smarty_tpl->_capture_stack[0][] = array('use', null, null); ob_start(); ?><?php echo smarty_function_math(array('equation'=>"round((100*x)/(1024*1024*y))",'x'=>$_smarty_tpl->tpl_vars['usedSize']->value,'y'=>$_smarty_tpl->tpl_vars['prefs']->value['fgal_quota']),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
						<?php echo smarty_function_quotabar(array('length'=>'100','value'=>'$smarty.capture.use'),$_smarty_tpl);?>

					<?php }?>
				</div>
				<?php echo smarty_function_preference(array('name'=>'fgal_quota_per_fgal'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="fgal_quota_per_fgal_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'fgal_quota_default'),$_smarty_tpl);?>

				</div>
			</fieldset>

			<fieldset>
				<legend>Upload Regex<?php echo smarty_function_help(array('url'=>"File+Gallery+Config#Filename_must_match:"),$_smarty_tpl);?>
</legend>
				<?php echo smarty_function_preference(array('name'=>'fgal_match_regex'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'fgal_nmatch_regex'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"General Settings"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Gallery Listings")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Gallery Listings"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('title'=>"Note")); $_block_repeat=true; echo smarty_block_remarksbox(array('title'=>"Note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				Changing these settings will <em>not</em> affect existing file galleries. These changes will apply <em>only</em> to new file galleries.
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('title'=>"Note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


			<input type="hidden" name="filegallistprefs" />
			<div class="adminoptionbox">
				<div class="adminoptionlabel">
					<label for="fgal_sortorder">Default sort order:</label>
					<select name="fgal_sortorder" id="fgal_sortorder">
						<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['options_sortorder']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
							<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['fgal_sortorder']->value==$_smarty_tpl->tpl_vars['item']->value){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</option>
						<?php } ?>
					</select>
					<div class="adminoptionboxchild">
						<div class="adminoptionlabel">
							<input type="radio" id="fgal_sortdirection1" name="fgal_sortdirection" value="desc" <?php if ($_smarty_tpl->tpl_vars['fgal_sortdirection']->value=='desc'){?>checked="checked"<?php }?> />
							<label for="fgal_sortdirection1">Descending</label>
						</div>
						<div class="adminoptionlabel">
							<input type="radio" id="fgal_sortdirection2" name="fgal_sortdirection" value="asc" <?php if ($_smarty_tpl->tpl_vars['fgal_sortdirection']->value=='asc'){?>checked="checked"<?php }?> />
							<label for="fgal_sortdirection2">Ascending</label>
						</div>
					</div>	
				</div>
			</div>
			<?php echo smarty_function_preference(array('name'=>'fgal_quota_show'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_search'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_search_in_content'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_show_thumbactions'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_thumb_max_size'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_browse_name_max_length'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_ratio_hits'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_display_properties'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_display_replace'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_checked'),$_smarty_tpl);?>


			<fieldset>
				<legend>Select which items to display when listing galleries: </legend>
				<table class="admin">
					<?php echo $_smarty_tpl->getSubTemplate ('fgal_listing_conf.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				</table>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Gallery Listings"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php if ($_smarty_tpl->tpl_vars['section']->value=='admin'){?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Admin Gallery Listings")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Admin Gallery Listings"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<fieldset>
					<legend>Select which items to display when admin galleries: </legend>
					<table class="admin">
						<?php echo $_smarty_tpl->getSubTemplate ('fgal_listing_conf.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('fgal_options'=>'','fgal_listing_conf'=>$_smarty_tpl->tpl_vars['fgal_listing_conf_admin']->value), 0);?>

					</table>
				</fieldset>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Admin Gallery Listings"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Search Indexing")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Search Indexing"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php echo smarty_function_preference(array('name'=>'fgal_enable_auto_indexing'),$_smarty_tpl);?>


			<input name="filegalhandlers" type="hidden" />
			<div class="adminoptionbox">
				<fieldset>
					<legend>Handlers<?php echo smarty_function_help(array('url'=>"File+Gallery+Config#File_galleries_search_indexing"),$_smarty_tpl);?>
</legend>
					<div class="adminoptionbox">
						<div class="adminoptionlabel">Add custom handlers to make your files &quot;searchable&quot; content.
							<ul>
								<li>
									Use <strong>%1</strong> as the internal file name. For example, use <strong>strings %1</strong> to convert the document to text, using the Unix <strong>strings</strong> command.
								</li>
								<li>
									To delete a handler, leave the <strong>System Command</strong> field blank.
								</li>
							</ul>
						</div>
					</div>

					<?php if (!empty($_smarty_tpl->tpl_vars['missingHandlers']->value)){?>
						Tiki is pre-configured to handle many common types. If any of those are listed here, it is because the command line tool is unavailable.
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'warning','title'=>"Missing Handlers")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Missing Handlers"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<?php  $_smarty_tpl->tpl_vars['mime'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mime']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['missingHandlers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mime']->key => $_smarty_tpl->tpl_vars['mime']->value){
$_smarty_tpl->tpl_vars['mime']->_loop = true;
?>
								<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mime']->value, ENT_QUOTES, 'UTF-8', true);?>

								<br />
							<?php } ?>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Missing Handlers"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }?>

					<div class="adminoptionbox">
						<div class="adminoptionlabel">
							<table class="formcolor">
								<tr>
									<th>MIME Type</th>
									<th>System Command</th>
								</tr>
								<?php echo smarty_function_cycle(array('values'=>"odd,even",'print'=>false),$_smarty_tpl);?>

								<?php  $_smarty_tpl->tpl_vars['cmd'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cmd']->_loop = false;
 $_smarty_tpl->tpl_vars['mime'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fgal_handlers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cmd']->key => $_smarty_tpl->tpl_vars['cmd']->value){
$_smarty_tpl->tpl_vars['cmd']->_loop = true;
 $_smarty_tpl->tpl_vars['mime']->value = $_smarty_tpl->tpl_vars['cmd']->key;
?>
									<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
">
										<td><?php echo $_smarty_tpl->tpl_vars['mime']->value;?>
</td>
										<td>
											<input name="mimes[<?php echo $_smarty_tpl->tpl_vars['mime']->value;?>
]" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cmd']->value, ENT_QUOTES, 'UTF-8', true);?>
" size="30"/>
										</td>
									</tr>
								<?php } ?>
								<tr>
									<td class="odd">
										<input name="newMime" type="text" size="30" />
									</td>
									<td class="odd">
										<input name="newCmd" type="text" size="30"/>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</fieldset>

				<div class="adminoptionbox">
					<div class="adminoptionlabel">
						<div align="center">
							<input type="submit" name="filegalredosearch" value="Reindex all files for search"/>
						</div>
					</div>
				</div>
			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Search Indexing"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"SCORM")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"SCORM"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php echo smarty_function_preference(array('name'=>'scorm_enabled'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'scorm_tracker'),$_smarty_tpl);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"SCORM"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"fgal_admin"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<div class="input_submit_container clear" style="text-align: center">
		<input type="submit" name="filegalhandlers" value="Change preferences" />
	</div>
</form>
<?php }} ?>