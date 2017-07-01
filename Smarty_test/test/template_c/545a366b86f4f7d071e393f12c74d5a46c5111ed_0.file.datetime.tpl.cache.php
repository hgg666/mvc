<?php
/* Smarty version 3.1.31, created on 2017-06-30 12:59:21
  from "E:\wamp\wamp\www\Smarty_test\test\tpl\datetime.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59562f090fc064_86968933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '545a366b86f4f7d071e393f12c74d5a46c5111ed' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\Smarty_test\\test\\tpl\\datetime.tpl',
      1 => 1498820354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59562f090fc064_86968933 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_test')) require_once 'E:\\wamp\\wamp\\www\\Smarty_test\\smarty\\plugins\\modifier.test.php';
$_smarty_tpl->compiled->nocache_hash = '1251659562f0900f827_73501087';
echo smarty_modifier_test($_smarty_tpl->tpl_vars['time']->value,'Y-m-d H:i:s');
}
}
