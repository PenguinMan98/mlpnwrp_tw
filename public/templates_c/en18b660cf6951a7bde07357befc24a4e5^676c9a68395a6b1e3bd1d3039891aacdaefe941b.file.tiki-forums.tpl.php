<?php /* Smarty version Smarty-3.1-DEV, created on 2013-06-01 01:48:58
         compiled from "D:\wamp\www\mlpnwrp_tw\public\templates\tiki-forums.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2686051a9530a3afa22-19548799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '676c9a68395a6b1e3bd1d3039891aacdaefe941b' => 
    array (
      0 => 'D:\\wamp\\www\\mlpnwrp_tw\\public\\templates\\tiki-forums.tpl',
      1 => 1354565329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2686051a9530a3afa22-19548799',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tiki_p_admin_forum' => 0,
    'channels' => 0,
    'find' => 0,
    'prefs' => 0,
    'sort_mode' => 0,
    'numbercol' => 0,
    'section' => 0,
    'section_old' => 0,
    'tiki_p_admin' => 0,
    'cant' => 0,
    'offset' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_51a9530a6a7ab0_68002989',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a9530a6a7ab0_68002989')) {function content_51a9530a6a7ab0_68002989($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_button')) include 'lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_block_self_link')) include 'lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_function_cycle')) include 'D:\\wamp\\www\\mlpnwrp_tw\\public\\lib\\smarty\\libs\\plugins\\function.cycle.php';
if (!is_callable('smarty_block_wiki')) include 'lib/smarty_tiki\\block.wiki.php';
if (!is_callable('smarty_modifier_truncate')) include 'lib/smarty_tiki\\modifier.truncate.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'lib/smarty_tiki\\modifier.tiki_short_datetime.php';
if (!is_callable('smarty_modifier_username')) include 'lib/smarty_tiki\\modifier.username.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_norecords')) include 'lib/smarty_tiki\\function.norecords.php';
if (!is_callable('smarty_block_pagination_links')) include 'lib/smarty_tiki\\block.pagination_links.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"forums",'admpage'=>"forums")); $_block_repeat=true; echo smarty_block_title(array('help'=>"forums",'admpage'=>"forums"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Forums<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"forums",'admpage'=>"forums"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_forum']->value=='y'){?>
  <div class="navbar">
		<?php echo smarty_function_button(array('href'=>"tiki-admin_forums.php",'_text'=>"Admin forums"),$_smarty_tpl);?>

  </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['channels']->value||($_smarty_tpl->tpl_vars['find']->value!='')){?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forums_search']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['feature_forums_name_search']=='y'){?>
		<table class="findtable">
			<tr>
				<td class="findtable">Find</td>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forums_name_search']=='y'){?>
					<td class="findtable">
						<form method="get" action="tiki-forums.php">
							<input type="text" name="find" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['find']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
							<input type="submit" value="Search by name" name="search" />
							<input type="hidden" name="sort_mode" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort_mode']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
						</form>
					</td>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forums_search']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_search']=='y'){?>
					<td>
						<form class="forms" method="get" action="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search_fulltext']!='y'){?>tiki-searchindex.php<?php }else{ ?>tiki-searchresults.php<?php }?>">
							<input name="highlight" size="30" type="text" />
							<input type="hidden" name="where" value="forums" />
							<input type="hidden" name="filter~type" value="forum post"/>
							<input type="submit" class="wikiaction" name="search" value="Search in content"/>
						</form>
					</td>
				<?php }?>
			</tr>
		</table>
	<?php }?>
<?php }?>
<table class="normal">
	<tr>
		<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable(1, null, 0);?>
		<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'name')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'name'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'name'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
		 
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['forum_list_topics']=='y'){?>
			<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
			<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'threads')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'threads'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Topics<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'threads'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
		<?php }?>	

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['forum_list_posts']=='y'){?>
			<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
			<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'comments')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'comments'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Posts<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'comments'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
		<?php }?>	

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['forum_list_ppd']=='y'){?>
			<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
			<th>PPD</th>
		<?php }?>	

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['forum_list_lastpost']=='y'){?>	
			<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
			<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'lastPost')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'lastPost'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Last Post<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'lastPost'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['forum_list_visits']=='y'){?>
			<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
			<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'hits')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'hits'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Visits<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'hits'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
		<?php }?>	
		
		<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
		<th>Actions</th>
	</tr>

	<?php $_smarty_tpl->tpl_vars['section_old'] = new Smarty_variable('', null, 0);?>
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['channels']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total']);
?>
		<?php echo smarty_function_cycle(array('values'=>"odd,even",'print'=>false),$_smarty_tpl);?>

		<?php $_smarty_tpl->tpl_vars['section'] = new Smarty_variable($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['section'], null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['section']->value!=$_smarty_tpl->tpl_vars['section_old']->value){?>
			<?php $_smarty_tpl->tpl_vars['section_old'] = new Smarty_variable($_smarty_tpl->tpl_vars['section']->value, null, 0);?>
			<?php if (($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_forum']->value=='y')){?> 
				<tr>
					<td class="third" colspan="7"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value, ENT_QUOTES, 'UTF-8', true);?>
</td>
				</tr>
			<?php }else{ ?>
				<tr>
					<td class="third" colspan="6"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value, ENT_QUOTES, 'UTF-8', true);?>
</td>
				</tr>
			<?php }?>
		<?php }?>

		<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
">
			<td class="text">
				<span style="float:left">
					<?php if ((isset($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['user']['index']]['individual'])&&$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['individual']=='n')||($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')||($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['individual_tiki_p_forum_read']=='y')){?>
						<a class="forumname" href="tiki-view_forum.php?forumId=<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['forumId'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
					<?php }else{ ?>
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['name'], ENT_QUOTES, 'UTF-8', true);?>

					<?php }?>
				</span>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['forum_list_desc']=='y'){?>
					<br />
					<div class="subcomment">
						<?php $_smarty_tpl->_capture_stack[0][] = array("parsedDesc", null, null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('wiki', array()); $_block_repeat=true; echo smarty_block_wiki(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['description'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wiki(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
						<?php if (strlen(Smarty::$_smarty_vars['capture']['parsedDesc'])<$_smarty_tpl->tpl_vars['prefs']->value['forum_list_description_len']){?>
							<?php echo Smarty::$_smarty_vars['capture']['parsedDesc'];?>

						<?php }else{ ?>
							<?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', Smarty::$_smarty_vars['capture']['parsedDesc']),$_smarty_tpl->tpl_vars['prefs']->value['forum_list_description_len'],"...",true);?>

						<?php }?>
					</div>
				<?php }?>
			</td>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['forum_list_topics']=='y'){?>
				<td class="integer"><?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['threads'];?>
</td>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['forum_list_posts']=='y'){?>
				<td class="integer"><?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['comments'];?>
</td>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['forum_list_ppd']=='y'){?>
				<td class="integer"><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['posts_per_day']);?>
</td>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['forum_list_lastpost']=='y'){?>	
				<td class="text">
					<?php if (isset($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['user']['index']]['lastPost'])){?>
						<?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['lastPost']);?>
<br />
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['forum_reply_notitle']!='y'){?><small><i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['lastPostData']['title'], ENT_QUOTES, 'UTF-8', true);?>
</i><?php }?>
						by <?php echo smarty_modifier_username($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['lastPostData']['userName']);?>
</small>
					<?php }?>
				</td>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['forum_list_visits']=='y'){?>
				<td class="integer"><?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['hits'];?>
</td>
			<?php }?>	

			<td class="action">
				<a class="admlink" title="View" href="tiki-view_forum.php?forumId=<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['forumId'];?>
"><?php echo smarty_function_icon(array('_id'=>'table','alt'=>"View"),$_smarty_tpl);?>
</a>
				<?php if (($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')||(($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['individual']=='n')&&($_smarty_tpl->tpl_vars['tiki_p_admin_forum']->value=='y'))||($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['individual_tiki_p_admin_forum']=='y')){?>
					<a class="admlink" title="Configure Forum" href="tiki-admin_forums.php?forumId=<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['forumId'];?>
&amp;cookietab=2"><?php echo smarty_function_icon(array('_id'=>'page_edit'),$_smarty_tpl);?>
</a>
				<?php }?>
			</td>
		</tr>
	<?php endfor; else: ?>
		<?php echo smarty_function_norecords(array('_colspan'=>$_smarty_tpl->tpl_vars['numbercol']->value),$_smarty_tpl);?>

	<?php endif; ?>
</table>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>