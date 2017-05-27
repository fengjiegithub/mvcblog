<?php
/* Smarty version 3.1.30, created on 2017-03-07 12:36:05
  from "F:\wamp\www\w1610\2-28mvc\template\admin\user.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58be9b25868392_47811309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '554dabc7bd355ab0c023868492ce59e8f949b06d' => 
    array (
      0 => 'F:\\wamp\\www\\w1610\\2-28mvc\\template\\admin\\user.html',
      1 => 1488886561,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58be9b25868392_47811309 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/bootstrap.min.css" />
	</head>
	<style>
		th,td{
			text-align: center;
		}
	</style>
	<body>
		<table class="table table-bordered">
			<tr>
				<th>id</th>
				<th>用户名</th>
				<th>操作</th>
			</tr>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value["uid"];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>
</td>
				<td><a href="index.php?m=admin&f=user&a=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value["uid"];?>
">删除</a>
					<a href="index.php?m=admin&f=user&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['v']->value["uid"];?>
">编辑</a></td>
			</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	    </table>
	</body>
</html>
<?php }
}
