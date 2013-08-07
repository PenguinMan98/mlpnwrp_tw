<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: tiki-login.php 44443 2013-01-05 20:30:09Z changi67 $

$inputConfiguration = array(
	array( 'staticKeyFilters' => array(
		'user' => 'text',
		'username' => 'text',
		'pass' => 'text',
	) )
);

$bypass_siteclose_check = 'y';

if (empty($_POST['user'])) {
	unset($_POST['user']);	// $_POST['user'] is not allowed to be empty if set in tiki-setup.php
}
require_once ('tiki-setup.php');
$login_url_params = '';

$smarty->assign('errortype', 'login'); // to avoid any redirection to the login box if error
// Alert user if cookies are switched off
if (ini_get('session.use_cookies') == 1 && !isset($_COOKIE[ session_name() ]) && $prefs['session_silent'] != 'y') {
	$smarty->assign('msg', tra('You have to enable cookies to be able to login to this site'));
	$smarty->display('error.tpl');
	exit;
}

// Redirect to HTTPS if we are not in HTTPS but we require HTTPS login
if (!$https_mode && $prefs['https_login'] == 'required') {
echo __FILE__ . " on line " . __LINE__ . "<br>";

	header('Location: ' . $base_url_https . $prefs['login_url'] . $login_url_params);
	exit;
}
// Redirect to HTTP if we are in HTTPS but we doesn't allow HTTPS login
if ($https_mode && $prefs['https_login'] == 'disabled') {
echo __FILE__ . " on line " . __LINE__ . "<br>";

	header('Location: ' . $base_url_http . $prefs['login_url'] . $login_url_params);
	exit;
}

if ( $prefs['session_silent'] == 'y' ) {
echo __FILE__ . " on line " . __LINE__ . "<br>";

	session_start();
}

// Remember where user is logging in from and send them back later; using session variable for those of us who use WebISO services
// Note that login from will always be a complete URL (http://...)
if (!isset($_SESSION['loginfrom']) && isset($_SERVER['HTTP_REFERER']) && !preg_match('|/login|', $_SERVER['HTTP_REFERER']) && !preg_match('|logout|', $_SERVER['HTTP_REFERER'])) {
	$_SESSION['loginfrom'] = $_SERVER['HTTP_REFERER'];
	if (!preg_match('/^http/', $_SESSION['loginfrom'])) {
		if ($_SESSION['loginfrom'] {
			0
		} == '/') $_SESSION['loginfrom'] = $url_scheme . '://' . $url_host . (($url_port != '') ? ":$url_port" : '') . $_SESSION['loginfrom'];
		else $_SESSION['loginfrom'] = $base_url . $_SESSION['loginfrom'];
	}
}
if ($tiki_p_admin == 'y') {
	if (isset($_REQUEST['su'])) {
		if ( empty( $_REQUEST['username'] ) ) {
			$smarty->assign('msg', tra('Username field cannot be empty. Please go back and try again.'));
			$smarty->display('error.tpl');
			exit;
		}
		if ($userlib->user_exists($_REQUEST['username'])) {
			$username = $userlib->get_user_real_case($_REQUEST['username']);
			$_SESSION[$user_cookie_site] = $username;
		}
		header('location: ' . $_SESSION['loginfrom']);
		// Unset session variable for the next su
		unset($_SESSION['loginfrom']);
		exit;
	}
}
$requestedUser = isset($_REQUEST['user']) ? $_REQUEST['user'] : false;
$pass = isset($_REQUEST['pass']) ? $_REQUEST['pass'] : false;
$challenge = isset($_REQUEST['challenge']) ? $_REQUEST['challenge'] : false;
$response = isset($_REQUEST['response']) ? $_REQUEST['response'] : false;
$isvalid = false;
$isdue = false;
$response = new stdClass();
// admin is always local
if ($requestedUser == 'admin') $prefs['feature_intertiki'] = 'n';

// Verify user is valid
$ret = $userlib->validate_user($requestedUser, $pass, $challenge, $response);
if (count($ret) == 3) {
	$ret[] = null;
}
//exit();
list($isvalid, $requestedUser, $error, $method) = $ret;
// If the password is valid but it is due then force the user to change the password by
// sending the user to the new password change screen without letting him use tiki
// The user must re-enter the old password so no security risk here
if (!$isvalid && $error === ACCOUNT_WAITING_USER) {
	if ($requestedUser != 'admin') { // admin has not necessarely an email
		if ($userlib->is_email_due($requestedUser, 'email')) {
			$userlib->send_confirm_email($requestedUser);
			$userlib->change_user_waiting($requestedUser, 'u');
			$user = '';
			//$smarty->assign('user', '');
			$msg = $smarty->fetch('tiki-login_confirm_email.tpl');
			$smarty->assign_by_ref('msg', explode("\n", $msg));
			//$smarty->assign('mid', 'tiki-information.tpl');
			//$smarty->display("tiki.tpl");
			die;
		}
	}
} else if ($isvalid) {
	$isdue = $userlib->is_due($requestedUser, $method);
	$user = $requestedUser;
}
if ($isvalid) {
	$response->success = true;
	if ($prefs['feature_invite'] == 'y') {
		// tiki-invite, this part is just here to add groups to users which just registered after received an
		// invitation via tiki-invite.php and set the redirect to wiki page if required by the invitation
		$res = $tikilib->query("SELECT `id`,`id_invite` FROM `tiki_invited` WHERE `used_on_user`=? AND used=?", array($user, "registered"));
		$inviterow=$res->fetchRow();
		if (is_array($inviterow)) {
			$id_invited=$inviterow['id'];
			$id_invite=$inviterow['id_invite'];
			// set groups

			$groups = $tikilib->getOne("SELECT `groups` FROM `tiki_invite` WHERE `id` = ?", array((int)$id_invite));
			$groups = explode(',', $groups);
			foreach ($groups as $group) {
				$userlib->assign_user_to_group($user, trim($group));
			}
			$tikilib->query("UPDATE `tiki_invited` SET `used`=? WHERE id_invite=?", array("logged", (int)$id_invited));

			// set wiki page required by invitation
			if (!empty($inviterow['wikipageafter'])) $_REQUEST['page']=$inviterow['wikipageafter'];
		}
	}

	if ($isdue) {
		// Redirect the user to the screen where he must change his password.
		// Note that the user is not logged in he's just validated to change his password
		// The user must re-enter his old password so no security risk involved
		$url = 'tiki-change_password.php?user=' . urlencode($user);
	} else {
		// User is valid and not due to change pass.. start session
		$userlib->update_expired_groups();
		$_SESSION[$user_cookie_site] = $user;
		if (isset($_SESSION['openid_url'])) $userlib->assign_openid($user, $_SESSION['openid_url']);
		$url = $_SESSION['loginfrom'];
		$logslib->add_log('login', 'logged from ' . $url);
		// Special '?page=...' case. Accept only some values to avoid security problems
		if ( isset($_REQUEST['page']) and $_REQUEST['page'] === 'tikiIndex') {
			$url = ${$_REQUEST['page']};
		} else {
			if (!empty($_REQUEST['url'])) {
				global $cachelib; include_once('lib/cache/cachelib.php');
				preg_match('/(.*)\?cache=(.*)/', $_REQUEST['url'], $matches);
				if (!empty($matches[2]) && $cdata = $cachelib->getCached($matches[2], 'edit')) {
					if (!empty($matches[1])) {
						$url = $matches[1].'?'.$cdata;
					}
					$cachelib->invalidate($matches[2], 'edit');
				}
			} elseif ($prefs['useGroupHome'] == 'y') { // Go to the group page ?
				if ($prefs['limitedGoGroupHome'] == 'y') {
					// Handle spaces (that could be written as '%20' in referer, but are generated as '+' with urlencode)
					$url = str_replace('%20', '+', $url);
					$url_vars = parse_url($url);
					$url_path = $url_vars['path'];
					if ($url_vars['query'] != '') $url_path.= '?' . $url_vars['query'];
					// Get a valid URL for anonymous group homepage
					// It has to be rewritten when the following two syntaxes are used :
					//  - http:tiki-something.php => tiki-something.php
					//  - pageName => tiki-index.php?page=pageName
					$anonymous_homepage = $userlib->get_group_home('Anonymous');
					if (!preg_match('#^https?://#', $anonymous_homepage)) {
						if (substr($anonymous_homepage, 0, 5) == 'http:') {
							$anonymous_homepage = substr($anonymous_homepage, 5);
						} else {
							$anonymous_homepage = 'tiki-index.php?page=' . urlencode($anonymous_homepage);
						}
					}
					// Determine the complete tikiIndex URL for not logged users
					// when tikiIndex's page has not been explicitely specified
					//   (this only handles wiki default page for the moment)
					if (preg_match('/tiki-index.php$/', $prefs['site_tikiIndex']) || preg_match('/tiki-index.php$/', $anonymous_homepage)) {
						$tikiIndex_full = 'tiki-index.php?page=' . urlencode($prefs['site_wikiHomePage']);
					} else {
						$tikiIndex_full = '';
					}
				}
				// Go to the group page instead of the referer url if we are in one of those cases :
				//   - pref 'Go to group homepage only if login from default homepage' (limitedGoGroupHome) is disabled,
				//   - referer url (e.g. http://example.com/tiki/tiki-index.php?page=Homepage ) is the homepage (tikiIndex),
				//   - referer url complete path ( e.g. /tiki/tiki-index.php?page=Homepage ) is the homepage,
				//   - referer url relative path ( e.g. tiki-index.php?page=Homepage ) is the homepage
				//   - referer url SEF page ( e.g. /tiki/Homepage ) is the homepage
				//   - one of the three cases listed above, but compared to anonymous page instead of global homepage
				//   - first login after registration
				//   - last case ($tikiIndex_full != '') :
				//       wiki homepage could have been saved as 'tiki-index.php' instead of 'tiki-index.php?page=Homepage'.
				//       ... so we also need to check against : homepage + '?page=' + default wiki pagename
				//
				include_once('tiki-sefurl.php');
				if ($url == '' || preg_match('/(tiki-register|tiki-login_validate|tiki-login_scr)\.php/', $url) || $prefs['limitedGoGroupHome'] == 'n' || $url == $prefs['site_tikiIndex'] || $url_path == $prefs['site_tikiIndex'] || basename($url_path) == $prefs['site_tikiIndex'] || ($anonymous_homepage != '' && ($url == $anonymous_homepage || $url_path == $anonymous_homepage || basename($url_path) == $anonymous_homepage)) || filter_out_sefurl($anonymous_homepage) == basename($url_path) || ($tikiIndex_full != '' && basename($url_path) == $tikiIndex_full)) {
					$groupHome = $userlib->get_user_default_homepage($user);
					if ($groupHome != '') {
						$url = (preg_match('/^(\/|https?:)/', $groupHome)) ? $groupHome : filter_out_sefurl('tiki-index.php?page=' . urlencode($groupHome));
					}
				}
			}
			// Unset session variable in case user su's
			unset($_SESSION['loginfrom']);
			// No sense in sending user to registration page or no page at all
			// This happens if the user has just registered and it's first login
			if ($url == '' || preg_match('/(tiki-register|tiki-login_validate|tiki-login_scr)\.php/', $url)) $url = $prefs['tikiIndex'];
			// Now if the remember me feature is on and the user checked the rememberme checkbox then ...
			if ($prefs['rememberme'] != 'disabled' && isset($_REQUEST['rme']) && $_REQUEST['rme'] == 'on') {
				$userInfo = $userlib->get_user_info($user);
				$userId = $userInfo['userId'];
				$secret = $userlib->create_user_cookie($userId);
				setcookie($user_cookie_site, $secret . '.' . $userId, $tikilib->now + $prefs['remembertime'], $prefs['cookie_path'], $prefs['cookie_domain']);
				$logslib->add_log('login', 'got a cookie for ' . $prefs['remembertime'] . ' seconds');
			}
		}
	}
	
	$userInfo = $userlib->get_user_info($user);
	if(empty($_SESSION['u_info']['login'])){
		// get the user info and set up the session
		$_SESSION['u_info']['login'] = $userInfo['login'];
		$_SESSION['u_info']['id'] = $userInfo['userId'];
		$_SESSION['u_info']['group'] = $userInfo['default_group'];
	}
	// then bootstrap
	require_once '../application/Core/Bootstrap.php';
	$_bootstrap = Bootstrap::getInstance();
	
	$ucProvider = new Model_Data_UserChastisementProvider();
	if($ucProvider->is_banned($userInfo['userId'])){
		session_destroy(); // log them ALL the way out
		session_start();
		$response->success = false;
		$response->error = "Your player account has been banned.";
		die(json_encode($response));
	}
	$duration = $ucProvider->is_kicked($userInfo['userId']);
	if($duration){
		session_destroy(); // log them ALL the way out
		session_start();
		$response->success = false;
		$response->error = "Your player account has been kicked for $duration minutes.";
		die(json_encode($response));
	}

	
	// then get the characters
	$characterHelper = new Model_Data_CharacterProvider();
	$characterList = $characterHelper->getAllByUserId($userInfo['userId']);
	$response->characterList = array();
	foreach($characterList as $char){
		$charArray = $char->getAsArray();
		unset($charArray['bio']);
		unset($charArray['player_notes']);
		unset($charArray['player_private_notes']);
		$response->characterList[] = $charArray;
	}
	$_SESSION[$userInfo['login']]['characters'] = $response->characterList;
	
} else {	// if ($isvalid) - invalid
	$response->success = false;
	// check if site is closed
	if ($prefs['site_closed'] === 'y') {
		unset($bypass_siteclose_check);
		include 'lib/setup/site_closed.php';
	}

	if (isset($_REQUEST['url'])) {
		$smarty->assign('url', $_REQUEST['url']);
	}
	$module_params['show_forgot'] = ($prefs['forgotPass'] == 'y' && $prefs['change_password'] == 'y')? 'y': 'n';
	$module_params['show_register'] = ($prefs['allowRegister'] === 'y')? 'y': 'n';
	$smarty->assign('module_params', $module_params);
	if ($error == PASSWORD_INCORRECT && ($prefs['unsuccessful_logins'] >= 0 || $prefs['unsuccessful_logins_invalid'] >= 0)) {
		$nb_bad_logins = $userlib->unsuccessful_logins($requestedUser);
		if ($prefs['unsuccessful_logins_invalid'] > 0 && ($nb_bad_logins >= $prefs['unsuccessful_logins_invalid'] - 1)) {
			$info = $userlib->get_user_info($requestedUser);
			$userlib->change_user_waiting($requestedUser, 'a');
			$msg = sprintf(tra('More than %d unsuccessful login attempts have been made.'), $prefs['unsuccessful_logins_invalid']);
			$msg .= ' '.tra('Your account has been suspended.').' '.tra('A site administrator will reactivate it');
			include_once ('lib/webmail/tikimaillib.php');
			$mail = new TikiMail();
			$smarty->assign('msg', $msg);
			$smarty->assign('mail_user', $requestedUser);
			$foo = parse_url($_SERVER['REQUEST_URI']);
			$mail_machine = $tikilib->httpPrefix(true).str_replace('tiki-login.php', '', $foo['path']);
			$smarty->assign('mail_machine', $mail_machine);
			$mail->setText($smarty->fetch('mail/unsuccessful_logins_suspend.tpl'));
			$mail->setSubject($smarty->fetch('mail/unsuccessful_logins_suspend_subject.tpl'));
			$emails = !empty($prefs['validator_emails'])?preg_split('/,/', $prefs['validator_emails']): (!empty($prefs['sender_email'])? array($prefs['sender_email']): '');
			if (!$mail->send(array($info['email'])) || !$mail->send($emails)) {
				$smarty->assign('msg', tra("The mail can't be sent. Contact the administrator"));
				//$smarty->display("error.tpl");
				die;
			}
			$smarty->assign('mid', 'tiki-information.tpl');
			//$smarty->display('tiki.tpl');
			die;
		} elseif ($prefs['unsuccessful_logins'] > 0 && ($nb_bad_logins >= $prefs['unsuccessful_logins'] - 1)) {
			$msg = sprintf(tra('More than %d unsuccessful login attempts have been made.'), $prefs['unsuccessful_logins']);
			$smarty->assign('msg', $msg);
			if ($userlib->send_confirm_email($requestedUser, 'unsuccessful_logins')) {
				$smarty->assign('msg', $msg . ' ' . tra('An email has been sent to you with the instructions to follow.'));
			}
			$show_history_back_link = 'y';
			$smarty->assign_by_ref('show_history_back_link', $show_history_back_link);
			$smarty->assign('mid', 'tiki-information.tpl');
			//$smarty->display("tiki.tpl");
			die;
		}
		$userlib->set_unsuccessful_logins($requestedUser, $nb_bad_logins + 1);
	}
	switch ($error) {
		case PASSWORD_INCORRECT:
		case USER_NOT_FOUND:
			$smarty->assign('error_login', $error);
			$smarty->assign('mid', 'tiki-login.tpl');
			$smarty->assign('error_user', $_REQUEST["user"]);
			//$smarty->display('tiki.tpl');
			$response->error = "Invalid username or password";
			//exit;
			break;

		case ACCOUNT_DISABLED:
			$error = tra('Account requires administrator approval');
			$response->error = "This account has been suspended.  Please email PenguinMan98@usa.net for more information.";
    		break;

		case ACCOUNT_WAITING_USER:
			$error = tra('You did not validate your account');
			$extraButton = array('href'=>'tiki-send_mail.php?user='. urlencode($_REQUEST['user']), 'text'=>tra('Resend'), 'comment'=>tra('You should have received an email. Check your mailbox and your spam box. Otherwise click on the button to resend the email'));
			$response->error = "This account has not yet been properly validated.  Please see your email for the validation link.";
			break;
 
		case USER_AMBIGOUS:
			$error = tra('You must use the right case for your user name');
			$response->error = 'You must use the right case for your user name';
    		break;

		case USER_NOT_VALIDATED:
			$error = tra('You are not yet validated');
			$response->error = 'You are not yet validated';
    		break;

		default:
			$error = tra('Invalid username or password');
			$response->error = 'Invalid username or password';
	}
	if (isset($extraButton)) $smarty->assign_by_ref('extraButton', $extraButton);
	$smarty->assign('msg', $error);
	//$smarty->display('error.tpl');
	echo json_encode($response);
	exit;
}

if ( isset($user) and $prefs['feature_score'] == 'y' ) {
	$tikilib->score_event($user, 'login');
}
// RFC 2616 defines that the 'Location' HTTP headerconsists of an absolute URI
if ( !preg_match('/^https?\:/i', $url) ) {
	$url = (preg_match('/^\//', $url) ? $url_scheme . '://' . $url_host . (($url_port != '') ? ":$url_port" : '') : $base_url) . $url;
}
// Force HTTP mode if needed
if ($stay_in_ssl_mode != 'y' || !$https_mode) {
	$url = str_replace('https://', 'http://', $url);
}
// Force Redirection to HTTPS mode of original URL if needed
if ($stay_in_ssl_mode == 'y' && $https_mode) {
	$url = str_replace('http://', 'https://', $url);
}
if (defined('SID') && SID != '')
$url.= ((strpos($url, '?') === false) ? '?' : '&') . SID;

/*echo "end<pre>";
print_r($userInfo);
print_r($_SESSION);
echo "</pre>";
die("My die");*/

//header('Location: ' . $url);
echo json_encode($response);
exit;
