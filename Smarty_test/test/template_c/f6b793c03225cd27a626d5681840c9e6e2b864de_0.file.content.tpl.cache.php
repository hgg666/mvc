<?php
/* Smarty version 3.1.31, created on 2017-06-30 13:10:01
  from "E:\wamp\wamp\www\Smarty_test\test\tpl\content.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_595631895c7077_21334107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6b793c03225cd27a626d5681840c9e6e2b864de' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\Smarty_test\\test\\tpl\\content.tpl',
      1 => 1498820997,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595631895c7077_21334107 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_test2')) require_once 'E:\\wamp\\wamp\\www\\Smarty_test\\smarty\\plugins\\block.test2.php';
$_smarty_tpl->compiled->nocache_hash = '31053595631894c84d6_77793064';
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('test2', array('replace'=>'true','maxnum'=>29));
$_block_repeat=true;
echo smarty_block_test2(array('replace'=>'true','maxnum'=>29), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

<?php echo $_smarty_tpl->tpl_vars['str']->value;?>

<?php $_block_repeat=false;
echo smarty_block_test2(array('replace'=>'true','maxnum'=>29), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
