<?php /* Smarty version Smarty-3.1-DEV, created on 2013-06-01 01:49:05
         compiled from "D:\wamp\www\mlpnwrp_tw\public\templates\admin\include_forums.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1677451a95311aa8cc5-80165689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd49bfbfe470cbfbd8c841d7d59f8d51d84af4897' => 
    array (
      0 => 'D:\\wamp\\www\\mlpnwrp_tw\\public\\templates\\admin\\include_forums.tpl',
      1 => 1314738347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1677451a95311aa8cc5-80165689',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_51a95311bb3363_58387440',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a95311bb3363_58387440')) {function content_51a95311bb3363_58387440($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_block_tabset')) include 'lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_preference')) include 'lib/smarty_tiki\\function.preference.php';
if (!is_callable('smarty_function_help')) include 'lib/smarty_tiki\\function.help.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	To add/remove forums, look for "Admin forums" under "Forums" on the application menu, or <a class="rbox-link" href="tiki-admin_forums.php">Click Here</a>.
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<form method="post" action="tiki-admin.php?page=forums">
	<div class="heading input_submit_container" style="text-align: right">
		<input type="submit" value="Change preferences" />
	</div>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"admin_forums")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"admin_forums"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"General Settings")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"General Settings"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		
			<fieldset class="admin">
				<legend>Activate the feature</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_forums','visible'=>"always"),$_smarty_tpl);?>

			</fieldset>
			
			<?php echo smarty_function_preference(array('name'=>'home_forum'),$_smarty_tpl);?>


			<fieldset>
				<legend>
					Features<?php echo smarty_function_help(array('url'=>"Forum"),$_smarty_tpl);?>

				</legend>
				<input type="hidden" name="forumprefs" />
				<?php echo smarty_function_preference(array('name'=>'feature_forum_rankings'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_forum_parse'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_forum_topics_archiving'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_forum_quickjump'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_forum_replyempty'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'forum_reply_notitle'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'forum_comments_no_title_prefix'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'forum_reply_forcetitle'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_forums_allow_thread_titles'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'forum_match_regex'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>Threads</legend>
				<input type="hidden" name="forumthreadprefs" />
				<?php echo smarty_function_preference(array('name'=>'forum_thread_defaults_by_forum'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'forum_thread_user_settings'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="forum_thread_user_settings_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'forum_thread_user_settings_keep'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'forum_thread_user_settings_threshold'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'forum_comments_per_page'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'forum_thread_style'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'forum_thread_sort_mode'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>Searches</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_forums_name_search'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_forums_search'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_forum_content_search'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_forum_content_search_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'feature_forum_local_tiki_search'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_forum_local_search'),$_smarty_tpl);?>

				</div>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"General Settings"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Forums Listing")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Forums Listing"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<input type="hidden" name="forumlistprefs" />
			<?php echo smarty_function_preference(array('name'=>'forums_ordering'),$_smarty_tpl);?>

			Select which items to display when listing forums:
			<?php echo smarty_function_preference(array('name'=>'forum_list_topics'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'forum_list_posts'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'forum_list_ppd'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'forum_list_lastpost'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'forum_list_visits'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'forum_list_desc'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="forum_list_desc_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'forum_list_description_len'),$_smarty_tpl);?>

			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Forums Listing"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"admin_forums"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<div class="heading input_submit_container" style="text-align: center">
		<input type="submit" value="Change preferences" />
	</div>
</form>
<?php }} ?>