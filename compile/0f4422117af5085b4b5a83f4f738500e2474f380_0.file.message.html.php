<?php
/* Smarty version 3.1.30, created on 2017-03-06 12:14:51
  from "F:\wamp\www\w1610\2-28mvc\template\admin\message.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bd44ab254521_73436649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f4422117af5085b4b5a83f4f738500e2474f380' => 
    array (
      0 => 'F:\\wamp\\www\\w1610\\2-28mvc\\template\\admin\\message.html',
      1 => 1488798876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bd44ab254521_73436649 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/login.delect.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/login.js"><?php echo '</script'; ?>
>
	<div class="box">
		<div class="title">提示信息</div>
		<div class="con">
			<p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
			<span>5</span>秒后自动返回
			<p>如果不跳转，<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">点击此处</a></p>
		</div>
	</div>
</head>
</html><?php }
}
