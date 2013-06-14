<?php /* Smarty version Smarty-3.1-DEV, created on 2013-05-30 05:56:34
         compiled from "D:\wamp\www\mlpnwrp_tw\public\templates\tiki-ajax_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1092351a6ea12be15e7-67976825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06ba25443658658ac4ac5f39f3b039a4a10895b0' => 
    array (
      0 => 'D:\\wamp\\www\\mlpnwrp_tw\\public\\templates\\tiki-ajax_header.tpl',
      1 => 1302758003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1092351a6ea12be15e7-67976825',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_51a6ea12beba57_64621042',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a6ea12beba57_64621042')) {function content_51a6ea12beba57_64621042($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_ajax']=='y'){?>
<div id="ajaxLoading">Loading...</div>
<div id="ajaxLoadingBG">&nbsp;</div>
<div id="ajaxDebug"></div>
<?php }?>
<?php }} ?>