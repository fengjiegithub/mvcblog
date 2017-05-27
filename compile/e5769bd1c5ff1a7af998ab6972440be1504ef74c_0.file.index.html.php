<?php
/* Smarty version 3.1.30, created on 2017-03-08 08:14:00
  from "F:\wamp\www\w1610\2-28mvc\template\admin\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bfaf38786678_81977086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5769bd1c5ff1a7af998ab6972440be1504ef74c' => 
    array (
      0 => 'F:\\wamp\\www\\w1610\\2-28mvc\\template\\admin\\index.html',
      1 => 1488957236,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bfaf38786678_81977086 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/index.css">
	</head>
	<body>
	<div class="header">
		<h1><?php echo $_smarty_tpl->tpl_vars['aname']->value;?>
欢迎来到内容管理系统</h1>
        <a href="index.php?m=admin&f=index&a=logout">退出</a>
	</div>
	<div class="main">
		<div class="left">
			<ul class="menu">
				<li class="opt">
					用户管理
					<ul class="son">
						<li><a href="" target="right">添加用户</a></li>
						<li><a href="index.php?m=admin&f=user&a=select" target="right">管理用户</a></li>
					</ul>
				</li>
				<li class="opt">
					分类管理
					<ul class="son">
						<li><a href="index.php?m=admin&f=category&a=showadd" target="right">添加分类</a></li>
						<li><a href="index.php?m=admin&f=category&a=edit" target="right">管理分类</a></li>
					</ul>
				</li>
				<li class="opt">
					内容管理
					<ul class="son">
						<li><a href="" target="right">添加内容</a></li>
						<li><a href="index.php?m=admin&f=art&a=show" target="right">管理内容</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="right">
			<iframe src="" frameborder="0" name="right"></iframe>
		</div>
	</div>
	</body>
</html>
<?php }
}
