<?php /* Smarty version Smarty-3.1-DEV, created on 2013-05-28 05:21:23
         compiled from "D:\wamp\www\mlpnwrp_tw\public\templates\admin\include_general.tpl" */ ?>
<?php /*%%SmartyHeaderCode:232051a43ed37b23c1-29349984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81796cd31d992d4d7938cbffcaee4936f88d9430' => 
    array (
      0 => 'D:\\wamp\\www\\mlpnwrp_tw\\public\\templates\\admin\\include_general.tpl',
      1 => 1354228849,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '232051a43ed37b23c1-29349984',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error_msg' => 0,
    'lastup' => 0,
    'tiki_version' => 0,
    'svnrev' => 0,
    'db_engine_type' => 0,
    'prefs' => 0,
    'now' => 0,
    'fcnlink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_51a43ed3a6d8e6_44913653',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a43ed3a6d8e6_44913653')) {function content_51a43ed3a6d8e6_44913653($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_block_tabset')) include 'lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_modifier_tiki_long_datetime')) include 'lib/smarty_tiki\\modifier.tiki_long_datetime.php';
if (!is_callable('smarty_function_button')) include 'lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_function_preference')) include 'lib/smarty_tiki\\function.preference.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_help')) include 'lib/smarty_tiki\\function.help.php';
if (!is_callable('smarty_modifier_tiki_long_date')) include 'lib/smarty_tiki\\modifier.tiki_long_date.php';
if (!is_callable('smarty_modifier_tiki_short_date')) include 'lib/smarty_tiki\\modifier.tiki_short_date.php';
if (!is_callable('smarty_modifier_tiki_long_time')) include 'lib/smarty_tiki\\modifier.tiki_long_time.php';
if (!is_callable('smarty_modifier_tiki_short_time')) include 'lib/smarty_tiki\\modifier.tiki_short_time.php';
?>

<form action="tiki-admin.php?page=general" class="admin" method="post">
	<input type="hidden" name="new_prefs" />
	<div class="heading input_submit_container" style="text-align: right;">
		<input type="submit" value="Change preferences" />
	</div>
	<?php if (!empty($_smarty_tpl->tpl_vars['error_msg']->value)){?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'warning','title'=>"Warning",'icon'=>'error')); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Warning",'icon'=>'error'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php echo $_smarty_tpl->tpl_vars['error_msg']->value;?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Warning",'icon'=>'error'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"admin_general")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"admin_general"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"General Preferences")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"General Preferences"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<fieldset>
				<legend>Server Fitness</legend>
				To check if your server meets the requirements for running Tiki please visit <a href="tiki-check.php">Tiki Server Compatibility Check</a>.
			</fieldset>

			<fieldset>
				<legend>Release Check</legend>
				<div class="adminoptionbox">Tiki version:
					<strong>
						<?php if (!empty($_smarty_tpl->tpl_vars['lastup']->value)){?>
							Last update from SVN (<?php echo $_smarty_tpl->tpl_vars['tiki_version']->value;?>
): <?php echo smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['lastup']->value);?>

						<?php }else{ ?>
							<?php echo $_smarty_tpl->tpl_vars['tiki_version']->value;?>

						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['svnrev']->value){?>
							- REV <?php echo $_smarty_tpl->tpl_vars['svnrev']->value;?>

						<?php }?>
					</strong>
					(<?php echo $_smarty_tpl->tpl_vars['db_engine_type']->value;?>
)
					<?php echo smarty_function_button(array('href'=>"tiki-install.php",'_text'=>"Reset or upgrade your database"),$_smarty_tpl);?>

				</div>

				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'feature_version_checks'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'tiki_release_cycle'),$_smarty_tpl);?>

					<div id="feature_version_checks_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'tiki_version_check_frequency'),$_smarty_tpl);?>

					</div>
					<?php echo smarty_function_button(array('href'=>"tiki-admin.php?page=general&amp;forcecheck=1",'_text'=>"Check for updates now."),$_smarty_tpl);?>

				</div>
			</fieldset>

			<fieldset>
				<legend>Site Identity</legend>
				<?php echo smarty_function_preference(array('name'=>'sender_email'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'browsertitle'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'site_title_location'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'site_title_breadcrumb'),$_smarty_tpl);?>


				<div class="adminoptionbox">
					Go to <a href="tiki-admin.php?page=look" title=""><strong>Look & Feel</strong></a> section for additional site related customization preferences.
				</div>
			</fieldset>

			<fieldset>
				<legend>Mail</legend>
				<?php echo smarty_function_preference(array('name'=>'default_mail_charset'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'mail_crlf'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'zend_mail_handler'),$_smarty_tpl);?>

				<div class="adminoptionboxchild zend_mail_handler_childcontainer smtp">
					<?php echo smarty_function_preference(array('name'=>'zend_mail_smtp_server'),$_smarty_tpl);?>


					<?php echo smarty_function_preference(array('name'=>'zend_mail_smtp_auth'),$_smarty_tpl);?>

					<div class="adminoptionboxchild zend_mail_smtp_auth_childcontainer login plain crammd5">
						<p>These values will be stored in plain text in the database:</p>
						<?php echo smarty_function_preference(array('name'=>'zend_mail_smtp_user'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'zend_mail_smtp_pass'),$_smarty_tpl);?>

					</div>

					<?php echo smarty_function_preference(array('name'=>'zend_mail_smtp_port'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'zend_mail_smtp_security'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'zend_mail_smtp_helo'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'zend_mail_queue'),$_smarty_tpl);?>

				</div>
				<div class="adminoptionbox">
					<label for="testMail">Email to send a test mail</label>
					<input type="text" name="testMail" id="testMail" />
				</div>
				<?php echo smarty_function_preference(array('name'=>'email_footer'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Newsletter</legend>
				<?php echo smarty_function_preference(array('name'=>'newsletter_throttle'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="newsletter_throttle_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'newsletter_pause_length'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'newsletter_batch_size'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'newsletter_external_client'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>Logging and Reporting</legend>
				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'error_reporting_level'),$_smarty_tpl);?>

					<div class="adminoptionboxchild">
						<?php echo smarty_function_preference(array('name'=>'error_reporting_adminonly','label'=>"Visible to admin only"),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'smarty_notice_reporting','label'=>"Include Smarty notices"),$_smarty_tpl);?>

					</div>
				</div>
				<?php echo smarty_function_preference(array('name'=>'disableJavascript'),$_smarty_tpl);?>


				<?php echo smarty_function_preference(array('name'=>'log_mail'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'log_sql'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="log_sql_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'log_sql_perf_min'),$_smarty_tpl);?>

				</div>
			</fieldset>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"General Preferences"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"General Settings")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"General Settings"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<fieldset>
				<legend>Server</legend>
				<?php echo smarty_function_preference(array('name'=>'tmpDir'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'use_proxy'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="use_proxy_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'proxy_host'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'proxy_port'),$_smarty_tpl);?>


					<?php echo smarty_function_preference(array('name'=>'proxy_user'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'proxy_pass'),$_smarty_tpl);?>

				</div>

				<?php echo smarty_function_preference(array('name'=>'http_skip_frameset'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_loadbalancer'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>Multi-domain</legend>
				<?php echo smarty_function_preference(array('name'=>'multidomain_active'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'multidomain_switchdomain'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="multidomain_active_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'multidomain_config'),$_smarty_tpl);?>

				</div>
			</fieldset>

			<fieldset>
				<legend>Sessions</legend>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Advanced configuration warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Advanced configuration warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					Note that storing session data in the database is an advanced systems administration option, and is for admins who have comprehensive access and understanding of the database, in order to deal with any unexpected effects.
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Advanced configuration warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<div style="padding:.5em;" align="left">
					<?php echo smarty_function_icon(array('_id'=>'information','style'=>"vertical-align:middle"),$_smarty_tpl);?>
 Changing this feature will immediately log you out when you save this preference. <?php if ($_smarty_tpl->tpl_vars['prefs']->value['forgotPass']!='y'){?>If there is a chance you have forgotten your password, enable "Forget password" feature.<a href="tiki-admin.php?page=features" title="Features">Enable now</a>.<?php }?>
				</div>
				<?php echo smarty_function_preference(array('name'=>'session_storage'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'session_lifetime'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'session_cookie_name'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>Site Terminal</legend>
				<?php echo smarty_function_preference(array('name'=>'site_terminal_active'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="site_terminal_active_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'site_terminal_config'),$_smarty_tpl);?>

				</div>
			</fieldset>

			<fieldset>
				<legend>Contact</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_contact'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_contact_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'contact_anon'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'contact_priority_onoff'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'contact_user'),$_smarty_tpl);?>

				</div>
			</fieldset>

			<fieldset>
				<legend>Stats</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_stats'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_referer_stats'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'count_admin_pvs'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>Print</legend>
				<?php echo smarty_function_preference(array('name'=>'print_pdf_from_url'),$_smarty_tpl);?>

				<div class="adminoptionboxchild print_pdf_from_url_childcontainer webkit">
					<?php echo smarty_function_preference(array('name'=>'print_pdf_webkit_path'),$_smarty_tpl);?>

				</div>
				<div class="adminoptionboxchild print_pdf_from_url_childcontainer webservice">
					<?php echo smarty_function_preference(array('name'=>'print_pdf_webservice_url'),$_smarty_tpl);?>

				</div>
			</fieldset>

			<fieldset>
				<legend>Miscellaneous</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_help'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_help_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'helpurl'),$_smarty_tpl);?>

				</div>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"General Settings"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Navigation")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Navigation"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<fieldset>
				<legend>Menus</legend>
				<em>Create and edit menus </em><a href="tiki-admin_menus.php"><em>here</em></a>
				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'feature_cssmenus'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'menus_item_names_raw_teaser'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="menus_item_names_raw_teaser_childcontainer">	
						<?php echo smarty_function_preference(array('name'=>'menus_item_names_raw'),$_smarty_tpl);?>

					</div>
					<?php echo smarty_function_preference(array('name'=>'feature_userlevels'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_featuredLinks'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_menusfolderstyle'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'menus_items_icons'),$_smarty_tpl);?>

					<div id="menus_items_icons_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'menus_items_icons_path'),$_smarty_tpl);?>

					</div>
				</div>
			</fieldset>

			<fieldset>
				<legend>Home Page</legend>
				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'useGroupHome'),$_smarty_tpl);?>

					<div id="useGroupHome_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'limitedGoGroupHome'),$_smarty_tpl);?>

					</div>
				</div>

				<?php echo smarty_function_preference(array('name'=>'tikiIndex','defaul'=>$_smarty_tpl->tpl_vars['prefs']->value['site_tikiIndex']),$_smarty_tpl);?>


				<?php echo smarty_function_preference(array('name'=>'useUrlIndex'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="useUrlIndex_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'urlIndex'),$_smarty_tpl);?>

				</div>
				
				<?php echo smarty_function_preference(array('name'=>'wikiHomePage'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'home_blog'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'home_forum'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'home_file_gallery'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'home_gallery'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_custom_home'),$_smarty_tpl);?>

				
			</fieldset>

			<fieldset>
				<legend>Redirects</legend>
				<?php echo smarty_function_preference(array('name'=>'tiki_domain_prefix'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'tiki_domain_redirects'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_redirect_on_error'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_1like_redirection'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'permission_denied_login_box','mode'=>'invert'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="permission_denied_login_box_childcontainer">
					or
					<br />
					<?php echo smarty_function_preference(array('name'=>'permission_denied_url'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'url_anonymous_page_not_found'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'url_after_validation'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_alternate_registration_page'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>User</legend>
				<?php echo smarty_function_preference(array('name'=>'urlOnUsername'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>Site Access</legend>
				<?php echo smarty_function_preference(array('name'=>'site_closed'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="site_closed_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'site_closed_msg'),$_smarty_tpl);?>

				</div>

				<?php echo smarty_function_preference(array('name'=>'use_load_threshold'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="use_load_threshold_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'load_threshold'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'site_busy_msg'),$_smarty_tpl);?>

				</div>
			</fieldset>

			<fieldset>
				<legend class="heading">Breadcrumbs</legend>

				<?php echo smarty_function_preference(array('name'=>'feature_breadcrumbs'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_breadcrumbs_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'feature_siteloclabel'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_siteloc'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_sitetitle'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_sitedesc'),$_smarty_tpl);?>

				</div>
			</fieldset>

			<fieldset>
				<legend class="heading">Namespace</legend>

				<?php echo smarty_function_preference(array('name'=>'namespace_enabled'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="namespace_enabled_childcontainer">
					The namespace separator should not
					<ul>
					<li>contain any of the characters not allowed in wiki page names, typically /?#[]@$&+;=&lt;&gt;</li>
					<li>conflict with wiki syntax tagging</li>
					</ul>
					<?php echo smarty_function_preference(array('name'=>'namespace_separator'),$_smarty_tpl);?>

					<fieldset>
						<legend>Settings that may be affected by the namespace separator<?php echo smarty_function_help(array('url'=>"Watch"),$_smarty_tpl);?>
</legend>

						To use :: as a separator, you should also use ::: as the wiki center tag syntax.<br/>
						Note: a conversion of :: to ::: for existing pages must be done manually
						<?php echo smarty_function_preference(array('name'=>'feature_use_three_colon_centertag'),$_smarty_tpl);?>


						If the page name display stripper conflicts with the namespace separator, the namespace is used and the page name display is not stripped.
						<?php echo smarty_function_preference(array('name'=>'wiki_pagename_strip'),$_smarty_tpl);?>

					</fieldset>
				</div>
			</fieldset>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Navigation"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Date and Time")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Date and Time"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php echo smarty_function_preference(array('name'=>'server_timezone'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'users_prefs_display_timezone'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'long_date_format'),$_smarty_tpl);?>

			<em>Sample: <?php echo smarty_modifier_tiki_long_date($_smarty_tpl->tpl_vars['now']->value);?>
</em>

			<?php echo smarty_function_preference(array('name'=>'short_date_format'),$_smarty_tpl);?>

			<em>Sample: <?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['now']->value);?>
</em>

			<?php echo smarty_function_preference(array('name'=>'long_time_format'),$_smarty_tpl);?>

			<em>Sample: <?php echo smarty_modifier_tiki_long_time($_smarty_tpl->tpl_vars['now']->value);?>
</em>

			<?php echo smarty_function_preference(array('name'=>'short_time_format'),$_smarty_tpl);?>

			<em>Sample: <?php echo smarty_modifier_tiki_short_time($_smarty_tpl->tpl_vars['now']->value);?>
</em>

			<?php echo smarty_function_preference(array('name'=>'display_field_order'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'users_prefs_display_12hr_clock'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'tiki_same_day_time_only'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_now'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_countdown'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_timesheet'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_convene'),$_smarty_tpl);?>


			<div class="adminoptionbox">
				<?php $_smarty_tpl->tpl_vars["fcnlink"] = new Smarty_variable("http://www.php.net/manual/en/function.strftime.php", null, 0);?>
				<a class="link" target="strftime" href="<?php echo $_smarty_tpl->tpl_vars['fcnlink']->value;?>
">Date and Time Format Help</a><?php echo smarty_function_help(array('url'=>"Date+and+Time"),$_smarty_tpl);?>

			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Date and Time"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Change admin password")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Change admin password"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div style="padding:1em;" align="left">
				<p>Change the <strong>Admin</strong> password: <a href="tiki-adminusers.php?find=admin">User administration</a></p>
			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Change admin password"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"admin_general"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<div class="heading input_submit_container" style="text-align: center;">
		<input type="submit" value="Change preferences" />
	</div>
</form>
<?php }} ?>