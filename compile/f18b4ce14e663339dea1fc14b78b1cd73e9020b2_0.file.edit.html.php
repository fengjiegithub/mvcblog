<?php
/* Smarty version 3.1.30, created on 2017-03-13 11:00:40
  from "F:\wamp\www\w1610\2-28mvc\template\admin\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c66dc856c9a4_49776754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f18b4ce14e663339dea1fc14b78b1cd73e9020b2' => 
    array (
      0 => 'F:\\wamp\\www\\w1610\\2-28mvc\\template\\admin\\edit.html',
      1 => 1489399234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c66dc856c9a4_49776754 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/bootstrap.min.css" />
	</head>
	<body>
		<table class="table table-bordered">
			<tr>
			<th>cid</th>
			<th>cname</th>
			<th>pid</th>
			<th>img</th>
			<th>操作</th>
			
			</tr>
			<tr>
				<?php echo $_smarty_tpl->tpl_vars['tree']->value;?>

			</tr>
			
        </table>
	</body>
</html>
<?php }
}
