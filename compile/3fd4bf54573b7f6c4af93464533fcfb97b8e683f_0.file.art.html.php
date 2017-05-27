<?php
/* Smarty version 3.1.30, created on 2017-03-18 06:12:12
  from "F:\wamp\www\w1610\2-28mvc\template\admin\art.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ccc1ac509d01_90819836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fd4bf54573b7f6c4af93464533fcfb97b8e683f' => 
    array (
      0 => 'F:\\wamp\\www\\w1610\\2-28mvc\\template\\admin\\art.html',
      1 => 1489770144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ccc1ac509d01_90819836 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/art.css" />
	</head>
	<body>
		<table class="table table-bordered">
			<tr>
				<th>sid</th>
				<th>标题</th>
				<th>类别</th>
				<th>作者</th>
				<th>点赞数</th>
				<th>点击数</th>
				<th>发布时间</th>
				<th>状态</th>
				<th>操作</th>
			</tr>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value["sid"];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value["good"];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value["hits"];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value["stime"];?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['v']->value["state"] == 0) {?>
					未审核
					<?php } elseif ($_smarty_tpl->tpl_vars['v']->value["state"] == 1) {?>
					未通过
					<?php } elseif ($_smarty_tpl->tpl_vars['v']->value["state"] == 2) {?>
					审核中
					<?php } elseif ($_smarty_tpl->tpl_vars['v']->value["state"] == 3) {?>
					审核通过
					<?php }?>
				</td>
				<td><a href="index.php?m=admin&f=art&a=info&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
">查看</a><a href="">删除</a></td>
			</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </table>
        <?php echo $_smarty_tpl->tpl_vars['pages']->value;?>

	</body>
</html>
<?php }
}
