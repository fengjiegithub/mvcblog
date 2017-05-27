<?php
/* Smarty version 3.1.30, created on 2017-03-12 03:50:41
  from "F:\wamp\www\w1610\2-28mvc\template\index\notice.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c4b78175c1d7_90228410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d06263b18839fc5ed584cd3a0573c7d51ff9bb6' => 
    array (
      0 => 'F:\\wamp\\www\\w1610\\2-28mvc\\template\\index\\notice.html',
      1 => 1489257237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c4b78175c1d7_90228410 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
	.notice-login{
		padding: 30px 0;
		width: 200px;
		height: 30px;
		background: #ccc;
		border-radius:10px ;
		text-align: center;
		line-height: 30px;
		position: fixed;
		left: 0;
		top: 40%;
		right: 0;
		bottom: 40%;
		margin: auto;
		display: none;
	}
</style>
	<div class="notice-login">
		请先<a href="index.php?m=index&f=login&a=init">登录</a>
		<a href="javascript:;" class="btn btn-success">取消登录</a>
	</div><?php }
}
