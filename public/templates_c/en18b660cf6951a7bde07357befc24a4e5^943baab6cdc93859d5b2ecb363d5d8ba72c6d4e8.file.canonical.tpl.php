<?php /* Smarty version Smarty-3.1-DEV, created on 2013-05-27 22:49:47
         compiled from "D:\wamp\www\mlpnwrp_tw\public\templates\canonical.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3049051a3e30b3c7c06-09109272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '943baab6cdc93859d5b2ecb363d5d8ba72c6d4e8' => 
    array (
      0 => 'D:\\wamp\\www\\mlpnwrp_tw\\public\\templates\\canonical.tpl',
      1 => 1347543880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3049051a3e30b3c7c06-09109272',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'mid' => 0,
    'base_url_http' => 0,
    'page' => 0,
    'itemId' => 0,
    'forumId' => 0,
    'comments_parentId' => 0,
    'blogId' => 0,
    'postId' => 0,
    'articleId' => 0,
    'parentId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_51a3e30b469506_55498917',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a3e30b469506_55498917')) {function content_51a3e30b469506_55498917($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_sefurl')) include 'lib/smarty_tiki\\modifier.sefurl.php';
?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_canonical_url']=='y'&&isset($_smarty_tpl->tpl_vars['mid']->value)){?>
	<?php if ($_smarty_tpl->tpl_vars['mid']->value=='tiki-show_page.tpl'||$_smarty_tpl->tpl_vars['mid']->value=='tiki-index_p.tpl'||$_smarty_tpl->tpl_vars['mid']->value=='tiki-show_page_raw.tpl'||$_smarty_tpl->tpl_vars['mid']->value=='tiki-all_languages.tpl'){?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_http']->value;?>
<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value);?>
" />
	<?php }elseif($_smarty_tpl->tpl_vars['mid']->value=='tiki-view_tracker_item.tpl'){?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_http']->value;?>
<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['itemId']->value,'trackeritem');?>
" />
	<?php }elseif($_smarty_tpl->tpl_vars['mid']->value=='tiki-view_forum.tpl'){?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_http']->value;?>
<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['forumId']->value,'forum');?>
" />
	<?php }elseif($_smarty_tpl->tpl_vars['mid']->value=='tiki-view_forum_thread.tpl'){?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_http']->value;?>
<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['comments_parentId']->value,'forumthread');?>
" />
	<?php }elseif($_smarty_tpl->tpl_vars['mid']->value=='tiki-view_blog.tpl'){?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_http']->value;?>
<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['blogId']->value,'blog');?>
" />
	<?php }elseif($_smarty_tpl->tpl_vars['mid']->value=='tiki-view_blog_post.tpl'){?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_http']->value;?>
<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['postId']->value,'blogpost');?>
" />
	<?php }elseif($_smarty_tpl->tpl_vars['mid']->value=='tiki-read_article.tpl'){?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_http']->value;?>
<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['articleId']->value,'article');?>
" />
	<?php }elseif($_smarty_tpl->tpl_vars['mid']->value=='tiki-browse_categories.tpl'){?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_http']->value;?>
<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['parentId']->value,'category');?>
" />
	<?php }?>
<?php }?>
<?php }} ?>